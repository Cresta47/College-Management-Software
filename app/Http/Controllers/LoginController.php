<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/28/2016
 * Time: 4:04 PM
 */

namespace App\Http\Controllers;

use App\Facades\ResponseGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    public function doLogin(Request $request){
        $loginStatus = Auth::attempt($request->all(),true);

        $responseDTO = ResponseGenerator::createResponseDTO();

        if(!$loginStatus) {
            ResponseGenerator::addErrorMessage($responseDTO,"Auth Failure!");
            ResponseGenerator::setHttpStatus($responseDTO,401);
            ResponseGenerator::setBusinessStatusCode($responseDTO,"AuthFailure");
            return ResponseGenerator::getResponse($responseDTO);
        }

//        ResponseGenerator::addInfoMessage($responseDTO, "Success!");
//        ResponseGenerator::setHttpStatus($responseDTO, 200);
//        ResponseGenerator::setData($responseDTO, array('message' => 'Authentication Success!'));
//        return ResponseGenerator::getResponse($responseDTO);

        return view('home');
    }

}
