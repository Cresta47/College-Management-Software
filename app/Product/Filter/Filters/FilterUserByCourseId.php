<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 9/3/2016
 * Time: 11:34 AM
 */

namespace App\Product\Filter\Filters;

use App\Product\Filter\Template\TemplateAbstract;
use App\Product\Filter\FilterValidation\IFilterValidation;
use App\Product\Filter\IFilter;
use Illuminate\Support\Facades\DB;


class FilterUserByCourseId extends TemplateAbstract implements IFilterValidation, IFilter{

    public function __construct($id, $comparisonOp, $params){
        parent::__construct($id, $comparisonOp, $params);
        $this->validateComparisonOperator($comparisonOp, array('='));
    }

    public function filterFromDB(){
        $dbResults =  DB::table('course_user')->where('course_id', '=' , $this->getParams())->select('user_id','id')->distinct()->get();
        $result = array();
        foreach($dbResults as $key => $value){
            array_push($result,  ['user_id' => $value->user_id]);
        }
        return $result;
    }
}