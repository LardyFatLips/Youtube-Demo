<?php
/**
 * Created by PhpStorm.
 * User: joeward
 * Date: 22/11/2018
 * Time: 14:48
 */

namespace App\Services;

use App\Core\App;

/**
 * Class KafkaService
 * @package App\Services
 *
 * Uses RDKafka to send event
 */
class KafkaService
{

    /**
     * KafkaService constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param $data
     */
    public function produce($topic, $data){


        $payload = array();
        $payload += array('url' => $data['url']);
        $payload += array('title' => $data['title']);
        $payload += array('description' => $data['description']);

        $json = json_encode($payload);

        $rk = new \RdKafka\Producer();
        $rk->addBrokers(App::get('config')['kafka']['broker']);
        $topic = $rk->newTopic('video-saved');
        $topic->produce(RD_KAFKA_PARTITION_UA, 0, $json);

    }



}