<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product\ProductTrait\Request\RequestContainsIds;
use App\Product\service\MarksService;
use App\Http\Requests;

class MarksController extends Controller
{
     use RequestContainsIds;
    private $marksService;

    public function __construct(MarksService $mService){
        $this->marksService = $mService;
    }

    public function index(Request $request)
    {
        $_ids = $this->getValidIds($request);
        if(!empty($_ids)){
            return $this->marksService->findByIds($request,$_ids);
        }

        //Returning All Marks
        return $this->marksService->findAll($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->marksService->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        return $this->marksService->findById($request,$id);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         return $this->marksService->update($request,$id);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
         return $this->marksService->deleteById($request,$id);    }
}
