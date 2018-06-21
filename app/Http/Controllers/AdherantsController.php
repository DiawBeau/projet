<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Adherant;
use Auth;

use DB;

class AdherantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
    	$adherants  = Adherant::all();
        return view('adherants.index',compact('adherants'));
    }

    public function test( Adherant $adherant)
    {
       //$adherant = Adherant::find($id);
        return view('adherants.test',compact('adherant'));
    }

    public function userId($id)
    {
       $user = Auth::user()->id;
        return view('welcome',compact('user'));
    }

    public function show( Adherant $adherant)
    {
	   //$adherant = Adherant::find($id);
        return view('adherants.show',compact('adherant'));
    }

    public function edit( Adherant $adherant)
    {
        $adherant = Adherant::find($id);
        
        // Check for correct user
        // if(Auth::user()->id !== $adherant->user_id){
        //     return redirect('adherants.index')->with('error', 'Unauthorized Page');
        // }

        return view('adherants.edit',compact('adherant'));
    }

    public function update(Request $req , $id)
    {
        $adherant = Adherant::findOrFail($id);
        $adherant->update($req->all());

        return redirect('adherants');
    }

      public function create()
    {
        return view('adherants.create');
    }

    public function store()
    {
        
        //create adherant

        $adherant = new Adherant;
        $adherant->user_id = Auth::user()->id;
        $adherant->first_name = request('first_name');
        $adherant->last_name = request('last_name');
        $adherant->email = request('email');
        $adherant->licence_number = request('licence_number');
        $adherant->save();

        // Penser à la validation
        // $this->validate(request(),[

        //     'last_name' => 'required',
        //     'first_name' => 'required',
        //     'email' => 'required',
        //     'licence_number' => 'required',




        // ]);

        // Adherant::create(request(['first_name','last_name','email','licence_number']));

        return redirect('adherants');


    }

   public function destroy($id) {
      DB::delete('delete from adherants where id = ?',[$id]);
      return redirect('adherants');
   }




}
