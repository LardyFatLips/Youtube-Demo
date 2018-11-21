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

    public function __construct(){}


    public function selectAll(){

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



//        $rk = new RdKafka\Producer();
//        $rk->setLogLevel(LOG_DEBUG);
//        $rk->addBrokers('127.0.0.1');
//        $topic = $rk->newTopic("video-saved");
//        $topic->produce(RD_KAFKA_PARTITION_UA, 0, 'Hi');

    }


}