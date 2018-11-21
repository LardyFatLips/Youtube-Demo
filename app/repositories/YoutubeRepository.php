<?php
/**
 * Created by PhpStorm.
 * User: joeward
 * Date: 21/11/2018
 * Time: 16:08
 */


namespace App\Repositories;

use App\Core\App;

class YoutubeRepository
{

    public function __construct(){}

    public function create($data){


        $row = $this->selectBy($data);

        var_dump(row);

        if(empty($row)) {
            App::get('database')->insert('videos', [

                'url' => $data['url'],
                'title' => $data['title'],
                'description' => $data['description']

            ]);
        }
    }

    public function selectAll(){

        return (App::get('database')->selectAll('videos'));

    }


    public function selectBy($data){

        return (App::get('database')->SelectBy('videos',[

            'url' => $data['url']

        ]));

    }


}