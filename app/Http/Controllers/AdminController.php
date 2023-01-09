<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_users_list()
    {

        $users=User::all()->sortByDesc('id');

        return view('BackEnd/users')->with('users',$users);
    }

    public function user_active($verified,$id)
    {
        $ori_id=decrypt($id);
        $model = User::find($ori_id);
        if($verified==1)
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
}
