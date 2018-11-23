<?php 

namespace App\Services;

use App\Core\App;
use App\Repositories\YoutubeRepository;
use Madcoda\Youtube\Youtube;

/**
 * Class YoutubeService
 * @package App\Services
 *
 * Calls the youtube client to query the api with key stored via config
 * Calls youtube repository to interact with modal
 *
 */
class YoutubeService
{
    /**
     * @var Youtube
     */
    protected $youtubeClient;
    /**
     * @var YoutubeRepository
     */
    protected $youtubeRepository;

    /**
     * YoutubeService constructor.
     * @throws \Exception
     */
    function __construct()
	{

	    $this->youtubeClient = new Youtube(array('key' => App::get('config')['youtube']['key']));
	    $this->youtubeRepository = new YoutubeRepository();

	}

    /**
     * @param $name
     * @return \StdClass
     */
    public function search($name)
    {

        return ($this->youtubeClient->searchVideos($name, 20));

    }

    /**
     * @return mixed
     */
    public function retrieveSavedVideos()
    {
        return $this->youtubeRepository->selectAll();

    }


    /**
     * @param $data
     */
    public function parsesave($data)
    {

	    $this->youtubeRepository->create($data);

    }



}


