<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\Service;

use App\Product\DAO\RoomDAO;
use App\Product\DAO\CourseDAO;
use App\Product\service\CourseService;
use App\Product\response\ResponseGeneratorImpl;

Class RoomService implements IRoomService{

    private $responseGenerator;
    private $roomDAO;

    public function __construct(RoomDAO $roomDAO){
        $this->responseGenerator = new ResponseGeneratorImpl();
        $this->roomDAO = $roomDAO;
    }

    public function findAll($request){

    }

    public function findById($request,$Id){

    }

    public function findByIds($request,$ids){
    }

    public function create($request){
    }

    public function update($request,$id){

    }

    public function deleteById($request,$id){

    }

    public function deleteByIds($request,$ids){

    }
}