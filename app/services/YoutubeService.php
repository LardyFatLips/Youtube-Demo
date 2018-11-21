<?php 

namespace App\Services;

use App\Core\App;
use App\Repositories\YoutubeRepository;
use Madcoda\Youtube\Youtube;

class YoutubeService
{
	protected $youtubeClient;
	protected $youtubeRepository;

	function __construct()
	{

	    $this->youtubeClient = new Youtube(array('key' => App::get('config')['youtube']['key']));
	    $this->youtubeRepository = new YoutubeRepository();

	}

	public function search($name)
    {

        return ($this->youtubeClient->searchVideos($name, 20));

    }

    public function retrieveSavedVideos(){


        return $this->youtubeRepository->selectAll();

    }


    public function parsesave($data){


	    $this->youtubeRepository->create($data);

    }



}


