<?php
namespace App\Product\DAO;

use App\PermissionModel;
use App\Product\daoutil\PermissionDTOTransformer;
use App\Product\response\ResponseGenerator;
use App\Product\Exception\DAOException;

Class PermissionDAO implements IPermissionDAO{

    private $permissionDTOTransformer;

    public function __construct()
    {
        $this->permissionDTOTransformer = new PermissionDTOTransformer();
    }

    public function findAll($columns){
    }

    public function findById($id,$columns){
    }

    public function findByIds($permissionsIDs,$columns){
    }

    public function create($permission){
    }

    public function update($permission){
    }

    public function deleteById($id){
    }

    public function deleteByIds($ids){
    }

}