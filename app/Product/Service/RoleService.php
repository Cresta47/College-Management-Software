<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\Service;

use App\Product\DAO\RoleDAO;
use App\Facades\ResponseGenerator;

Class RoleService implements IRoleService{
    private $roleDAO;

    public function __construct(RoleDAO $rDAO){
        $this->roleDAO = $rDAO;
    }

    public function findAll($request){}

    public function findById($request,$id){}

    public function findByIds($request,$ids){}

    public function create($request){
        $role = $request->all();
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $role = $this->roleDAO->create($role);
            ResponseGenerator::setData($responseDTO,$role);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"Role-Created-1");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!Role-Created");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function update($request,$id){}

    public function deleteById($request,$id){}

    public function deleteByIds($request){}

}