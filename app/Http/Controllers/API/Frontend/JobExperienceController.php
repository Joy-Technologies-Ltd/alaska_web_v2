<?php

namespace App\Http\Controllers\API\Frontend;

use Auth;
use Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobExperience;

class JobExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $input                          = $request->all();
        $currentWorkingStatus           = $request->current_working_status;

        $validator = [
            'designation'               => 'required',
            'company_name'              => 'required',
            'start_date'                => 'required',
        ];
        
        if ($currentWorkingStatus==0) {
            $validator['end_date']    = 'required';
        }
       
        $validator = Validator::make($input, $validator);

        if ($validator->fails()) {
            $response = [
                'errors'                => $validator->errors()->all(),
                'status'                => '400',
                'message'               => 'Please try again!'
            ];
        } else {
            if ($request->hasFile('company_logo')) {
                $image = $request->file('company_logo');
                $fileName = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/frontend/users/companyLogo');
                $image->move($destinationPath, $fileName);
            } else {
                $fileName = "";
            }

            $data = [
                'user_id'                   => $userId,
                'designation'               => $request->designation,
                'company_name'              => $request->company_name,
                'company_logo'              => $fileName,
                'company_address'           => $request->company_address,
                'description'               => $request->description,
                'current_working_status'    => $request->current_working_status,
                'start_date'                => $request->start_date,
            ];

            if ($currentWorkingStatus==0) {
                $data['end_date']           = $request->end_date;
            }
    
            $storeData = JobExperience::create($data);

            if ($storeData) {
                $response = [
                    'status'            => '200',
                    'message'           => 'Job Experience Successfully Added!'
                ];
            } else {
                $response = [
                    'status'            => '400',
                    'message'           => 'Please try again!'
                ];
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
        $userId = Auth::user()->id;
        $input                          = $request->all();
        $currentWorkingStatus           = $request->current_working_status;

        $validator = [
            'designation'               => 'required',
            'company_name'              => 'required',
            'start_date'                => 'required',
        ];
        
        if ($currentWorkingStatus==0) {
            $validator['end_date']    = 'required';
        }
       
        $validator = Validator::make($input, $validator);

        if ($validator->fails()) {
            $response = [
                'errors'                => $validator->errors()->all(),
                'status'                => '400',
                'message'               => 'Please try again!'
            ];
        } else {
            $jobExperienceData =  JobExperience::find($id);

            if ($request->hasFile('company_logo')) {
                $image = $request->file('company_logo');
                $fileName = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/frontend/users/companyLogo');
                $image->move($destinationPath, $fileName);
            } else {
                $fileName = $jobExperienceData->company_logo;
            }

            $data = [
                'user_id'                   => $userId,
                'designation'               => $request->designation,
                'company_name'              => $request->company_name,
                'company_logo'              => $fileName,
                'company_address'           => $request->company_address,
                'description'               => $request->description,
                'current_working_status'    => $request->current_working_status,
                'start_date'                => $request->start_date,
            ];

            if ($currentWorkingStatus==0) {
                $data['end_date']           = $request->end_date;
            }
    
            $jobExperienceData->update($data);

            $response = [
                'status'            => '200',
                'message'           => 'Job Experience Successfully Updated!'
            ];
        }

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobExperienceData =  JobExperience::find($id)->delete();

        if ($jobExperienceData) {
            $response = [
                'status'            => '200',
                'message'           => 'Job Experience Successfully Deleted!'
            ];
        } else {
            $response = [
                'status'            => '400',
                'message'           => 'Please try again!'
            ];
        }

        return response()->json($response);
    }
}
