<?php

namespace App\Product\DAO;

use App\Product\Service\UserService;
use App\RoleModel;
use App\Product\daoutil\RoleDTOTransformer;
use App\Product\response\ResponseGenerator;
use App\Product\Exception\DAOException;

Class RoleDAO implements IRoleDAO{

    private $roleDTOTransformer;

    private $userService;

    public function __construct(UserService $usrService){
        $this->roleDTOTransformer = new RoleDTOTransformer();
        $this->userService = $usrService;
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
        $role = RoleModel::find($id);
        if($role != null){
            $role = $this->roleDTOTransformer->formatDataFromDb($role);
        }else{
            throw new DAOException("Error fetching Role with id:".$id." !");
        }
        return $role;
    }

    public function findByIds($ids, $columns)
    {
        $roles = RoleModel::whereIn('id',$ids)->get();
        if($roles != null){
            foreach($roles as $role){
                $result[] = $this->roleDTOTransformer->formatDataFromDb($role);
            }
        }else{
            throw new DAOException("Error fetching all Roles!");
        }
        return $result;
    }

    public function create($role){
        $result = $this->roleDTOTransformer->formatDataToDb($role);
        unset($result->id); // As we are inserting new record we need to remove any ID that may have come from frontends or services
        $insertedRoleModel = RoleModel::create($result);
        return $this->roleDTOTransformer
            ->formatDataFromDb(
                $insertedRoleModel
            );
    }

    public function update($role){
        $transformedRoleEntity = $this->roleDTOTransformer->formatDataToDb($role);
        RoleModel::where('id','=',$role['id'])
                  ->update($transformedRoleEntity);
        return $this->roleDTOTransformer->formatDataFromDb($transformedRoleEntity);
    }

    public function deleteById($id){
        $role = RoleModel::where('id','=',$id)->delete();
        if($role == null){
            throw new DAOException("Error deleting a Role!");
        }
        return null;
    }

    public function deleteByIds($ids)
    {
       $roles = RoleModel::whereIn('id',$ids)->delete();
        if($roles == null){
            throw new DAOException("Error deleting all Roles!");
        }
        return null;
    }

}