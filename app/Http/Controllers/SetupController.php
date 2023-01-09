<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\CommonMark\Renderer\Block\ThematicBreakRenderer;
use Illuminate\Support\Facades\Auth;

class SetupController extends Controller
{
    public function index()
    {
    /*     $setups= Setup::orderBy('sid','desc')->paginate(5);
        return view('FrontEnd\index'); */

    }

    public function create()
    {

    }
    public function save(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'companyname'=> 'required',
           ],[
            'title.required'=>'Enter Title',
            'companyname.required'=>'Enter Company Name'
           ]);
        Setup::create($request->post());
        return redirect()->route('setup')->with('success','Setting has been saved.');
    }
    public function show() 
        
    {
        $data = DB::table('setups')->latest()->first();
        return view('BackEnd\setup',['data'=>$data]);
    }

    public function ShowSettingsInFront() 
        
    {
        $data = DB::table('setups')->latest()->first();
        return view('FrontEnd\index',['data'=>$data]);
    }
    public function ShowRegisterPage() 
        
    {
        $data = DB::table('setups')->latest()->first();
        return view('Auth\register',['data'=>$data]);
    }

}
