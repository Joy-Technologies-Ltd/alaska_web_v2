<?php

namespace App\Http\Controllers\API\Backend\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Resources\Backend\GeneralUser\GeneralUserResource;
use App\Models\User;
use Illuminate\Http\Request;

class GeneralUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request->search;
        $dataSorting = $request->sorting == 'false' ? 10 : $request->sorting;
        // if($request->search != 'undefined'){
        $data = $search == 'false' ? User::where('user_type', 2)->paginate($dataSorting) : User::where(function ($query) use ($search) {
            $query->orWhere('name', 'LIKE', "%{$search}%")
                ->orWhere('user_name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
        })->orderBy('id', 'desc')->paginate($dataSorting);

        


        return  GeneralUserResource::collection($data)->additional([

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
