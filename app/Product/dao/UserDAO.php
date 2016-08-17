<?php
namespace App\Product\DAO;

use App\UserModel;
use App\Product\daoutil\UserDTOTransformer;
use App\Product\response\ResponseGenerator;

Class UserDAO {

    private $userDTOTransformer;
    private $userDetailDAO;

    public function __construct(){
        $this->userDTOTransformer = new UserDTOTransformer();
        $this->userDetailDAO = new UserDetailDAO();
    }

    public function index(){
        $users = UserModel::all();

        foreach($users as $user){
            $result[] = $this->userDTOTransformer->formatDataFromDb($user);
        }

        return $result;

    }

    public function findById($id){
        $user = UserModel::findOrFail($id);
        $user = $this->userDTOTransformer->formatDataFromDb($user);
        return $user;
    }

    public function _create($user){
        $result = $this->userDTOTransformer->formatDataToDb($user);
        UserModel::create($result);
    }

    public function _update($user){
        $result = $this->userDTOTransformer->formatDataToDb($user);
        UserModel::where('id','=',$result['id'])->update($result);
    }

    public function _delete($id){
    }

}