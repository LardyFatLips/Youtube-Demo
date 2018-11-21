<?php

namespace App\Controllers;

use App\Core\App;
use App\Services\YoutubeService;

class VideosController

{

    protected $youtubeClient;

    public function __construct(){

        $this->youtubeClient = new YoutubeService();

    }

	public function home()

	{

	    $videos = [];

		return view('index', compact('videos'));

	}
	

	public function index()
	{


		$videos = App::get('database')->selectAll('videos');

		return view('videos', compact('videos'));


	}


	public function store()

	{


        App::get('database')->insert('videos',[

            'url' => $_POST['videoId'],
            'title' => $_POST['title'],
            'description' => $_POST['description']

        ]);


		return redirect('index');

	}


	public function search(){

        $videos = $this->youtubeClient->search($_POST['title']);

        return view('index', compact('videos'));



    }

}