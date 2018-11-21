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

        $data = $_POST['data'];

        $this->youtubeClient->parseSave($data);

		return redirect('index');

	}


	public function search(){

        $videos = $this->youtubeClient->search($_POST['title']);

        return view('index', compact('videos'));



    }

}