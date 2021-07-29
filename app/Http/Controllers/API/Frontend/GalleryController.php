<?php

namespace App\Http\Controllers\API\Frontend;

use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = $request->user_id;
        
        $data['images'] = Gallery::where('user_id', $userId)->where('status', 1)->orderBy('id', 'desc')->paginate(10);

        return response()->json($data);
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
        $userId = Auth::user()->id;
        $currentDate = date('Y-m-d');

        $validator = Validator::make($request->all(), [
            'image'                     => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'errors'            => $validator->errors()->all(),
                'status'            => '400',
                'message'           => 'Please try again!'
            ];
        } else {
            $images = $request->file('image');
            $data = [];

            $lastImageId = Gallery::where('user_id', $userId)->orderBy('id', 'desc')->first();
            if ($lastImageId) {
                $slNo = $lastImageId->id;
            } else {
                $slNo = 0;
            }
            
            if (count($images)>0) {
                for ($i=0; $i < count($images); $i++) { 
                    $slNo               = $slNo+1;
                    $fileName           = time().$userId.$slNo.'.'.$images[$i]->getClientOriginalExtension();
                    $destinationPath    = public_path('/frontend/users/gallery');
                    $images[$i]->move($destinationPath, $fileName);

                    $storeData = Gallery::create([
                        'user_id'           => $userId,
                        'image'             => $fileName,
                        'image_type'        => 0,
                        'created_by'        => $userId,
                    ]);

                    if ($storeData) {
                        $data = $storeData->id;
                    } else {
                        $data = [];
                    }
                }

                if ($data) {
                    $response = [
                        'status'            => '200',
                        'message'           => 'Gallery successfully uploaded!'
                    ];
                } else {
                    $response = [
                        'status'            => '400',
                        'message'           => 'Please try again!'
                    ];
                }                
            }
        }

        return response()->json($response);
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
        $deleteData = Gallery::find($id)->delete();

        return response()->json([
            'status'            => '200',
            'message'           => 'Gallery successfully deleted!'
        ]);
    }
}
