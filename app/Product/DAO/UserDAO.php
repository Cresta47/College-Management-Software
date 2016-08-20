<?php
namespace App\Product\DAO;

use App\UserModel;
use App\Product\daoutil\UserDTOTransformer;
use App\Product\response\ResponseGenerator;

Class UserDAO implements IUserDAO{

    private $userDTOTransformer;
    private $userDetailDAO;

    public function __construct(){
        $this->userDTOTransformer = new UserDTOTransformer();
        $this->userDetailDAO = new UserDetailDAO();
    }

    public function findAll($columns){
        $users = UserModel::all();
        foreach($users as $user){
            $result[] = $this->userDTOTransformer->formatDataFromDb($user);
        }
        return $result;
    }

    public function findById($id,$columns){
        $user = UserModel::findOrFail($id);
        $user = $this->userDTOTransformer->formatDataFromDb($user);
        return $user;
    }

    public function findByIds($ids,$columns)
    {
        // TODO: Implement findByIds() method.
    }

    public function create($user){
        $result = $this->userDTOTransformer->formatDataToDb($user);
        UserModel::create($result);
    }

    public function update($user){
        $result = $this->userDTOTransformer->formatDataToDb($user);
        UserModel::where('id','=',$result['id'])->update($result);
    }

    public function deleteById($id){
        // TODO: Implement deleteByIds() method.
    }

    public function deleteByIds($ids){
        // TODO: Implement deleteByIds() method.
    }
}