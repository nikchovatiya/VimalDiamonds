<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function show_users_list()
    {

        $users=User::all()->sortByDesc('id');

        return view('BackEnd/users')->with('users',$users);
    }

    public function user_active($verified,$id,$session_id)
    {
        $current_session_id = Session::getID();

        if($session_id==$current_session_id)
        {
            $ori_id=decrypt($id);
            $ori_verified = decrypt($verified);
            $model = User::find($ori_id);
            if($ori_verified==1)
            {
                $model->verified = 0;
            }
            else
            {
                $model->verified = 1;
            }
            $model->save();
            return redirect()->route('show_users_list')->with('success', $model);
        }
        return redirect()->route('show_users_list')->with('error', 'Link not valid');
      
    }
}
