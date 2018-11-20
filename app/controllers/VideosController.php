<?php

namespace App\Controllers;

use App\Core\App;

class VideosController

{
	

	public function home()

	{

		return view('index');

	}
	

	public function index()
	{


		$videos = App::get('database')->selectAll('videos');

		return view('videos', compact('videos'));


	}


	public function store()

	{

		App::get('database')->insert('videos',[

		'title' => $_POST['title']
		//'url' => $_POST['url']
		
		]);

		
		return redirect('videos');

	}

}