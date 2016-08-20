<?php

namespace App\Product\DAO;

use App\RoleModel;
use App\Product\daoutil\RoleDTOTransformer;

Class RoleDAO implements IRoleDAO{

    private $roleDTOTransformer;

    public function __construct(){
        $this->roleDTOTransformer = new RoleDTOTransformer();
    }

    public function findAll($columns){
        $roles = RoleModel::all();
        $result = array();
        foreach($roles as $role){
            array_push($result,$this->roleDTOTransformer->formatDataFromDb($role));
        }
        return $result;
    }

    public function findById($id, $columns){

    }

    public function findByIds($ids, $columns)
    {
        // TODO: Implement findByIds() method.
    }

    public function create($role){
        $result = $this->roleDTOTransformer->formatDataToDb($role);
        RoleModel::create($result);
    }

    public function update($role){

    }

    public function deleteById($id){

    }

    public function deleteByIds($ids)
    {
        // TODO: Implement deleteByIds() method.
    }

}