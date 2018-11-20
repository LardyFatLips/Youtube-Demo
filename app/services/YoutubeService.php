<?php 

namespace App\Services;

use App\Core\App;
use Madcoda\Youtube\Youtube;

class YoutubeService
{

	protected $youtubeClient;

	function __construct()
	{

	    $this->youtubeClient = new Youtube(array('key' => App::get('config')['youtube']['key']));

	}

	public function search($name,$limit=10)
    {

        return ($this->youtubeClient->searchVideos($name,$limit));

    }


}


