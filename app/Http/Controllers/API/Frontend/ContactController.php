<?php

namespace App\Http\Controllers\API\Frontend;

use Auth;
use App\Models\User;
use App\Models\Contact;
use App\Models\ApprovelStatus;
use App\Models\BlockedList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ContactResource;
use App\Http\Resources\ApprovelStatusResource;

class ContactController extends Controller
{
    public function contacts(Request $request){
        $search                 = $request->search;
        $userId                 = Auth::user()->id;
        $blockedList            = BlockedList::where('user_id', $userId)->get()->pluck('contect_id');

        if ($search) {
            $contacts = Contact::join('users', 'users.id', '=', 'contacts.contect_id')
                    ->select('users.id', 'contacts.status','users.name', 'users.email', 'users.user_name', 'users.image', 'users.firebase_token', 'users.web_token')
                    ->where('users.name', 'LIKE', "%{$search}%")
                    ->where('users.user_name', 'LIKE', "%{$search}%")
                    ->orWhere('users.phone', 'LIKE', "%{$search}%")
                    ->orWhere('users.email', 'LIKE', "%{$search}%")
                    ->where('contacts.user_id', $userId)
                    ->where('contacts.status', 2)
                    ->whereNotIn('contacts.contect_id', $blockedList)
                    ->paginate(10);
        } else {
            $contacts = Contact::join('users', 'users.id', '=', 'contacts.contect_id')
                    ->select('users.id', 'contacts.status', 'users.name', 'users.email', 'users.user_name', 'users.image', 'users.firebase_token', 'users.web_token')
                    ->where('contacts.user_id', $userId)
                    ->where('contacts.status', 2)
                    ->whereNotIn('contacts.contect_id', $blockedList)
                    ->paginate(10);
        }

        return ContactResource::collection($contacts);
    }

    //TOKEN
    public function currentToken(Request $request) {
        $contact_id  = $request->contact_id;

        $data['tokens'] = User::select('firebase_token', 'web_token')->find($contact_id);

        return response()->json($data);

    }

    //REQUESTING CONTACTS/PENDING CONTACTS
    public function pendingFriends(Request $request){
        $search = $request->search;
        $userId = Auth::user()->id;

        if ($search) {
            $contacts = Contact::join('users', 'users.id', '=', 'contacts.contect_id')
                    ->select('users.id', 'contacts.status', 'users.name', 'users.email', 'users.user_name', 'users.image', 'users.firebase_token', 'users.web_token')
                    ->where('users.name', 'LIKE', "%{$search}%")
                    ->where('users.user_name', 'LIKE', "%{$search}%")
                    ->orWhere('users.phone', 'LIKE', "%{$search}%")
                    ->orWhere('users.email', 'LIKE', "%{$search}%")
                    ->where('contacts.user_id', $userId)
                    ->where('contacts.status', 1)
                    ->paginate(10);
        } else {
            $contacts = Contact::join('users', 'users.id', '=', 'contacts.contect_id')
                    ->select('users.id', 'contacts.status', 'users.name', 'users.email', 'users.user_name', 'users.image', 'users.firebase_token', 'users.web_token')
                    ->where('contacts.user_id', $userId)
                    ->where('contacts.status', 1)
                    ->paginate(10);
        }

        return ContactResource::collection($contacts);
    }
    //END REQUESTING CONTACTS/PENDING CONTACTS

    //REQUESTING CONTACTS/PENDING CONTACTS
    public function blockedFriends(Request $request){
        $search = $request->search;
        $userId = Auth::user()->id;

        if ($search) {
            $contacts = BlockedList::join('users', 'users.id', '=', 'blocked_lists.contect_id')
                    ->select('users.id', 'users.status', 'users.name', 'users.email', 'users.user_name', 'users.image', 'users.firebase_token', 'users.web_token')
                    ->where('users.name', 'LIKE', "%{$search}%")
                    ->where('users.user_name', 'LIKE', "%{$search}%")
                    ->orWhere('users.phone', 'LIKE', "%{$search}%")
                    ->orWhere('users.email', 'LIKE', "%{$search}%")
                    ->where('blocked_lists.user_id', $userId)
                    ->paginate(10);
        } else {
            $contacts = BlockedList::join('users', 'users.id', '=', 'blocked_lists.contect_id')
                    ->select('users.id', 'users.status', 'users.name', 'users.email', 'users.user_name', 'users.image', 'users.firebase_token', 'users.web_token')
                    ->where('blocked_lists.user_id', $userId)
                    ->paginate(10);
        }

        return ContactResource::collection($contacts);
    }
    //END REQUESTING CONTACTS/PENDING CONTACTS

    //SEARCH NEW CONTACT LIST
    public function searchUser(Request $request){
        $search                 = $request->search;
        $userId                 = Auth::user()->id;
        $blockedList            = (array) BlockedList::where('user_id', $userId)->get()->pluck('contect_id');


        if ($search) {
            $new_contacts = User::where('status', 1)
                    ->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('user_name', 'LIKE', "%{$search}%")
                    ->orWhere('phone', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%")
                    ->whereNotIn('id', [$userId])
                    ->paginate(10); 
        }  else {
            $new_contacts = [];
        }

        return ContactResource::collection($new_contacts);
    }

    //ADD NEW CONTACTS
    public function addNewContacts(Request $request) {
        $userId = Auth::user()->id;
        $newContactId = $request->contact_id;

        if ($newContactId) {
            $checkContact = Contact::where('user_id', $userId)->where('contect_id', $newContactId)->where('status', 2)->first();

            if ($checkContact) {
                $response = [
                    'status'                => '400',
                    'message'               => 'Contact already added!'
                ];
            } else {
                $blockedList                = BlockedList::where('user_id', $userId)->where('contect_id', $newContactId)->first();
                if ($blockedList) {
                    $response = [
                        'status'                => '400',
                        'message'               => 'Sorry these contact is blocked!'
                    ];
                } else {
                    Contact::create([
                        'user_id'               => $userId,
                        'contect_id'            => $newContactId,
                        'status'                => 3 //1=Requesting
                    ]);

                    Contact::create([
                        'user_id'               => $newContactId,
                        'contect_id'            => $userId,
                        'status'                => 1 //1=Pending
                    ]);
    
                    $response = [
                        'status'                => '200',
                        'message'               => 'Contact add successfully completed!'
                    ];
                }
            }
        } else {
            $response = [
                'status'                => '400',
                'message'               => 'Please try again!'
            ];
        }
 
        return response()->json($response); 
    }
    //END ADD NEW CONTACTS

    //BLOCK CONTACTS
    public function approveContacts(Request $request) {
        $userId             = Auth::user()->id;
        $contact_id         = $request->contact_id;

        if ($contact_id) {
            $checkContact = Contact::where('user_id', $userId)->where('contect_id', $contact_id)->where('status', 1)->first();

            if ($checkContact) {
                $checkContact->update([
                    'status'                => 2 //2=Approved
                ]);

                Contact::where('user_id', $contact_id)->where('contect_id', $userId)->update([
                    'status'                => 2 //2=Approved
                ]);

                $response = [
                    'status'                => '200',
                    'message'               => 'Contact approved successfully completed!'
                ];
            } else {
                $response = [
                    'status'                => '400',
                    'message'               => 'Please try again!'
                ];
            }
        } else {
            $response = [
                'status'                => '400',
                'message'               => 'Please try again!'
            ];
        }
 
        return response()->json($response); 
    }
    //END BLOCK NEW CONTACTS

    
    //BLOCK CONTACTS
    public function blockContact(Request $request) {
        $userId                 = Auth::user()->id;
        $contact_id             = $request->contact_id;

        if ($contact_id) {
            $checkContact = BlockedList::where('user_id', $userId)->where('contect_id', $contact_id)->first();

            if ($checkContact) {
                $response = [
                    'status'                    => '400',
                    'message'                   => 'Already Blocked!'
                ];
            } else {
                BlockedList::create([
                    'user_id'                   => $userId,
                    'contect_id'                => $contact_id,
                ]);

                $checkContact = Contact::where('user_id', $userId)->where('contect_id', $contact_id)->first();

                if ($checkContact) {
                    $checkContact->update([
                        'status'                => 4 //4=Blocked
                    ]);
    
                    Contact::where('user_id', $contact_id)->where('contect_id', $userId)->update([
                        'status'                => 4 //4=Blocked
                    ]);
                }                

                $response = [
                    'status'                    => '200',
                    'message'                   => 'Contact blocked successfully completed!'
                ];
            }
        } else {
            $response = [
                'status'                => '400',
                'message'               => 'Please try again!'
            ];
        }
 
        return response()->json($response); 
    }
    //END BLOCK NEW CONTACTS

    
    //BLOCK CONTACTS
    public function unblockContact(Request $request) {
        $userId = Auth::user()->id;
        $contact_id = $request->contact_id;

        if ($contact_id) {
            $checkContact = BlockedList::where('user_id', $userId)->where('contect_id', $contact_id)->first();

            if ($checkContact) {
                BlockedList::find($checkContact->id)->delete();

                $checkContact = Contact::where('user_id', $userId)->where('contect_id', $contact_id)->first();

                if ($checkContact) {
                    $checkContact->update([
                        'status'                => 2 //2=Approved
                    ]);
    
                    Contact::where('user_id', $contact_id)->where('contect_id', $userId)->update([
                        'status'                => 2 //2=Approved
                    ]);
                }

                $response = [
                    'status'                => '200',
                    'message'               => 'Contact unblocked successfully completed!'
                ];
            } else {
                $response = [
                    'status'                => '400',
                    'message'               => 'Please try again!'
                ];
            }
        } else {
            $response = [
                'status'                => '400',
                'message'               => 'Please try again!'
            ];
        }
 
        return response()->json($response); 
    }
    //END BLOCK NEW CONTACTS


    //DECLINE CONTACTS
    public function declineContact(Request $request) {
        $userId                 = Auth::user()->id;
        $contact_id             = $request->contact_id;

        if ($contact_id) {
            $checkContact = Contact::where('user_id', $userId)->where('contect_id', $contact_id)->first();
            $declineContact = Contact::where('user_id', $contact_id)->where('contect_id', $userId)->first();

            if ($checkContact) {
                Contact::find($checkContact->id)->delete();
                Contact::find($declineContact->id)->delete();

                $response = [
                    'status'                => '200',
                    'message'               => 'Contact decline successfully completed!'
                ];
            } else {
                $response = [
                    'status'                => '400',
                    'message'               => 'Please try again!'
                ];
            }
        } else {
            $response = [
                'status'                => '400',
                'message'               => 'Please try again!'
            ];
        }
 
        return response()->json($response); 
    }
    //END BLOCK NEW CONTACTS


    //CONTACTS APPROVAL STATUSES
    public function approvalStatus()
    {
        $approval_statuses = ApprovelStatus::get();

        return ApprovelStatusResource::collection($approval_statuses);
    }



}
