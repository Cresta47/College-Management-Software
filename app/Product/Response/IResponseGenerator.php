<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/3/2016
 * Time: 7:14 PM
 */

namespace App\Product\Response;

interface IResponseGenerator{

    public function setData($data);

    public function setHttpStatus($status);

    public function setBusinessStatus($businessStatusCode);

    public function addInfoMessage($msg);

    public function addErrorMessage($msg);

    public function addWarningMessage($msg);

    public function getResponse();

}