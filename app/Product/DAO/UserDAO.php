<?php
namespace App\Product\DAO;

use App\UserModel;
use App\Product\daoutil\UserDTOTransformer;
use App\Product\daoutil\UserDetailDTOTransformer;
use App\Product\daoutil\AttendanceDTOTransformer;
use App\Product\response\ResponseGenerator;
use App\Product\Exception\DAOException;

Class UserDAO implements IUserDAO{

    private $userDTOTransformer;
    private $userDetailDTOTransformer;
    private $attendanceDTOTransformer;

    public function __construct(){
        $this->userDTOTransformer = new UserDTOTransformer();
        $this->userDetailDTOTransformer = new UserDetailDTOTransformer();
        $this->attendanceDTOTransformer = new AttendanceDTOTransformer();
    }

    public function findAll($columns){
        $users = UserModel::with('attendanceRecords')->with('userDetail')->where('id','<','51')->get();
        if($users != null){
            $result = array();
            foreach($users as $key => $user){
                $result[$key] = $this->userDTOTransformer->formatDataFromDb($user);
                $attachedEntities = $this->attachRelatedEntities($user);
                $result[$key]['userDetail'] = $attachedEntities['userDetail'];
                $result[$key]['attendanceRecords'] = $attachedEntities['attendanceRecords'];
            }
        }else{
            throw new DAOException("Error fetching all Users!");
        }
        return $result;
    }

    private function attachRelatedEntities($user){
        $result = array();

        $userDetail = $user->userDetail()->get();
        foreach($userDetail as $usrDetail){
            $result['userDetail'] = $this->userDetailDTOTransformer->formatDataFromDb($usrDetail);
        }

        $attendanceRecords = $user->attendanceRecords()->get();
        foreach($attendanceRecords as  $attendanceRecord){
            $result['attendanceRecords'][] = $this->attendanceDTOTransformer->formatDataFromDb($attendanceRecord);
        }

        return $result;
    }


    public function findById($id,$columns){
        $user = UserModel::find($id);
        $attachedEntities = $this->attachRelatedEntities($user);

        if($user != null){
            $user = $this->userDTOTransformer->formatDataFromDb($user);
            $user['userDetail'] = $attachedEntities['userDetail'];
            $user['attendanceRecords'] = $attachedEntities['attendanceRecords'];
        }else{
            throw new DAOException("Error fetching User with id:".$id." !");
        }
        return $user;
    }

    public function findByIds($ids,$columns){
        $users = UserModel::whereIn('id',$ids)->get();
        if($users != null){
            foreach($users as $user){
                $result[] = $this->userDTOTransformer->formatDataFromDb($user);
            }
        }else{
            throw new DAOException("Error fetching all Users!");
        }
        return $result;
    }

    public function create($user){
        $result = $this->userDTOTransformer->formatDataToDb($user);
        unset($result->id); // As we are inserting new record we need to remove any ID
        $insertedUserModel = UserModel::create($result);
        return $this->userDTOTransformer
                    ->formatDataFromDb(
                        $insertedUserModel
                    );
    }

    public function update($user){
        $transformedUserEntity = $this->userDTOTransformer->formatDataToDb($user);
        UserModel::where('id','=',$user['id'])
                  ->update($transformedUserEntity);
        return $this->userDTOTransformer->formatDataFromDb($transformedUserEntity);
    }


    public function deleteById($id){
        $user = UserModel::where('id','=',$id)->delete();
        if($user == null){
            throw new DAOException("Error deleting a User!");
        }
        return null;
    }

    public function deleteByIds($ids){
        $users = UserModel::whereIn('id',$ids)->delete();
        if($users == null){
            throw new DAOException("Error deleting all Users!");
        }
        return null;
    }
}