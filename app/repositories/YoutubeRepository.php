<?php
/**
 * Created by PhpStorm.
 * User: joeward
 * Date: 21/11/2018
 * Time: 16:08
 */


namespace App\Repositories;

use App\Models\Video;

/**
 * Class YoutubeRepository
 * @package App\Repositories
 *
 * Interacts with the model
 */
class YoutubeRepository
{

    /**
     * YoutubeRepository constructor.
     */
    public function __construct(){

    }


    /**
     * @return mixed
     */
    public function selectAll()
    {

        return Video::selectAll();

    }


    /**
     * @param $data
     * @return mixed
     */
    public function selectBy($data)
    {

        return Video::selectBy($data);

    }

    /**
     * @param $data
     */
    public function create($data)
    {

        $row = $this->selectBy($data);

        if(empty($row)) {

            Video::insert($data);
        }
    }


}