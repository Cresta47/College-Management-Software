<?php
namespace App\Product\DAO;

use App\UserDetail;

Class UserDetailDAO extends UserDetail{

    public function index(){
        $userDetails = UserDetail::all();
        return $userDetails;
    }

    public function findById($id){
        $userDetail = UserDetail::findOrFail($id);
        return $userDetail;
    }

}

