<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function index(){
		$legumes = array('carottes', 'poivrons', 'choux fleur');
		$fruits = '<b>mangue</b>';

		return view('pages/home', array('legumes' => $legumes, 'fruits' => $fruits));
	}

	public function about(){
		return view('pages/about');
	}
}
