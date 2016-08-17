<?php
namespace App\Product\DAO;

use App\UserDetailModel;

Class UserDetailDAO{

    public function index(){
        $userDetails = UserDetailModel::all();
        return $userDetails;
    }

    public function findById($id){
        $userDetail = UserDetailModel::findOrFail($id);
        return $userDetail;
    }

}

