<?php

namespace App\Http\Resources\Backend\GeneralUser;

use Helper;
use Illuminate\Http\Resources\Json\JsonResource;

class GeneralUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'id'                => $this->id,
            'name'              => $this->name,
            'email'             => $this->email,
            'phone'             => $this->phone,
            'user_name'         => $this->user_name==''?'N/A':$this->user_name,
            'password'          => $this->password,
            'status'            => $this->status==1?'Active':'Inactive',

           
            'image_name'        => $this->image,
            'image_path'         => Helper::publicUrl('/').'/'.'images/admin/'.$this->image,
        ];
    }
}
