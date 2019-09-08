<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class home extends Controller
{
    //
	public function index(){
	
    return view('login');
	}
	
	public function about(){
	
    return view('welcome');
	}
	
	public function logoff(){
	
    return view('login');
	}
	public function upload(){
	
return view('upload');
    
	}
	
	public function welcome(){




if (isset($_POST["submit"])) {
      // username and password sent from form 
     
      $user = $_POST['uname'];
      $password = $_POST['psw']; 
      
      $sql =DB::select( "SELECT firstname, lastname FROM userlists WHERE username='$user' AND password='$password'");
      
   } 
    
    return view('welcome1', [
	
	'test'=>$sql]
	
	);
	}
}
