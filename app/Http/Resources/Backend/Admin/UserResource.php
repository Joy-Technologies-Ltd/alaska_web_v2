<?php

namespace App\Http\Resources\Backend\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use Helper;

class UserResource extends JsonResource
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
            'user_name'         => $this->user_name,
            'password'          => $this->password,
           
            'image_name' => $this->image,
            'image_path' => Helper::publicUrl('/').'/'.'images/admin/'.$this->image,
        ];
    }
}
