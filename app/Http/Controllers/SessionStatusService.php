<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionStatusService
{
    public function status($request)
    {
        $data=$request->all();
        // return $data;
        $settings=Settings::first();
        // return $settings;
        $status=$settings->fill($data)->save();
        if($status){
            request()->session()->flash('success','Setting successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again');
        }
    }
}