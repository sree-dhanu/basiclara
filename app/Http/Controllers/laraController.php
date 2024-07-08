<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lara;
use App\Models\fileup;
use App\Models\cartview;
use App\Models\catmodel;

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
 //dropdown search
 public function select_searchshow() //items displayed inside the select box for searching
    {
        $items=lara::all();
        return view('select_search',compact('items'));
    } 
    public function searchput(Request $request) //selected item is check wheteher it is available or not
    {
      $inputitem=$request->input('nam') ;
      echo $inputitem;

      //fetch the database based on selected item
      $selecteditem=lara::find($inputitem);
        //echo $selecteditem;
      return view('searchoutput',compact('selecteditem'));

    }
     public function add()
     {
        return view('add');
     }
     public function adddetailtAction(Request $req)
     {
        $pname=$req->input('name');
        $category=$req->input('category');
        $size=$req->input('size');
        $price=$req->input('price');

        $dats=[
            'prodname'=>$pname,
            'category'=>$category,
            'size'=>$size,
            'price'=>$price
              ];
                cartview::insert($dats);
                return redirect('/add');
     }
     public function selectboxsearch()
     {
        $content=cartview::select('category')->get();
        return view('selectboxsearch',['cate'=>$content]);
     }
     public function catsearch(Request $req)
     {
        $selected=$req->input('cat');
        echo $selected;
        
        $searched=cartview::find($selected);
echo $searched;
        return view('category_result',compact('searched'));
        
     }
     public function filing()
     {
        return view('filing');
     }
    //  public function dowloadval()
    //  {
    //     $filepath=public_path('/documents/to/img/Aadujeevitham.pdf');
    //     return response()->download($filepath);
    //  }
    public function linkpage()
    {
        return view('linkpage');
    }
    public function novelpage()
    {
        $novelcate['ncat']=catmodel::where('category','Novel')->get();
        return view('novelpage',$novelcate);
    }
    public function horropage()
    {
        $horrorcate['hcat']=catmodel::where('category','Horror')->get();
        return view('horropage',$horrorcate);
    }
    public function travel()
    {
        $travelcate['travelcat']=catmodel::where('category','Travelogue')->get();
        return view('travel',$travelcate);
    }
    public function novels($id)
    {
         $idnovels['novel_files']=fileups::where('id',$id)->get();
        // return view('novels',$idnovels);
        $file = storage_path('app/public//') . $id . '.pdf';

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
