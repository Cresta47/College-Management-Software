<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\Service;

use App\Facades\ResponseGenerator;
use App\Product\DAO\PermissionDAO;

Class PermissionService implements IPermissionService{

    private $permissionDAO;

    public function __construct(PermissionDAO $pDAO){
        $this->permissionDAO = $pDAO;
    }

    public function findAll($request){
        return $this->permissionDAO->findAll(array());
    }

    public function findById($request,$Id){

    }

    public function findByIds($request,$ids){

    }

    public function create($request){

    }

    public function update($request,$id){

    }

    public function deleteById($request,$id){

    }

    public function deleteByIds($request,$ids){

    }
}