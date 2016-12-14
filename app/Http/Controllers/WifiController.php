<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Wifi;

class WifiController extends Controller
{
    public function __construct() {
        $this->wifi_passwd  = Wifi::getPassword();
        $this->printed_date = Wifi::getPrintedDate();
    }
    public function printGuest(){
        return view('wifi.printGuest', ['pw' => $this->wifi_passwd, 'date' => $this->printed_date->format('Y.m.d'), 'weekly_fee' => config('define.weekly_fee'), 'monthly_fee' => config('define.monthly_fee')]);
    }
    public function printWifi($mid){
        $member = \App\Members::find($mid);
        if(is_null($member->wifi_exp_date)) {
            return redirect()->back();
        }
        return view('wifi.print', ['date' => $this->printed_date->format('Y.m.d'), 'pw' => $this->wifi_passwd, 'mid' => $mid]);
    }
    public function renew($mid, $period){
        if(in_array($period, config('define.member_renewal_days'))) {
            $member = \App\Members::find($mid);

            \DB::beginTransaction();
            $member->wifi_exp_date  = \Carbon\Carbon::parse($member->wifi_exp_date)->addDays($period);
            if($member->save()) {
                \DB::commit();
            } else {
                \DB::rollBack();
                return view('errors.404');
            }

            $message = isset(config('define.member_renewal_actions')[$period])?config('define.member_renewal_actions')[$period]:null;
            $log = \App\MembersTrn::createLog($mid, config('define.member_type.wifi'), $message);

            return redirect(route('wifi.search',['mid'=>$mid]));
        } else {
            return view('errors.404');
        }
    }
    public function createWifi(Request $request){
        $result = Wifi::createWifi($request->toArray());
        return response()->json($result, 200);
    }
    public function update(Request $request){
        $wifi = Wifi::first();

        $dt = \Carbon\Carbon::parse(date("Y-m-d"));
        $next_dt = $dt->addDay()->format('Y-m-d');
        $exp_date = $next_dt." ".config('define.wifi_modify_time');

        \DB::beginTransaction();
        $wifi->exp_date = \Carbon\Carbon::parse($exp_date);
        $wifi->wifi_pwd = \Crypt::encrypt($request->input('wifiPass'));
        if($wifi->save()) {
            \DB::commit();
        } else {
            \DB::rollBack();
            return view('errors.404');
        }
        return redirect()->back();
    }
    public function search(Request $request) {
        $wifi_exp_date_nextmonth = $wifi_exp_date_nextweek = $member = $mid = $actions = null;
        $wifi_last_modified = Wifi::getLastModifyDate()->format('Y/m/d g:i A');

        if(null !== $request->input('mid')) {
            $request->flashOnly('mid');
            $mid = $request->old('mid');
            $member = \App\Members::find($request->input('mid'));
            $actions = \App\MembersTrn::where('mid', $request->input('mid'))->where('type', config('define.member_type.wifi'))->get();


            if($member) {
                $wifi_exp_date_nextmonth = \Carbon\Carbon::parse($member->wifi_exp_date)->addDays(config('define.member_renewal_days.month'));
                $wifi_exp_date_nextweek  = \Carbon\Carbon::parse($member->wifi_exp_date)->addDays(config('define.member_renewal_days.week'));

                $wifi_exp_date_nextmonth = $wifi_exp_date_nextmonth->format('Y/m/d');
                $wifi_exp_date_nextweek  = $wifi_exp_date_nextweek->format('Y/m/d');
            }
        }

        return view('wifi.search', compact('member','mid','wifi_exp_date_nextmonth','wifi_exp_date_nextweek','actions','wifi_last_modified'));
    }
    public function getWifis(){
     return response()->json(['Wifis'=>Wifi::get()->toArray()], 200);
    }
    public function getCreateInput(){
        return view('Wifi.create-input', []);
    }

    public function postCreateConfirm(Requests\WifiRequest $request)
    {
        $Wifi = $request->all(); 
        return view('Wifi.create-confirm', ['Wifi' => $Wifi]);
    }

    public function postCreateComplete(Requests\WifiRequest $request)
    {
        Wifi::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'role' => 0,
            'address' => $request['address'],
            'tel' => $request['tel'],
            'agency_authority' => 0,
        ]); 

        return view('Wifi.create-complete', []);
    }
}
