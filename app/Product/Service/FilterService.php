<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 9/3/2016
 * Time: 11:59 AM
 */
namespace App\Product\Service;
use App\Product\Exception\DAOException;
use App\Product\Exception\FilterException;
use App\Product\Filter\Filters\FilterUserByCourseId;
use App\Product\Filter\Filters\FilterUserByStatus;
use App\Facades\ResponseGenerator;


class FilterService implements IFilterService{

    public function filterFromRequest($filterRequest){
        if(is_array($filterRequest)){
            $filterRequest = (object) $filterRequest;
        }

        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            $filterId = $filterRequest->id;
            $comparisonOp =  $filterRequest->comparisonOp;
            $params = $filterRequest->params;

            if($filterRequest->id == 'filterUserByStatus'){

                $filterUserByStatus = new FilterUserByStatus(
                   $filterId, $comparisonOp, $params
                );
                $result =  $filterUserByStatus->filterFromDB();

            }else if($filterRequest->id == 'filterUserByCourseId'){

                $filterUserByCourseId = new FilterUserByCourseId(
                    $filterId, $comparisonOp, $params
                );
                $result =  $filterUserByCourseId->filterFromDB();

            }

            ResponseGenerator::setData($responseDTO,$result);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"RES-Filter");
        }
        catch(FilterException $e){
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,400);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!RES-Filter");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

}