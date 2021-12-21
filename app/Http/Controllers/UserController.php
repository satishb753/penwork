<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Image;

use DB;

use App\User;

use App\Internship;

use App\Personal_Details;

use App\Educational_Details;

use App\Token;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getHome(Request $request)
    {

//        $internships = DB::table('internships')->paginate(5);
//        $projects = DB::table('projects')->where('branches','like','%'.Auth::user()->branch.'%')->paginate(5);
//        $jobs = DB::table('jobs')->paginate(5);
//        $conferences = DB::table('conferences')->paginate(5);
//        $publications = DB::table('publications')->paginate(5);
//        ,['internships' => $internships,'projects'=>$projects,'jobs'=>$jobs,
//        'conferences'=>$conferences,'publications'=>$publications]

        if(Auth::check() && Auth::user()->role == 'student')
        {
            return view('pages.front');
        }
        else if(Auth::check() && Auth::user()->role == 'admin')
        {
            return redirect()->route('admin.panel');
        }
        else return redirect()->route('login.get');

    }

    public function getSignUp(Request $request)
    {
        return view('pages.signup');
    }

    public function registerUser(Request $request){
        $this->validate($request,[
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
            'confirm_password'=>'required|same:password',
            'degree' => 'required',
            'branch' => 'required'
        ]);
        $user = new User();
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->member_id = $request['member_id'];
        $user->degree = $request['degree'];
        $user->branch = $request['branch'];

        if($user->save()){
            $token = Token::where('token_string',$request['member_id'])->first();
            if(sizeof($token) > 0 && $token->status == 'unused'){
                $token->status = 'used';
                $token->user_id = $user->id;
                $token->update();
            }
            return redirect()->route('home');
        }
        else return redirect()->route('home');
    }

    public function getLogin(Request $request)
    {
        return view('login');
    }


    public function loginUser(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=> $request['email'],'password' => $request['password'],'role'=>'student'])){
            $greet = 'Welcome Bhidoo';
            return redirect()->route('home')->with(['greet'=>$greet]);
        }
        else return redirect()->route('login')->with('message','Login Failed.');
    }

    public function showSettings(Request $request)
    {
        return view('pages.settings');
    }

    public function fillPersonalDetails(Request $request)
    {
        $current = Personal_Details::where('user_id',Auth::user()->id)->first();

        if( sizeof($current) > 0 )
        {
            $current->first_name = $request['first_name'];
            $current->last_name = $request['last_name'];
            $current->dob = $request['dob'];
            $current->contact = $request['contact'];
            $current->city = $request['city'];
            $current->state = $request['state'];
            $current->country = $request['country'];

            if( $current->update() ){
                return redirect()->route('home');
            }
        }
        else
        {
            $personal_details = new Personal_Details();

            $personal_details->user_id = Auth::user()->id;
            $personal_details->first_name = $request['first_name'];
            $personal_details->last_name = $request['last_name'];
            $personal_details->dob = $request['dob'];
            $personal_details->contact = $request['contact'];
            $personal_details->city = $request['city'];
            $personal_details->state = $request['state'];
            $personal_details->country = $request['country'];

            if($personal_details->save()){
                return redirect()->route('home');
            }
        }

    }


    public function fillEducationalDetails(Request $request)
    {
        $current = Educational_Details::where('user_id',Auth::user()->id)->first();

        if( sizeof($current) > 0 )
        {
            $current->university = $request['university'];
            $current->institute = $request['institute'];
            $current->degree = $request['degree'];
            $current->specialization = $request['specialization'];
            $current->year = $request['year'];
            $current->score = $request['score'];

            if( $current->update() ){
                return redirect()->route('home');
            }
        }
        else
        {
            $educational_details = new Educational_Details();

            $educational_details->user_id = Auth::user()->id;
            $educational_details->university = $request['university'];
            $educational_details->institute = $request['institute'];
            $educational_details->degree = $request['degree'];
            $educational_details->specialization = $request['specialization'];
            $educational_details->year = $request['year'];
            $educational_details->score = $request['score'];

            if($educational_details->save()){
                return redirect()->route('home')->with('request',$request);
            }
        }

    }


    //
    public function getAdminLogin(){
        return view('admin.login');
    }


    public function postAdminLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=> $request['email'],'password' => $request['password'],'role' => 'admin'])){
            $greet = 'Welcome Bhidoo';
            return redirect()->route('admin.panel')->with('greet',$greet);
        }
        else return redirect()->route('admin.login.get');

    }


    public function getAdminPanel(){
        if(Auth::check() && Auth::user()->role == 'admin'){
            return view('admin.dashboard');
        }
        else return redirect()->route('admin.login');
    }

    public function generateTokens()
    {
        if(Auth::user()->role != 'admin'){
            return redirect()->route('home');
        }
        for($i = 0 ; $i < 5 ; $i++){
            $tmp = new Token();
            $tmp->token_string = bin2hex(openssl_random_pseudo_bytes(5));
            if(!$tmp->save()){
                return redirect()->route('home');
            }
        }
        return redirect()->route('admin.login.get');
    }


    public function logout(){

        if(Auth::user()->role == 'admin'){
            Auth::logout();
            return redirect()->route('admin.login.get');
        }
        else if(Auth::user()->role == 'student'){
            Auth::logout();
            return redirect()->route('home');
        }
        else
        {
            Auth::logout();
            return redirect()->route('hoome');
        }
    }


}
