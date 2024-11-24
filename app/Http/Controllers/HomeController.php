<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Request as prequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function programrequest(Request $request)
    {
        $rules = [
			'name' => ['required'],
			'email' => ['required'],
			'phone' => ['required'],
		];

		$validate = Validator::make($request->all(), $rules);
		if ($validate->fails()) {
			return redirect()->back()->withErrors($validate);
		} else {

			$data = new prequest();

			$data->program_id = $request['program_id'];
			$data->email = $request['email'];
			$data->phone = $request['phone']; 
			$data->name = $request['name'];
			$data->age = $request['age'];
			$data->notes = $request['notes'];
			$data->save();

			}

			return redirect()->back()->with(['success' => trans('site.success_msg')]);
    }
}
