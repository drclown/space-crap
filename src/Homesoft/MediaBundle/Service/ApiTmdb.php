<?php

namespace Homesoft\MediaBundle\Service;

use Symfony\Component\HttpFoundation\Request;
use Monolog\Handler\Curl;

class ApiTmdb {
    private $key;

    public function __construct() {
        $this->key = "c971d5aa22ac894f5f011b15584d9f78";
    }

    public function getMedia($title) {
        /*$curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.themoviedb.org/3/search/movie?query='.$title.'&api_key='.$this->key.'&language=fr');

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


        $return = curl_exec($curl);

        curl_close($curl);

        print_r($return);*/
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        echo 'https://api.themoviedb.org/3/search/movie?query='.$title.'&api_key='.$this->key.'&language=fr';
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://api.themoviedb.org/3/search/movie?query='.$title.'&api_key='.$this->key.'&language=fr',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        print_r($resp);
    }

}