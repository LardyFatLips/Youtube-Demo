<?php
/**
 * Created by PhpStorm.
 * User: joeward
 * Date: 21/11/2018
 * Time: 16:10
 */

namespace App\Models;

use App\Core\App;

class Video
{

    public static function insert($data)
    {

        App::get('database')->insert('videos', [

            'url' => $data['url'],
            'title' => $data['title'],
            'description' => $data['description']

        ]);

    }

    public static function selectBy($data)
    {

        return (App::get('database')->SelectBy('videos',[

            'url' => $data['url']

        ]));

    }

    public static function selectAll()
    {

        return (App::get('database')->selectAll('videos'));
    }


}