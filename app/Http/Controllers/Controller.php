<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function demo1()
    {
        print("Hiee");
        return view('demo1');
    }

    public function welcome()
    {
        // print("data");
        $data =DB::table('students')->get();
    return view('Welcome',['data'=>$data]);
    }

    public function getdeleteid($id)
    {
         print($id);
          $id =DB::table('students')->where('id',$id)->delete();
     //   return view('delete',['data'=>$id]);
        return redirect('/')->with('success','student deleted successfully');
    }

    public function edit_data($id)
    {
        // print($id);
        
        $data =DB::table('students')->where('id',$id)->first();
// var_dump($data);
        return view('edit',['data'=>$data]);
    }

    public function update_data(Request $request, $id)
    {
            
        // // print($id);
        // $validatedData = $request->validate([
        //     'first_name' => '|string|max:255',
        //     'last_name' => '|string|max:255',
        //     'mobile_no' => '|string|max:255',
        //     'email' => '|email|unique:students|max:255',
        //     'address' => '|string|max:255',
        // ]);

        // // Update the record in the Students Table
        // DB::table('students')->where('id',$id)->update($validatedData);

        DB::table('students')
        ->where('id', $id)
        ->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'mobile_no' => $request->input('mobile_no'),
            'address' => $request->input('address')
         
        ]);


        // Redirect back to page , youwant to after the update.
        return redirect('/demo1')->with('success','Student updated successfully');
    }
    public function save(Request $request)
    {
        print("Student");
        
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:255',
            'email' => 'required|email|unique:students|max:255',
            'address' => 'required|string|max:255',
        ]);

       
        DB::table('students')->insert($validatedData);
        // Student::create($validatedData);
        
        return redirect('/')->with("success");
    }

    // public function getalldata(Request $req){
    // $data =DB::table('students')->get();
    // print($data);
    // return view('welcome',['data'=>$data]);
    // }
}




