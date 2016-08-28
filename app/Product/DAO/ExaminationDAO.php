<?php
namespace App\Product\DAO;

use App\ExaminationModel;
use App\Product\daoutil\ExaminationDTOTransformer;
use App\Product\response\ResponseGenerator;
use App\Product\Exception\DAOException;

Class ExaminationDAO implements IExaminationDAO{

    private $examinationDTOTransformer;

    public function __construct()
    {
        $this->examinationDTOTransformer = new examinationDTOTransformer();
    }

    public function findAll($columns){
        $examination = ExaminationModel::all();
        $result = array();
        foreach($examination as $examination){
            array_push($result,$this->examinationDTOTransformer->formatDataFromDb($examination));
        }
        return $result;
    }

    public function findById($id,$columns){
        $examination = examinationModel::find($id);
        if($examination != null){
            $examination = $this->examinationDTOTransformer->formatDataFromDb($examination);
        }else{
            throw new DAOException("Error fetching examination with id:".$id." !");
        }
        return $examination;
    }

    public function findByIds($ids,$columns){
        $examination = ExaminationModel::whereIn('id',$ids)->get();
        if($examination != null){
            foreach($examination as $examination){
                $result[] = $this->examinationDTOTransformer->formatDataFromDb($examination);
            }
        }else{
            throw new DAOException("Error fetching all examination!");
        }
        return $result;
    }

    public function create($examination){
        $result = $this->examinationDTOTransformer->formatDataToDb($examination);
        unset($result->id); // As we are inserting new record we need to remove any ID that may have come from frontends or services
        $insertedexaminationModel = ExaminationModel::create($result);
        return $this->examinationDTOTransformer
            ->formatDataFromDb(
                $insertedexaminationModel
            );
    }

    public function update($examination){
        $transformedexaminationEntity = $this->examinationDTOTransformer->formatDataToDb($examination);
        ExaminationModel::where('id','=',$examination['id'])
                  ->update($transformedexaminationEntity);
        return $this->examinationDTOTransformer->formatDataFromDb($transformedexaminationEntity);
    }

    public function deleteById($id){
         $examination = ExaminationModel::where('id','=',$id)->delete();
        if($examination == null){
            throw new DAOException("Error deleting an Examination!");
        }
        return null;
    }

    public function deleteByIds($ids){
        $examination = ExaminationModel::whereIn('id',$ids)->delete();
        if($examination == null){
            throw new DAOException("Error deleting all examination!");
        }
        return null;
    }

}