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

	public function search($name)
    {


        return ($this->youtubeClient->searchVideos($name, 20));




    }

    public function parsesave($data){


            App::get('database')->insert('videos',[

                'url' => $data['url'],
            'title' => $data['title'],
            'description' => $data['description']

        ]);

        }

}


