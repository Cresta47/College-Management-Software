<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 9/3/2016
 * Time: 11:59 AM
 */
namespace App\Product\Service;
use App\Product\Filter\Filters\FilterUserByStatus;
use App\Facades\ResponseGenerator;


class FilterService implements IFilterService{

    public function filterFromRequest($filterRequest){
        if(is_array($filterRequest)){
            $filterRequest = (object) $filterRequest;
        }

        $responseDTO = ResponseGenerator::createResponseDTO();
        try {
            if($filterRequest->id == 'filterUserByStatus'){
                $filterUserByStatus = new FilterUserByStatus(
                    $filterRequest->id,
                    $filterRequest->comparisonOp,
                    $filterRequest->params
                );
                $result =  $filterUserByStatus->filterFromDB();
            }
            ResponseGenerator::setData($responseDTO,$result);
            ResponseGenerator::setHttpStatus($responseDTO,200);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"RES-Filter");
        }catch(\Exception $e) {
            ResponseGenerator::addErrorMessage($responseDTO,$e->getMessage());
            ResponseGenerator::setHttpStatus($responseDTO,500);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"!RES-Filter");
        }
        return ResponseGenerator::getResponse($responseDTO);
    }

}