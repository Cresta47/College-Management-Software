<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/19/2016
 * Time: 7:41 PM
 */

namespace App\Product\Response;

Class ResponseDTO{

    private $response;

    public function __construct(){
        $this->response['data'];
        $this->response['status'];
        $this->response['businessStatusCode'];
        $this->response['info'] = array();
        $this->response['warning'] = array();
        $this->response['error'] = array();
    }
}