<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModCust;

class Home extends BaseController
{
	public function index()
	{
		
		$mod = new ModCust();

		$builder = $mod->builder();
		
		$select = $mod->find(2);
		$a = view('welcome_message');
		$select2 = $builder -> where('genero.idgenero',2);
		print_r($select2);
		//print_r($select);
		//return $a;
	} 

	//--------------------------------------------------------------------

}
