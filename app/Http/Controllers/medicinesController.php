<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicine;
use Illuminate\Support\Facades\File;

class medicinesController extends Controller
{
    public function index()
    {
        
        $itemPerPage=25;
        $pages = 1000/25;
        $pages=$pages + (1000%26);
        $medicines = medicine::skip(($pages-1)*$itemPerPage)->take($itemPerPage);
        $medicines = medicine::paginate(5);
        return view('medicine.viewMedicine')->with('medicines',$medicines);

    }
    public function create()
    {
        return view ('medicine.createMedicine');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'     =>  'required',
            'quantity' =>  'required',
            'price'    =>  'required',
            'discount' =>  'required',
            'photo'    =>  'image|max:2048'
        ]);
        //$medicines = new medicine();
        $requestData = $request->all();
        /*
        $medicines->name = $request->name;
        $medicines->quantity = $request->quantity;
        $medicines->price = $request->price;
        $medicines->discount = $request->discount;
        */
        
        $fileName = $request->medicineId."_".time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $medicines["photo"] = '/storage/'.$path;
        
        //$medicines->save();
        $requestData["photo"] = '/storage/'.$path;
        
        medicine::create($requestData);
        return redirect('viewMedicine')->with('success', 'Medecine Added! Please check on last page.');
    }
    public function edit($id)
    {
        $medicines =  medicine::where('medicineId',$id)->first();
        return view('medicine.editMedicine')->with('medicines',$medicines);
       
    }
    public function update(Request $request, $id)
    {
        
        $medicines = medicine::where('medicineId', $request->id)->first();
        $medicines->name = $request->name;
        $medicines->quantity = $request->quantity;
        $medicines->price = $request->price;
        $medicines->discount = $request->discount;
        /*
        if($file = $request->file('photo')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $medicines->photo = $name;
        }
        */
        $fileName = $request->medicineId."_".time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $medicines["photo"] = '/storage/'.$path;
        $requestData["photo"] = '/storage/'.$path;

        $medicines->save();
        return redirect()->route('index')->with('success', 'medicines has been updated successfully.');

    }
    public function search(Request $request){
        $get_name =$request-> search;
        $medicines = medicine::where('name','LIKE','%'.$get_name.'%')->get();
        return view('medicine.search',compact('medicines'));
    }
    public function delete($id)
    {
        $medicines = medicine::where('medicineId', $id)->delete();
        return redirect()->route('index')
        ->with('success', 'Medicine has been deleted successfully.');
    }
}
