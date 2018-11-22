<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;
use App\Services\KafkaService;
use App\Services\YoutubeService;

/**
 * Class VideosController
 * @package App\Controllers
 *
 * Method names are a bit confusing come to think of it so should really refactor and change after discussion
 *
 * Controller methods delegate actions then call global functions to give a response
 */
class VideosController

{

    /**
     * @var YoutubeService
     */
    protected $youtubeService;
    /**
     * @var KafkaService
     */
    protected $kafkaService;

    /**
     * VideosController constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this->youtubeService = new YoutubeService();
        $this->kafkaService = new kafkaService();

    }

    /**
     * @return mixed
     *
     */
    public function home()

	{

	    $videos = [];

		return view('index', compact('videos'));

	}


    /**
     * @return mixed
     *
     * Calls service to call repository then trigger data retrieval
     * Maybe a bit ott here but wanted to separate concerns
     */
    public function index()
	{

        $videos = $this->youtubeService->retrieveSavedVideos();


		return view('videos', compact('videos'));


	}


    /**
     * @throws \Exception
     * Checks request
     * Calls youtubeservice and parses the chosen vid for saving
     * Passes to kafka if no exception thrown or db error
     *
     */
    public function store()

	{
        $data = Request::postParse('data');

        $this->youtubeService->parseSave($data);

        $this->kafkaService->produce($data);

		return redirect('index');

	}


    /**
     * @return mixed
     *
     * Calls youtube service to search for videos based on the title of the post var title
     * Should have parsed Request but forgot and said wouldn't change in evening
     */
    public function search()
    {

        $videos = $this->youtubeService->search($_POST['title']);

        return view('index', compact('videos'));



    }

}