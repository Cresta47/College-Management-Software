<?php
namespace App\Product\DAO;

use App\UserModel;
use App\Product\daoutil\UserDTOTransformer;
use App\Product\response\ResponseGenerator;

Class UserDAO extends UserModel{

    private $userDTOTransformer;
    private $userDetailDAO;

    public function __construct(){
        $this->userDTOTransformer = new UserDTOTransformer();
        $this->userDetailDAO = new UserDetailModelDAO();
    }

    public function index(){
        $users = UserModel::all();

        foreach($users as $user){
            $result[] = $this->userDTOTransformer->unmarshall($user);
            $userIDs[] = $user['id'];
        }

        return $result;

    }

    public function findById($id){
        $user = UserModel::findOrFail($id);
        $user = $this->userDTOTransformer->unmarshall($user);
        return $user;
    }

    public function _create($user){
        $userMarshalled = $this->userDTOTransformer->marshall($user);
        UserModel::create($userMarshalled);
    }

    public function _update($user){

    }

    public function _delete($id){

    }

}