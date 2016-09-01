<?php
namespace App\Product\DAO;

use App\ScheduleModel;
use App\Product\daoutil\ScheduleDTOTransformer;
use App\Product\response\ResponseGenerator;
use App\Product\Exception\DAOException;

Class ScheduleDAO implements IScheduleDAO{

    private $scheduleDTOTransformer;

    public function __construct()
    {
        $this->scheduleDTOTransformer = new scheduleDTOTransformer();
    }

    public function findAll($columns){
        $schedule = ScheduleModel::all();
        $result = array();
        foreach($schedule as $schedule){
            array_push($result,$this->scheduleDTOTransformer->formatDataFromDb($schedule));
        }
        return $result;
    }

    public function findById($id,$columns){
        $schedule = ScheduleModel::find($id);
        if($schedule != null){
            $schedule = $this->scheduleDTOTransformer->formatDataFromDb($schedule);
        }else{
            throw new DAOException("Error fetching schedule with id:".$id." !");
        }
        return $schedule;
    }

    public function findByIds($ids,$columns){
        $schedule = ScheduleModel::whereIn('id',$ids)->get();
        if($schedule != null){
            foreach($schedule as $schedule){
                $result[] = $this->scheduleDTOTransformer->formatDataFromDb($schedule);
            }
        }else{
            throw new DAOException("Error fetching all schedules!");
        }
        return $result;
    }

    public function create($schedule){
        $result = $this->scheduleDTOTransformer->formatDataToDb($schedule);
        unset($result->id); // As we are inserting new record we need to remove any ID that may have come from frontends or services
        $insertedscheduleModel = ScheduleModel::create($result);
        return $this->scheduleDTOTransformer
            ->formatDataFromDb(
                $insertedscheduleModel
            );
    }

    public function update($schedule){
        $transformedscheduleEntity = $this->scheduleDTOTransformer->formatDataToDb($schedule);
        ScheduleModel::where('id','=',$schedule['id'])
                  ->update($transformedscheduleEntity);
        return $this->scheduleDTOTransformer->formatDataFromDb($transformedscheduleEntity);
    }

    public function deleteById($id){
         $schedule = ScheduleModel::where('id','=',$id)->delete();
        if($schedule == null){
            throw new DAOException("Error deleting a Schedule!");
        }
        return null;
    }

    public function deleteByIds($ids){
        $schedule = ScheduleModel::whereIn('id',$ids)->delete();
        if($schedule == null){
            throw new DAOException("Error deleting all schedules!");
        }
        return null;
    }

}