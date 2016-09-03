<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 9/3/2016
 * Time: 11:30 AM
 */

namespace App\Product\Filter\Template;

use App\Product\Exception\FilterException;

class TemplateAbstract{

    private $id;

    private $comparisonOperator;

    private $params;


    public function __construct($id,$comparisonOp,$params){
        $this->id = $id;
        $this->comparisonOperator = $comparisonOp;
        $this->params = $params;
        $this->validate();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id){
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getParams(){
        return $this->params;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params){
        $this->params = $params;
    }

    /**
     * @return mixed
     */
    public function getComparisonOperator(){
        return $this->comparisonOperator;
    }

    /**
     * @param mixed $comparisonOperator
     */
    public function setComparisonOperator($comparisonOperator){
        $this->comparisonOperator = $comparisonOperator;
    }

    public function validate(){

        $validCmpOperators = array('=','<','>','in');
        if(!in_array($this->comparisonOperator,$validCmpOperators)){
            throw new FilterException("Invalid comparison operator. '".$this->comparisonOperator."' is not allowed.!");
        }

        if($this->comparisonOperator == '='){
            if($this->validateParams($this->params,'value')){
                return true;
            }
        }
    }

    public function validateComparisonOperator($op, $expected){
        if($expected == '='){
            if(! ($op == '=')){
                throw new FilterException("Comparison Operator should be '='.");
            }
        }
    }

    public function validateParams($params, $typeExpected){

        if($typeExpected == 'value'){
            if(is_array($params) || is_object($params)){
                throw new FilterException("Parameter for the filter should be a value.");
            }else{
                return true;
            }
        }


    }
}