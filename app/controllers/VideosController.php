<?php

namespace App\Controllers;

use App\Core\App;
use App\Services\YoutubeService;

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

//		App::get('database')->insert('videos',[
//
//		'title' => $_POST['title']
//
//
//		]);
//
//
//		return redirect('videos');

	}


	public function search(){

        $youtubeClient = new YoutubeService();
         = $youtubeClient->search($_POST['title']);

        return view('index', 'videos');

    }

}