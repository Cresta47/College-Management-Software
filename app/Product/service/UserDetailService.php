<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\service;

use App\Product\dao\UserDetailDAO;

Class UserDetailService {

    public function findAll(){
        $userDetailDAO = new UserDetailDAO();
        $userDetails = $userDetailDAO->index();
        return $userDetails;
    }

    public function findById($userDetailId){
        $userDetailService = new UserDetailDAO();
        return $userDetailService->findById($userDetailId);
    }

}