<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\service;

use App\Product\dao\RoleDAO;
use App\Product\response\ResponseGeneratorImpl;

Class RoleService {

    private $responseGenerator;
    private $roleDAO;

    public function __construct(){
        $this->responseGenerator = new ResponseGeneratorImpl();
        $this->roleDAO = new roleDAO();
    }

    public function findAll(){
    }

    public function findById($Id){
    }

    public function create($role){
        $this->roleDAO->_create($role);
    }

    public function update($role){
    }

    public function delete(){

    }
}