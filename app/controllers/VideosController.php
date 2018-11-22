<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;
use App\Services\KafkaService;
use App\Services\YoutubeService;

class VideosController

{

    protected $youtubeService;
    protected $kafkaService;

    public function __construct()
    {
        $this->youtubeService = new YoutubeService();
        $this->kafkaService = new kafkaService();

    }

	public function home()

	{

	    $videos = [];

		return view('index', compact('videos'));

	}
	

	public function index()
	{

        $videos = $this->youtubeService->retrieveSavedVideos();


		return view('videos', compact('videos'));


	}


	public function store()

	{
        $data = Request::postParse('data');

        $this->youtubeService->parseSave($data);

        $this->kafkaService->produce($data);

		return redirect('index');

	}


	public function search()
    {

        $videos = $this->youtubeService->search($_POST['title']);

        return view('index', compact('videos'));



    }

}