<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product\ProductTrait\Request\RequestContainsIds;
use App\Product\Service\ScheduleService;
use App\Http\Requests;

class ScheduleController extends Controller
{
    use RequestContainsIds;
    private $scheduleService;

    public function __construct(ScheduleService $sService){
        $this->scheduleService = $sService;
    }


    public function index(Request $request)
    {
        $_ids = $this->getValidIds($request);
        if(!empty($_ids)){
            return $this->scheduleService->findByIds($request,$_ids);
        }
        return $this->scheduleService->findAll($request);
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
        return $this->scheduleService->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        return $this->scheduleService->findById($request,$id);
    }

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
        return $this->scheduleService->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        return $this->scheduleService->deleteById($request,$id);
//        return $this->scheduleService->deleteByIds($request,array($id));
    }
}
