<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Http\Requests\CreateFruitRequest;

use App\Fruit;

class SongsController extends Controller {

	private $fruit;

	function __construct(Fruit $fruit) {
		$this->fruit = $fruit;
	}

	//
	public function index(){
		$songs = $this->fruit->get();//DB::table('fruits')->get();//$this->getSongs();
		//dd(var_dump($songs));

		return view('songs/index', array('songs' => $songs));
	}

	public function show($slug){
		$songs = $this->fruit->where('slug', '=', $slug)->first();
		
		return view('songs/show', array('songs' => $songs));
	}

	public function create(){
		return view('songs/create');
	}

	public function store(CreateFruitRequest $request, Fruit $songs){
		$data = $request->all();

		$songs->nom = $data['nom'];
		$songs->calories = $data['calories'];
		$songs->slug = $data['slug'];
		$songs->save();

		return redirect()->route('fruit.index');
	}

	public function edit($slug){
		$songs = $this->fruit->where('slug', '=', $slug)->first();

		return view('songs/edit', array('songs' => $songs));
	}

	public function update($slug, Request $request){
		$data = $request::all();
		$songs = $this->fruit->where('slug', '=', $slug)->first();
		//var_dump($songs);
		$songs->nom = $data['nom'];
		$songs->calories = $data['calories'];
		$songs->slug = "mang";

		$songs->save();

		return redirect()->route('fruit.index');
	}

	public function destroy($slug){
		$songs = $this->fruit->where('slug', '=', $slug)->first();
		$songs->delete();
		//ca devrait etre juste ca : $fruit->delete(); et avoir en parametre Fruit $fruit
		return redirect()->route('fruit.index');
	}
	/*private function getSongs(){
		return $songs = array('song1', 'song2', 'song3');
	}*/
}
