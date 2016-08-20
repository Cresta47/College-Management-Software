<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\Service;

use App\Product\dao\UserDAO;
use App\Product\response\ResponseGeneratorImpl;

Class UserService {

    private $responseGenerator;
    private $userDAO;

    public function __construct(UserDAO $uDAO){
        $this->responseGenerator = new ResponseGeneratorImpl();
        $this->userDAO = $uDAO;
    }

    public function findAll(){
        $users = $this->userDAO->index();
        return $users;
    }

    public function findById($Id){
        $user = $this->userDAO->findById($Id, array());
        $this->responseGenerator->setData($user);
        $this->responseGenerator->setHttpStatus(200);
        $this->responseGenerator->setBusinessStatus("RES-User-1");
        return $this->responseGenerator->getResponse();
    }

    public function create($user){
        $this->userDAO->create($user);
    }

    public function update($user){
        $this->userDAO->update($user);
    }

    public function delete(){

    }
}