<?php

namespace App\Http\Controllers\API\Backend\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function totalPanelUser()
    {
         
        $totalUser           =  User::where('user_type',2)->count();
        $activeUser          =  User::where('status',1)->count();
        $data              =  [
           
            'totalUser'      => $totalUser,
            'activeUser'     => $activeUser,
        ];

        return response()->json($data);
    }
}
