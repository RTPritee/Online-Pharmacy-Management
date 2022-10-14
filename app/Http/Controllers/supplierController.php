<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;
use App\Models\editsupplier;

class supplierController extends Controller
{
    function viewSupplier(){
       // $info = supplier::select('suplliersId','address')->get();

        $suppliers = editsupplier::all();
        return view('suppliers.viewSupplier')->with('suppliers',$suppliers);
                                            //->with('info',$info);
    }
    function infoSupplier(){
        $suppliers=editsupplier::select('Name','email')->get();
        $info = supplier::all();
        return view('suppliers.infoSupplier',compact('suppliers','info'));
    }
    function add(){
        return view('suppliers.addSupplier');
    }
    function insert(Request $request){

        $request->validate([
            'name'     =>  'required',
            'email' =>  'required',
            'dateOfJoin'    =>  'required',
            'shift' =>  'required',
            'salary' =>  'required',
            'bonus' =>  'required',
            'status' =>  'required',
            'vehicle' =>  'required',
            
        ]);

        $suppliers = new editsupplier();
        $suppliers-> name = $request->name;
        $suppliers-> email = $request->email;
        $suppliers-> dateOfJoin = $request->dateOfJoin;
        $suppliers-> shift = $request->shift;
        $suppliers-> salary = $request->salary;
        $suppliers-> bonus = $request->bonus;
        $suppliers-> status = $request->status;
        $suppliers-> vehicle = $request->vehicle;
        $suppliers-> save();
        return redirect()->route('viewSupplier')->with('status',"Inserted Successfully!");
    }
    function edit($id){
        $suppliers = editsupplier::find($id);
        return view('suppliers.editSupplier')->with('suppliers',$suppliers);
    }
    function updateSupplier(Request $request,$id){
        $suppliers = editsupplier::find($id);
        $suppliers-> name = $request->name;
        $suppliers-> email = $request->email;
        $suppliers-> dateOfJoin = $request->dateOfJoin;
        $suppliers-> shift = $request->shift;
        $suppliers-> salary = $request->salary;
        $suppliers-> bonus = $request->bonus;
        $suppliers-> status = $request->status;
        $suppliers-> vehicle = $request->vehicle;
        $suppliers-> update();
        return redirect()->route('viewSupplier')->with('status',"Edited Successfully!");
    }
    public function deleteSupplier($id)
    {
        $suppliers = editsupplier::where('supplierId', $id)->delete();
        //$suppliers = editsupplier::find($id);
        //$suppliers->delete();
        return redirect()->route('viewSupplier')
        ->with('status', 'Supplier has been deleted successfully.');
    }
    public function search(Request $request){
        $get_name =$request-> searchSupplier;
        $suppliers = editsupplier::where('name','LIKE','%'.$get_name.'%')->get();
        return view('suppliers.searchSupplier')->with('suppliers',$suppliers);
    }


}
