<?php

namespace App\Product\DAO;

use App\RoleModel;
use App\Product\daoutil\RoleDTOTransformer;

Class RoleDAO {

    private $roleDTOTransformer;

    public function __construct(){
        $this->roleDTOTransformer = new RoleDTOTransformer();
    }

    public function index(){
        $roles = RoleModel::all();
        $result = array();
        foreach($roles as $role){
            array_push($result,$this->roleDTOTransformer->formatDataFromDb($role));
        }
        return $result;
    }

    public function findById($id){
    }

    public function _create($role){
        $result = $this->roleDTOTransformer->formatDataToDb($role);
        RoleModel::create($result);
    }

    public function _update($role){

    }

    public function _delete($id){

    }

}