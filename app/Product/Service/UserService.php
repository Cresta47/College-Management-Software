<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\Service;

use App\Facades\ResponseGenerator;
use App\Product\dao\UserDAO;

Class UserService implements IUserService{

    private $userDAO;

    public function __construct(UserDAO $uDAO){
            $this->userDAO = $uDAO;
    }

    public function findAll($request){
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $users = $this->userDAO->findAll(array());
            ResponseGenerator::setData($responseDTO,$users);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"RES-User-*"); // Means Sending Response with * users
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!RES-User"); // Means Sending Response with no users
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function findById($request,$Id){
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $user = $this->userDAO->findById($Id, array());
            ResponseGenerator::setData($responseDTO,$user);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"RES-User-1");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!RES-User");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function findByIds($request,$ids){
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $user = $this->userDAO->findByIds($ids, array());
            ResponseGenerator::setData($responseDTO,$user);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"RES-User-*");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!RES-User");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function create($request){
        $user = $request->all();
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $user = $this->userDAO->create($user);
            ResponseGenerator::setData($responseDTO,$user);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"User-Created-1");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!User-Created");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function update($request,$id){
        $user = $request->all();
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $user = $this->userDAO->update($user);
            ResponseGenerator::setData($responseDTO,$user);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"User-Updated-1");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!User-Updated");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function deleteById($request,$id){

    }

    public function deleteByIds($request){

    }
}