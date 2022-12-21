<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;
use App\Models\User;

class TreatmentrecordsController extends Controller
{
    public function index(){
        return view('records.index');
    }

    public function userOnly(){
        $users = Shoe::get();
        return view('records.index', compact('users'));
    }

    public function showRecord($id){
        $user = User::find($id);
        return view('records.index', compact('id', 'user'));
    }
}
