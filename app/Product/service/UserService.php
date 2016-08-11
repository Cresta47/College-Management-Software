<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\service;

use App\Product\dao\UserDAO;
use App\Product\response\ResponseGeneratorImpl;

Class UserService {

    private $responseGenerator;

    public function __construct(){
        $this->responseGenerator = new ResponseGeneratorImpl();
    }

    public function findAll(){
        $userDAO = new UserDAO();
        $users = $userDAO->index();
        return $users;
    }

    public function findById($Id){
        $userDAO = new UserDAO();
        $user = $userDAO->findById($Id);
        $this->responseGenerator->setData($user);
        $this->responseGenerator->setHttpStatus(200);
        $this->responseGenerator->setBusinessStatus("RES-User-1");
        return $this->responseGenerator->getResponse();
    }

    public function save(){

    }

    public function update(){

    }

    public function delete(){

    }
}