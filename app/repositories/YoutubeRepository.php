<?php
/**
 * Created by PhpStorm.
 * User: joeward
 * Date: 21/11/2018
 * Time: 16:08
 */


namespace App\Repositories;

use App\Core\App;
use App\Models\Video;

class YoutubeRepository
{

    public function __construct(){

    }


    public function selectAll()
    {

        return Video::selectAll();

    }


    public function selectBy($data){

        return Video::selectBy($data);

    }

    public function create($data){

        $row = $this->selectBy($data);

        if(empty($row)) {

            Video::insert($data);
        }
    }


}