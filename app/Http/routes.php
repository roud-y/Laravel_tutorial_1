<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'PagesController@index');
//Route::get('/about', 'PagesController@about');

	//Route::get('/food', ['as' => 'songs_path', 'uses' => 'SongsController@index']);
	//Route::get('/food/{fruit}', ['as' => 'song_path', 'uses' => 'SongsController@show']);
	//Route::get('/songs/{slug}/edit', 'SongsController@edit');
	//Route::patch('/songs/{slug}', 'SongsController@update');


resource('fruit', 'SongsController');

//pour enlever une des route on rajoute un argument
//[
//'only ou except' => [
//	'index', 'show', 'edit'
//	]
//]

//pour changer la reference des route (si on change {songs} on doit le changer partout)
//on change le deuxieme parametre pour ['as' => 'songs_path', 'uses' => 'SongsController@index']
//en fesant ca, ca donne un name a la route (php artisan route:list)
//apres on change les url dans index pour route(song!s!_path, [$song!->slug])

//grace au package illuminate/html on a acces au helpers.php
// ex.: {!! link_to_route('songs_path', 'retour à l\'accueil') !!}

//si on veut changer les nom par defaut des route on rajoute un troisieme argument
//['names' => [
//		'index'=> 'songs_path'
//	]
//]
//on peut aussi combiner dans le troisieme parametre

//la fonction route() retourne un l'url de la route passé en paramètre



//episode 12
//nouvelle facon de redirect : redirect()->route('fruit.index');
//creation de partial (comme les formulaire qu'on réutilise tout le temps)
//on l'inclu avec @include(songs/_form);
//quand on ouvre un formulaire on peut utiliser open(), mais c'est mieux d'utiliser model()
//parce que ca va remplir les champs du formalaire
//{!! Form::model($songs, ['route' => ['fruit.update', $songs->slug], 'method' => 'PATCH']) !!}

//episode 13
//validation
//php artisan make:request CreateFruitRequest
//'title' => 'required',
//'slug' => 'required|unique:tuto_fruits,slug'
//on remplace la classe request par la classe que l'on vient de créer ca va valider tout seul (2 en 1
//il faut inclure la class en utilisant use
//pour afficher les erreurs dans les vues : {!! $errors->first('nom de la conditions','<span class="help-block">:message</span>')!!}

//episode 14
//delete
//{!! Form::submit('Effacer',['class' => 'btn btn-danger'])!!}
//$fruit->delete();
//faire des fonctions globales dans le code
//créer un fichier dans http ex.: helpers.php
//on le rajoute dans composer.json dans le array autoload
// "files" : ["app/Http/helpers.php"]
//apres on run composer dump-autoload
//CRÉER UN JOURNAL DAPPRENTISSAGE

//le probleme du css qui suit pas
Route::get('/blm/blm', 'PagesController@index');
Route::get('/blm', 'PagesController@index');

/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
