<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\Service;

use App\Product\DAO\IRoleDAO;
use App\Product\DAO\RoleDAO;
use App\Product\Response\ResponseGeneratorImpl;

Class RoleService {

    private $responseGenerator;
    private $roleDAO;

    public function __construct(RoleDAO $rDAO){
        $this->responseGenerator = new ResponseGeneratorImpl();
        $this->roleDAO = $rDAO;
    }

    public function findAll(){
        return $this->roleDAO->findAll(array());
    }

    public function findById($Id){
    }

    public function create($role){
        $this->roleDAO->create($role);
    }

    public function update($role){
    }

    public function delete(){

    }
}