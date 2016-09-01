<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\Service;
use App\Facades\ResponseGenerator;
use App\Product\DAO\MarksDAO;

class MarksService implements IMarksService{

    private $marksDAO;

    public function __construct(MarksDAO $mDAO){
        $this->marksDAO = $mDAO;
    }

    public function findAll($request){
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $marks = $this->marksDAO->findAll(array());
            ResponseGenerator::setData($responseDTO,$marks);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"RES-Marks-*"); // Means Sending Response with * marks
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!RES-Marks"); // Means Sending Response with no marks
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function findById($request,$id){
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $marks = $this->marksDAO->findById($id, array());
            ResponseGenerator::setData($responseDTO,$marks);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"RES-Marks-1");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!RES-Marks");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function findByIds($request,$ids){
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $marks = $this->marksDAO->findByIds($ids, array());
            ResponseGenerator::setData($responseDTO,$marks);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"RES-Marks-*");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!RES-Marks");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function create($request){
        $marks = $request->all();
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $marks = $this->marksDAO->create($marks);
            ResponseGenerator::setData($responseDTO,$marks);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"Marks-Created-1");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!Marks-Created");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function update($request,$id){
        $marks = $request->all();
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $marks = $this->marksDAO->update($marks);
            ResponseGenerator::setData($responseDTO,$marks);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"Marks-Updated-1");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!Marks-Updated");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function deleteById($request,$id){
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $marks = $this->marksDAO->deleteById($id);
            ResponseGenerator::setData($responseDTO,$marks);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"RES-Marks-Deleted-1");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!RES-Marks-Deleted");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

    public function deleteByIds($request,$ids){
        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $marks = $this->marksDAO->deleteByIds($ids);
            ResponseGenerator::setData($responseDTO,$marks);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"RES-Marks-Deleted-*");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!RES-Marks-Deleted");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

}