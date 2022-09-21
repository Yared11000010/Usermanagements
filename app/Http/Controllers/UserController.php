<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;

class UserController extends Controller
{
    public function logout(){

    Auth::logout();
    return view('auth.login');
    
    }
    // for display all users
    public function index(){
        $users=User::all();

        return view('User.allluser',compact('users',$users));
    }
    //this fuction display add user page
    public function create(){
        return view('User.adduser');
    }
    //this fuction is to store user into users table
    public function store(Request $request){
        $this->validate($request,['name'=>'required',
                                   'usertype'=>'required',
                                   'email'=>'required|email',
                    ]);

        // dd($request->all());
        try{
            DB::beginTransaction();
            $create_user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'usertype'=>$request->usertype,
                'status'=>1,
                'password'=>Hash::make('password')
               ]);
            if(!$create_user){
                DB::rollBack();  
               
             return back()->with('error','Something went wrong ');
        
            }
            DB::commit();
            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('allusers');
        
           }catch(\Throwable $th)
             {
             DB::rollBack();
             throw $th;
            }
    }
     //display specific edited user from users table
    public function edit($id){

        $users=User::whereId($id)->first();
        return view('User.edituser')->with('users',$users);
    }
    //update users from database
    public function update(Request $request,$id){

     $this->validate($request,['name'=>'required',
                                   'usertype'=>'required',
                                   'email'=>'required|email',
                    ]);
    try{
       DB::beginTransaction();
       $update_user=User::where('id',$id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'usertype'=>$request->usertype,
        'password'=>Hash::make('password')
       ]);
      if(!$update_user){
        DB::rollBack();  
       
       return back()->with('error','Something went wrong ');

       }
       DB::commit();
    
        return redirect()->route('allusers');

       }catch(\Throwable $th)
        {
       DB::rollBack();
       throw $th;
        }

    }
    //delete users
    public function destory($id){

       $users=User::find($id);

       $users->delete();
       return back();
    }
    //acitve users
    public function activeuser($id){
        $users=User::find($id);
        $users->status=1;
        $users->update();

        notify()->success('User Status is Active','Active');
        return redirect()->route('allusers');
    }
    //inactive users
    public function inactiveuser($id){

        $users=User::find($id);
        $users->status=0;
        $users->update();

        notify()->error('User Status is Inactive','Inactive');
        return redirect()->route('allusers');
    }
}
