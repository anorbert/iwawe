<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Session;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roleId = Auth::user()->roleId;
        // $roleId = Auth::user()->roleID;
        $roles = DB::select("SELECT * FROM role WHERE id=?", array($roleId));

        // var_dump($roles, $roleId); return;
        if(count($roles) == 0){
            // Redirect to the error page
            return view("welcome");
        }
        Session::put("role", $roles[0]->name);
        Session::put("userId", Auth::user()->id);
        Session::put("email", Auth::user()->email);
        Session::put("name", Auth::user()->name);

        if(in_array($roleId, [1,5])){
            $branch = DB::select("SELECT    a.id AS branchId,
                                            a.name AS branchName
                                            FROM blanches AS a
                                            INNER JOIN blanche_users AS b
                                            ON a.id = b.blancheId
                                            WHERE b.userId = ?
                                            ", [Auth::user()->id]);
            if(count($branch) == 0){
                // Redirect to the error page
                return view("welcome");
            }
            Session::put("branchId", $branch[0]->branchId);
            Session::put("branchName", $branch[0]->branchName);
        }
        if($roleId == 1){

            return redirect('pricing');
        }
        if($roleId == 2){
            return redirect('managerhome');
        }
        if($roleId == 3){
            return redirect('acchome');
        }
        if($roleId == 4){
            return redirect('dmhome');
        }
        if($roleId == 5){
            return redirect('smhome');
        }
        if($roleId == 6){
            return redirect('hrhome');
        }
        return view('home');
    }
}
