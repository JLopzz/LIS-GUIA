<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pelicula;

class Home extends BaseController
{
	public function index()
	{
		$pel = new Pelicula();
		
		$data = [
			'pelicula'=>$pel->find(),
		];

		return view('main',$data);
	} 

	//--------------------------------------------------------------------

}
