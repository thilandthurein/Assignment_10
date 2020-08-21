<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class StudentController extends Controller
{
   public function index(){
   		$students=DB::table('students')->get();
   		$data=[
   			'students'=>$students
   		];
   		
        return view('studentupdate',$data);
   }

   public function store(Request $request){
   	/*print_r($request['rollno']);
   	die();*/
   		 $students=DB::table('students')->insert([
                'rollno'=>$request->rollno,
                'name'=>$request->name,
                'address'=>$request->address,
                'sex'=>$request->sex,
                'phone'=>$request->phone
        ]);
   		return redirect()->route('regindex');
   }

   public function show($id){
   		$students=DB::table('students')->where('id',$id)->get();
   		
        return view('studentshow',compact('students'));
   }

   public function update(Request $request, $id){
   		$students=DB::table('students')
        ->where('id',$id)
        ->update([
        	'rollno'=>$request->rollno,
        	'name'=>$request->name,
        	'address'=>$request->address,
        	'sex'=>$request->sex,
        	'phone'=>$request->phone
        ]);
        return redirect()->route('regindex');
   }

   public function destroy($id){
   	$category=DB::table('students')->where('id',$id)->delete();
   	return redirect()->route('regindex');
   }

   public function destroytime($id){
   		$category=DB::table('students')
                    ->where('id',$id)
                     ->update([
                        'deleted_at'=>Carbon::now(),
                      ]);
        return redirect()->route('regindex');
   }



}
