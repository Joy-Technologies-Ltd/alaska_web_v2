<?php

namespace App\Http\Controllers\API\Frontend;

use DB;
use Auth;
use App\Models\Messenger;
use App\Models\ApprovelStatus;
use App\Http\Controllers\Controller;
use App\Http\Resources\MessengerResource;
use Illuminate\Http\Request;

class MessengerController extends Controller
{
    public function messages(Request $request) {
        $userId = Auth::user()->id;
        $contactId = $request->contact_id;

        $messages = Messenger::where('user_id', $userId)
                    ->where('contact_id', $contactId)
                    ->where('status', 1)
                    ->orderBy('id', 'desc')
                    ->paginate(15);
                    
        return MessengerResource::collection($messages);
    }

    //MESSAGE STORE
    public function messageStore(Request $request) {
        $userId                     = Auth::user()->id;
        $contact_id                 = $request->contact_id;
        $message                    = $request->message;

        if ($message) {
            DB::beginTransaction();
            //FOR SELF
            $selfMessage = Messenger::create([
                "user_id"           => $userId,
                "contact_id"        => $contact_id,
                "sent_message"      => $message,
            ]);

            //FOR CONTACT PERSON
            $contactMessage = Messenger::create([
                "user_id"           => $contact_id,
                "contact_id"        => $userId,
                "received_message"  => $message,
            ]);
            DB::commit();

            $response = [
                'status'                => '200',
                'message'               => 'Message Sent!'
            ];

        } else {
            $response = [
                'status'                => '400',
                'message'               => 'Message type your message!'
            ];
        }
        
        return response()->json($response);
    }
}
