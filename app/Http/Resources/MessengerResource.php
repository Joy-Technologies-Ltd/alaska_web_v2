<?php


namespace App\Http\Resources;

use Helper;
use App\Models\MessengerFile;
use Illuminate\Http\Resources\Json\JsonResource;

class MessengerResource extends JsonResource
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
            'user_id'           => $this->user_id,
            'user_image'        => Helper::userImage($this->user_id),
            'contact_id'        => $this->contact_id,
            'contact_image'     => Helper::userImage($this->contact_id),
            'sent_message'      => $this->sent_message,
            'received_message'  => $this->received_message,
            'seen_status'       => $this->seen_status,
            'seen_date_time'    => $this->seen_date_time,
            'created_at'        => $this->created_at,
            'files'             => MessengerFile::leftJoin('file_types', 'file_types.id', '=', 'messenger_files.file_type_id')
                                    ->select('messenger_files.*', 'messenger_files.file_real_name', 'file_types.type_name', 'file_types.icon', 'file_types.image')
                                    ->where('messenger_files.messenger_id', $this->id)->where('messenger_files.status', 1)->get(),
            
        ];


    }
}
