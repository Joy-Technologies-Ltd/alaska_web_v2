<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
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
            'id'                            => $this->id,
            'name'                          => $this->name,
            'user_name'                     => $this->user_name,
            'email'                         => $this->email,
            'phone'                         => $this->phone,
            'image'                         => $this->image,
            'firebase_token'                => $this->firebase_token,
            'web_token'                     => $this->web_token,
            'status'                        => $this->status,
        ];
    }
}
