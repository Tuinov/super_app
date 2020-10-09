<?php


namespace App\Http\Controllers;


class StartController
{

    public function index()
    {
        $url_data = [
            [
                'title' => 'DKA',
                'url' => 'http://dka-develop.ru',
            ],
            [
                'title' => 'youtube',
                'url' => 'http://youtube.com',
            ]
        ];
        //dd(json_encode($url_data));
        return view('start', [
            'url_data' => $url_data
        ]);

    }
}