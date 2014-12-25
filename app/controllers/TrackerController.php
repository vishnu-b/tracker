<?php

class TrackerController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::select('user_id')->get();
        // $user = $users->collapse();
        print_r($users);
        return;
        foreach ($users as $key => $value) {
            # code...
        };
        $tracker = Tracker::orderBy('Id', 'desc')->first();
        return $tracker;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user_id = Request::get('user_id');
        $latitude = Request::get('latitude');
        $longitude = Request::get('longitude');

        $trackdata = new Tracker;
        $trackdata->user_id = $user_id;
        $trackdata->latitude = $latitude;
        $trackdata->longitude = $longitude;
        $trackdata->save();

        return Response::json([
            'success' => [
                'message' => 'Data added.',
                'status_code' => 203
            ]
        ], 203);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }



}
