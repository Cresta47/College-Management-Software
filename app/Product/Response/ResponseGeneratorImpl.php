<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/3/2016
 * Time: 7:17 PM
 */

namespace App\Product\Response;

class ResponseGeneratorImpl implements IResponseGenerator{

    private $response;

    public function __construct()
    {
        $this->response['data'];
        $this->response['status'];
        $this->response['businessStatusCode'];
        $this->response['info'] = [];
        $this->response['warning'] = [];
        $this->response['error'] = [];
    }

    public function setData($data){
        $this->response['data'] = $data;
    }

    public function setHttpStatus($status){
        $this->response['status'] = $status;
    }

    public function setBusinessStatus($businessStatusCode){
        $this->response['businessStatusCode'] = $businessStatusCode;
    }

    public function addInfoMessage($msg){
        $this->response['info'][] = $msg;
    }

    public function addErrorMessage($msg){
        $this->response['warning'][] = $msg;
    }

    public function addWarningMessage($msg){
        $this->response['error'][] = $msg;
    }

    public function getResponse(){
        return $this->response;
    }

    public static function getInstance(){
        return new ResponseGeneratorImpl();
    }

}