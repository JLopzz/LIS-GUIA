<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pelicula;
use App\Helpers\DBWork;
use SplFileInfo;

/**
 * App\Controllers\Home
 * 
 * Clase principal, que trabaja con el procesamiento de los datos
 * Basada en el archivo base, de CodeIgniter, redirecciona a si misma o al formulario
 * de ingreso de peliculas
 * 
 * Creada por: Gerardo Lopez
 * 
 */

class Home extends BaseController
{
	private $state = [];

	/* Funcion Pincipal, se ejecuta al iniciar el entorno. */
	public function index()
	{
		$pel = new Pelicula();
		$data = [ 'pelicula' => array_reverse($pel->find()) ];
		return view('main',$data);
	} 

	/**
	 * addForm(): string
	 * 
	 * Funcion que manda a llamar la vista del formulario
	 * Ocupa Estado general del formulario y de las consultas
	 * para inicializarse en limpio, y sin errores. 
	 * 
	 */
	public function addForm(): string{
		$this->state = [
			'errors' => [
				'error' 	=> false,
				'errorMsg'=> []
			],
			'values' => [
				'title'			=>'',
				'director'	=>'',
				'long'			=>'',
				'desc'			=>'',
				'genero'		=>'',
				'original' => ''
			]
		];
		return view('addForm',$this->state);
	}

	/**
	 * getMsg( string $key ): string
	 * 
	 * Funcion para generar string del mensaje de error
	 * que se mostrara a la hora de generarse un error al mandar
	 * la informacion del formulario.
	 * 
	 */
	private function getMsg(string $key): string{
		switch($key){
			case "title": $msg = 'Titulo de Pelicula'; break;
			case "director": $msg = 'Director de la Pelicula'; break;
			case "long": $msg = 'Duracion de la Pelicula'; break;
			case "desc": $msg = 'Descripcion de la pelicula'; break;
			default: $msg = 'campo no especificado';
		}
		return 'El campo <label for='.$key.'><strong>'.$msg.'</strong></label> esta vacio!';
	}

	/**
	 * manageError( array $pos, $file ): array
	 * 
	 * Funcion que retorna un arreglo con los errores, seteando como variable principal
	 * $var['error'] = TRUE para desplegar los mensajes de error en pantalla.
	 * 
	 */
	private function manageError(array $pos, $file): array{
		$res = [
			'error' 	=> false,
			'errorMsg'=> []
		];
		if($file->getError() > 0){
			$res['error'] = true;
			array_push($res['errorMsg'], $file->getErrorString());
		}
		if(file_exists(WRITEPATH.'/imgs/'.$file->getClientName())){
			$res['error'] = true;
			array_push($res['errorMsg'],'Imagen <strong>YA</strong> existe en la base de datos');
		}
		foreach($pos as $k => $d){
			if($d == '' && $k != 'original'){
				$res['error'] = true;
				array_push($res['errorMsg'], $this->getMsg($k));
			}
		}
		return $res;
	}
	
	/**
	 * processData()
	 * 
	 * Funcion de procesamiento y guardado.
	 * Manda error si el formulario esta incompleto
	 * redirecciona a la pagina de inicio, para mostrar el resultado.
	 * 
	 */
	public function processData(){
		$img = $_FILES['img'];
		$file = $this->request->getFile('img');
		$pos = $this->request->getPost();
		$this->state = [
			'errors' => $this->manageError($pos,$file),
			'values' => $pos,
		];
		//muestra el estado y los errores si existen
		if(!$this->state['errors']['error']){
			$pel = new Pelicula();
			$dbWork = new DBWork;
			$data = [
				'titulopelicula'	=>	$pos['title'],
				'descripcion'			=>	$pos['desc'],
				'imgpelicula'			=>	'img/'.$file->getClientName(),
				'titulooriginal'	=>	$pos['original'],
				'duracion'				=>	$pos['long'],
				'idgenero'				=>	$pos['genero'],
				'iddirector'			=>	$dbWork->compDir($pos['director'])
			];
			$file->move(WRITEPATH.'/img/',$file->getClientName());
			$pel->insert($data);
			$d = [ 'pelicula' => $pel->find() ];
			return redirect()->to(base_url());
		}
		else return view('addForm',$this->state);
		
	}

	//--------------------------------------------------------------------

}
