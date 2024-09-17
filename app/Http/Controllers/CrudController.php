<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cruds;

class CrudController extends Controller
{
    public function showdata()
    {
        //$showdata = Cruds::all();
        $showdata = cruds::simplepaginate(5);
        return view("showdata", compact('showdata'));
    }

    public function add_data()
    {
        return view('add_data');
    }

    public function storedata(Request $request)
    {
        // Validation rules can be uncommented if needed
        /*
        $rules = [
            'name' => 'required|max:10',
            'email' => 'required|email',
        ];

        $cm = [
            'name.required' => 'Enter your name',
            'name.max' => 'Your name cannot contain more than 10 characters',
            'email.required' => 'Enter your email',
            'email.email' => 'Email must be a valid email address',
        ];

        $this->validate($request, $rules, $cm);
        */
       
        $Cruds = new Cruds();
        $crud->name = $request->input('name');
        $Cruds->email = $request->email;
        $Cruds->save();
        
        Session::flash('msg', 'Data successfully added');
        return redirect('showdata');
    }

    public function editdata($id=null){
        $editdata=cruds::find($id);
        return view('editdata',compact('editdata'));


    }
    public function updatedata(Request $request, $id){ 
        
        $Cruds = Cruds::find($id);
        $Cruds->name = $request->name;
        $Cruds->email = $request->email;
        $Cruds->save();
        
        Session::flash('msg', 'Data successfully update');
        return redirect('showdata');


       
    }
    
    public function delectdata($id = null) {
        $delectData = Cruds::find($id);
        $delectData->delete(); 
        Session::flash('msg', 'Data successfully deleted');
            return redirect('showdata');
        
  
            
        }
        
      
    
}
