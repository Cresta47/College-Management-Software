<?php
namespace App\Product\DAO;

use App\RoomModel;
use App\Product\daoutil\RoomDTOTransformer;
use App\Product\response\ResponseGenerator;

Class RoomDAO implements IRoomDAO{

    private $entityDTOTransformer;

    public function __construct(){
        $this->entityDTOTransformer = new RoomDTOTransformer();
    }

    public function findAll($columns){
        $rooms = RoomModel::all();

        foreach($rooms as $room){
            $result[] = $this->entityDTOTransformer->formatDataFromDb($room);
            $roomIDs[] = $room['id'];
        }
        return $result;
    }

    public function findById($id,$columns){
        $room = RoomModel::findOrFail($id);
        $room = $this->entityDTOTransformer->formatDataToDb($room);
        return $room;
    }

    public function findByIds($roomIDs,$columns){
        $roomes = RoomModel::whereIn('id',$roomIDs)->get();
        $result = array();
        foreach($roomes as $room){
            $result[] = $this->entityDTOTransformer->formatDataFromDb($room);
        }
        return $result;
    }

    public function create($room){
        $roomTransformed = $this->entityDTOTransformer->formatDataToDb($room);
        RoomModel::create($roomTransformed);
    }

    public function update($room){

    }

    public function deleteById($id){

    }

    public function deleteByIds($ids)
    {
        // TODO: Implement deleteByIds() method.
    }


}