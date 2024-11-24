<?php

namespace App\Http\Controllers;

use App\About;
use App\Action;
use App\Contact;
use App\Field;
use App\Goal;
use App\News;
use App\Partner;
use App\Value;
use App\Program;
use App\Report;
use App\Story;
use App\Rule;
use App\Team;
use App\Email;
use App\Work;
use App\Image;
use App\Popup;
use Validator;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $actions = Action::orderBy('created_at','desc')->get();
        $programs = Program::orderBy('created_at','desc')->take(4)->get();
        $stories = Story::orderBy('created_at','desc')->take(4)->get();
        $newss = News::orderBy('created_at','desc')->take(4)->get();
        $works = Work::all();
        $about = About::first();
        $popup = Popup::first();
        $partners = Partner::all();
        $imgs = Image::all();
        return view('pages.index',compact('works','stories','newss','programs','actions','about','partners','imgs','popup'));
    }
    public function contactus(Request $request){
        $rules = [
			'name' => ['required'],
			'email' => ['required'],
			'msg' => ['required'],
            'captcha' => 'required|captcha',
		];

		$validate = Validator::make($request->all(), $rules);
		if ($validate->fails()) {
			return redirect()->back()->withErrors($validate);
		} else {

			$data = new Contact();
			$data->email = $request['email'];
			$data->phone = $request['phone']; 
			$data->name = $request['name'];
			$data->type = $request['type'];
			$data->msg = $request['msg'];
			$data->save();
            // $admins = User::where('role_id',1)->orWhere('role_id',8)->get();
            // foreach($admins as $admin){
            //     $admin->notify(new Ln($data));
            // }


			}

			return redirect()->route('aboutus')->with(['success' => trans('site.success_msg')]);
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    public function reports()
    {
        $reports = Report::orderBy('created_at','desc')->paginate(6);
        return view('pages.reports',compact('reports'));
    }
    public function singlereport($id)
    {
        $report = Report::find($id);
        return view('pages.single_report',compact('report'));
    }

    public function managers()
    {
        $managers = Team::where('manager',1)->orderBy('created_at','desc')->get();
        return view('pages.managers',compact('managers'));
    }
    public function teams()
    {
        $managers = Team::where('manager',0)->orderBy('created_at','desc')->get();
        return view('pages.teams',compact('managers'));
    }

    public function actions()
    {
        $actions = Action::orderBy('created_at','desc')->paginate(6);
        return view('pages.actions',compact('actions'));
    }
    public function singleaction($id)
    {
        $action = Action::find($id);
        return view('pages.single_action',compact('action'));
    }

    public function cactions()
    {
        $cactions = Action::orderBy('created_at','desc')->paginate(6);
        return view('pages.actions',compact('cactions'));
    }
    public function singlecaction($id)
    {
        $caction = Action::find($id);
        return view('pages.single_action',compact('caction'));
    }

    public function workprograms($id)
    {
        $work = Work::find($id);
        $programs = Program::where('work_id',$id)->orderBy('created_at','desc')->paginate(6);
        return view('pages.programs',compact('programs','work'));
    }

    public function programs()
    {
        $programs = Program::orderBy('created_at','desc')->paginate(6);
        return view('pages.programs',compact('programs'));
    }
    public function singleprogram($id)
    {
        $program = Program::find($id);
        return view('pages.single_program',compact('program'));
    }

    public function stories() 
    {
        $stories = Story::orderBy('created_at','desc')->paginate(6);
        return view('pages.stories',compact('stories'));
    }
    public function singlestory($id)
    {
        $story = Story::find($id);
        return view('pages.single_story',compact('story'));
    }

    public function rules() 
    {
        $rules = Rule::orderBy('created_at','desc')->paginate(6);
        return view('pages.rules',compact('rules'));
    }
    public function singlerule($id)
    {
        $rule = Rule::find($id);
        return view('pages.single_rule',compact('rule'));
    }

    public function news()
    {
        $newss = News::orderBy('created_at','desc')->paginate(6);
        return view('pages.news',compact('newss'));
    }
    public function singlenews($id)
    {
        $news = News::find($id);
        return view('pages.single_news',compact('news'));
    }

    public function aboutus()
    {
        $about = About::first();
        $goals = Goal::all();
        $fields = Field::all();
        $values = Value::all();
        return view('pages.aboutus',compact('about','goals','fields','values'));
    }
    public function enteremail(Request $request){
        $rules = [
			'email' => ['required'],
		];

		$validate = Validator::make($request->all(), $rules);
		if ($validate->fails()) {
			return redirect()->back()->withErrors($validate);
		} else {

			$data = new Email();
			$data->email = $request['email'];
			$data->program_id = $request['program_id'];
			$data->save();
            // $admins = User::where('role_id',1)->orWhere('role_id',8)->get();
            // foreach($admins as $admin){
            //     $admin->notify(new Ln($data));
            // }


			}

			return redirect()->back()->with(['success' => trans('site.success_msg')]);
    }

    public function president()
    {
        return view('pages.president');
    }
    public function vision()
    {
        return view('pages.vision');
    }
    public function fields()
    {
        $works = Work::all();

        return view('pages.fields' ,compact('works'));
    }
    public function gifts()
    {
        return view('pages.gifts');
    }
    public function supports()
    {
        return view('pages.supports');
    }
    
    //------ new updates 21-11-2023 ------
    
    public function statistics()
    {
        return view('pages.statistics');
    }
}
