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

		return view('index');

	}
	

	public function index()
	{


		$videos = App::get('database')->selectAll('videos');

		return view('videos', compact('videos'));


	}


	public function store()

	{

	    var_dump($_POST['videoId']);

        App::get('database')->insert('videos',[

            'url' => $_POST['videoId'],
            'title' => $_POST['videoId']

        ]);


		return redirect('index');

	}


	public function search(){

        $videos = $this->youtubeClient->search($_POST['title'],$_POST['limit']);

        return view('index', compact('videos'));



    }

}