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


class FilterUserByStatus extends TemplateAbstract implements IFilterValidation, IFilter{

    public function __construct($id, $comparisonOp, $params)
    {
        parent::__construct($id, $comparisonOp, $params);
        $this->validateComparisonOperator($comparisonOp, array('=','in'));
    }

    public function filterFromDB(){
        $result =  DB::table('users')->where('status', '=' , $this->getParams())->select('users.id as user_id')->get();
        return $result;
    }
}