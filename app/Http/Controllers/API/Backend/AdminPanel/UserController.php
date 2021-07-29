<?php

namespace App\Http\Controllers\API\Backend\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Resources\Backend\Admin\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Helper;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:sanctum');
    }
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
        $data = $search == 'false' ? User::where('user_type', 1)->paginate($dataSorting) : User::where(function ($query) use ($search) {
            $query->orWhere('name', 'LIKE', "%{$search}%")
                ->orWhere('user_name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
        })->orderBy('id', 'desc')->paginate($dataSorting);

        


        return  UserResource::collection($data)->additional([

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
        // $validated = $request->validate();

        $fileName = Helper::imgProcess($request, 'image', $request->name, '', 'images/admin', 'store', User::class);

        $data = $request->all();

        $data['image'] = $fileName;
        $data['user_type'] = 1;
        $data['password'] = Hash::make($request->password);


        User::insert($data);

        return response()->json([
            'type'  => 'success',
            'message' => 'Admin has been created!',
            'icon'    => 'check',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = User::find($id);
        return new UserResource($admin);
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
        $fileName = Helper::imgProcess($request, 'image', $request->name, $id, 'images/admin', 'update', User::class);

        $data                   = $request->all();
        $data['image']          = $fileName;
        $data['password']       = Hash::make($request->password);




        $data = User::find($id)->update($data);
        if ($data) {
            return response()->json([
                'status'  => 'success',
                'message' => 'Admin has been updated!',
                'icon'    => 'check',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id)->delete();
        if($delete){
            return response()->json([
                'status'  => 'danger',
                'message' => 'Admin  has been deleted!',
                'icon'    => 'times',
            ]);   
        }
    }
}
