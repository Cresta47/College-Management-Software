<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\Service;

use App\Product\dao\UserDetailModelDAO;

Class UserDetailService {

    public function findAll(){
        $userDetailDAO = new UserDetailModelDAO();
        $userDetails = $userDetailDAO->index();
        return $userDetails;
    }

    public function findById($userDetailId){
        $userDetailService = new UserDetailModelDAO();
        return $userDetailService->findById($userDetailId);
    }

}