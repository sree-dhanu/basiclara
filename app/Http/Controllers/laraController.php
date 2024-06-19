<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lara;
use App\Models\fileup;

class laraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function reg()
    {
        return view('reg');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function regAction(Request $request)
    {
       $name=$request->input('name');
       $age=$request->input('age');
       $gender=$request->input('rad');
       $class=$request->input('class');
       $user=$request->input('uname');
       $pass=$request->input('pass');

       $data=[
            'name'=>$name,
            'age'=>$age,
            'gender'=>$gender,
            'class'=>$class,
            'user'=>$user,
            'pass'=>$pass
       ];
       lara::insert($data);
       return redirect('/view');
    }
    public function view()
    {
        $data['contents']=lara::get();
        return view('view',$data);
    }
    public function edit($id)
    {
        $data['regdetails']=lara::where('id',$id)->get();
        return view('edit',$data);
    }
    public function editAction(Request $req,$id)
    {
        $name=$req->input('name');
        $age=$req->input('age');
       $gender=$req->input('rad');
        $class=$req->input('class');
        $username=$req->input('uname');
        $passwd=$req->input('pass');

        $data=[
            'name'=>$name,
            'age'=>$age,
            'gender'=>$gender,
            'class'=>$class,
            'user'=>$username,
            'pass'=>$passwd
        ];

            lara::where('id',$id)->update($data);
            return redirect('/view');
            
    }
        public function delete($id)
        {
          lara::where('id',$id)->delete();
          return redirect('/view');
        }
        public function login()
        {
            return view('login');
        }
        public function loginAction(Request $req)
        {
            $user=$req->input('uname');
            $pass=$req->input('passwd');

            $log=lara::where('user',$user)->where('pass',$pass)->first();

            if(isset($log)) 
        {
            $req->session()->put(array('sessid'=>$log->id));
            return redirect('/view');
        }  
        else
        {
            return redirect('/login')->with('error','Invalid username or Password');
        }  
       }
       public function logout(Request $req)
       {
        $req->session()->forget('sessid');
        return redirect('/');
       }
       public function fileAction(Request $req )
       {
           $filename=$req->input('name');
           $category=$req->file('files');
           
           $origin=$category->getClientOriginalName();
           $category->move(public_path().'/img/',$origin);

           $data=[
                'fname'=>$filename,
                'cat'=>$origin
           ];

           fileup::insert($data);
           return redirect('/view');

       }
       public function fileup()
       {
        return view('fileup');
       }
    /**
     * Display the specified resource.
     */
    // public function searching()
    // {
    //     $vv['fields']=lara::get();
    //    return view('/searching',$vv);
    // }
 public function searching() //type the item 
 {
//     $names=lara::all();
//     return view('searching',compact('names'));
   return view('searching');
  }
 public function searchingAction(Request $req) //typed item is available in database or not
 {
    $search=$req->input('search');
    //echo $search;
    $names=lara::where('name','LIKE',"%{$search}%")->get();
   return view('search_results',compact('names'));
 }
 public function select_searchshow() //items displayed inside the select box for searching
    {
        $items=lara::all();
        return view('select_search',compact('items'));
    } 
    public function search(Request $request) //selected item is check wheteher it is available or not
    {
      $inputitem=$request->input('nam') ;
      echo $inputitem;

      //fetch the database based on selected item
      $selecteditem=lara::find($inputitem);

      return view('searchoutput',compact('selecteditem'));

    }
 
    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
