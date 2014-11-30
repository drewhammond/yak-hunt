<?php

use Yakhunt\Core\Hunter;

class HunterController extends \BaseController
{


    protected $hunter;

    public function __construct(Hunter $hunter)
    {
        $this->hunter = $hunter;
    }

    /**
     * Display a listing of the resource.
     * GET /hunter
     *
     * @return Response
     */
    public function index()
    {
        $yaks = $this->hunter->get_yaks();
        return View::make('hunter.index', compact('yaks'));
    }

    public function scout($latitude, $longitude)
    {
        $yaks = $this->hunter->get_yaks($latitude, $longitude);
        return View::make('hunter.index', compact('yaks', 'latitude', 'longitude'));
    }

    /**
     * Show the form for creating a new resource.
     * GET /hunter/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /hunter
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /hunter/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /hunter/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /hunter/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /hunter/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}