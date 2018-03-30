<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client; 
use App\Http\Requests ;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
//use Vinelab\Http\Client as HttpClient;

class parseController extends Controller
{
    	public function parseJson(){
    		$client = new Client();
    		$res = $client -> request('GET','https://api.coursera.org/api/courses.v1');
    		$data = $res -> getBody();
    		$data = json_decode($data,true);
    		$ele = $data['elements'];
    		//dd($ele);
   
			//dd($names_course);
			
    		return view('/jsonView', compact('ele'));
    	}
    	
    	public function save($name,$course,$id){

    		$data = array('course_name'=> $name,'course_type'=>$course,'course_id'=>$id);
    		DB::table('courses')->insert($data);
    		dd('Data Saved');

		}
		public function index()
    	{

        $course =  DB::table('courses')->get();
    

           //dd($course);
        return view('/saved_courses', compact('course'));
    	
    	}


}

