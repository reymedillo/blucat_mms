<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }
    public function getShowDashboard(Request $request) {
        $member = $mid = $actions = null;
        if(null !== $request->input('mid')) {
            $request->flashOnly('mid');
            $mid = $request->old('mid');
            $member = \App\Members::find($request->input('mid'));
            $actions = \App\MembersTrn::where('mid', $request->input('mid'))->where('type', config('define.member_type.loyality'))->get();
        }
        return view('loyality.index', compact('member','mid','actions'));
    }
    public function updatePoints($mid,Request $request) {
        $member = \App\Members::find($mid);
        if( array_key_exists('add', $request->all()) ) {
            $points = $member->points + $request->input('myPoint');
            $member->points = $points;
            $member->save();

            $message = str_replace('num', $request->input('myPoint'), config('define.member_loyality_actions.add'));
            $log = \App\MembersTrn::createLog($mid,config('define.member_type.loyality'),$message);
        } elseif ( array_key_exists('minus', $request->all()) ) {
            $points = $member->points - $request->input('myPoint');
            if($request->input('myPoint') <= $member->points) {
                $member->points = $points;
                $member->save();

                $message = str_replace('num', $request->input('myPoint'), config('define.member_loyality_actions.use'));
                $log = \App\MembersTrn::createLog($mid,config('define.member_type.loyality'),$message);
            }
        }
        return redirect()->back();
    }
}
