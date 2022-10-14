<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\medicine;
use App\Models\editsupplier;
use App\Models\supplier;
use App\Models\Token;
use App\Models\info;
use App\Models\pic;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Datetime;

class ApiPagesController extends Controller
{
    public function register(Request $rqt){
        $validator = Validator::make($rqt->all(),[
            "name" => "required|regex:/^[a-zA-Z\s]*$/i",
            "email" =>"required|email|unique:customers,email", // for unique email which is not already in database
            "password" => "required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$#!%*?&])[A-Za-z\d@$#!%*?&]{8,}$/i",
            "conf_password" => "required|same:password",
            "type"=> "required",
            "gender" =>"required"
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        $obj = new customer();
        $obj ->name = $rqt->name;
        $obj ->email = $rqt->email;
        $obj ->password = $rqt->password;
        $obj ->type = $rqt->type;
        
        $obj -> save();
        return response()->json(
            [
                "msg"=>"Added Successfully",
                "data"=>$obj        
            ]
        );
    }
    function login(Request $req){
        if($req->email=="pritee593@gmail.com" && $req->password=="1234Abcd@@"){
            $key = Str::random(67);
            $token = new Token();
            $token->tkey = $key;
            $token->user_id = 1;
            $token->created_at = new Datetime();
            $token->save();
            return response()->json($token);
        }
        return response()->json(["msg"=>"Username password invalid"],404);
    }
    public function logout($tk){
        $token = Token::where('id',$tk)->first();
        $token-> expired_at = new Datetime();
        $token->save();
        return response()->json(["msg"=>"Logged out"]);
      /* $tk = $req->token;
        $token = Token::where('tkey',$tk)->first();
        $token->expired_at = new Datetime();
        $token->save();
        return response()->json(["msg"=>"Logged out"]); */
    }
    public function home()
    {
        return response();
    }
    public function viewMedicine()
    {
        $medicine = medicine::all();
        return response()->json(data: $medicine);

    }
     public function viewSupplier(){
         $suppliers = editsupplier::all();
         return response()->json(data: $suppliers);
     }
     public function viewCustomer()
     { 
         $customer = customer::where('type','User')->get(); //select * from customers
         return response()->json(data: $customer);
     }
     public function deleteCustomer($id){
        $customer = customer::where('customersId', $id)->delete();
        if($customer)
        {
            return ["customer"=>"deleted"];
        }
     }
     public function deleteSupplier($id){
        $suppliers = editsupplier::where('supplierId', $id)->delete();
        if($suppliers)
        {
            return ["suppliers"=>"deleted"];
        }
     }
     public function deleteMedicine($id){
        $medicine = medicine::where('medicineId', $id)->delete();
        if($medicine)
        {
            return ["medicines"=>"deleted"];
        }
     }

    public function insert(Request $request){

        $validator = Validator::make($request->all(),[
            'name'     =>  'required',
            'email' =>  'required',
            'dateOfJoin'    =>  'required',
            'shift' =>  'required',
            'salary' =>  'required',
            'bonus' =>  'required',
            'status' =>  'required',
            'vehicle' =>  'required',
            
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
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
        return response()-> json(['suppliers'=>"added"]);
    } 

    public function add(){
        return respose();
    }
    public function addMedicine(){
        return response()->json([
            'medicine'=>"medicine added"
        ]);
    }
    public function insertMedicine(Request $request){
        $validator = Validator::make($request->all(),[
            'name'     =>  'required',
            'quantity' =>  'required',
            'price'    =>  'required',
            'discount' =>  'required',
            'photo'    =>  'image|max:2048'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        $medicine = new medicine();
        $medicine-> name = $request->name;
        $medicine-> quantity = $request->quantity;
        $medicine-> price = $request->price;
        $medicine-> discount = $request->discount;
        
        $fileName = $request->medicineId."_".time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $medicine["photo"] = '/storage/'.$path;
        $requestData["photo"] = '/storage/'.$path;
        $medicine-> save();
       
        return response()->json([
            'medicine'=>"medicine added"
        ]);
    }
    public function editMedicine($id){
        $medicine = medicine::find($id);
        if($medicine){
            return response()->json([
                'status' => 200 ,
                'medicine' => $medicine
            ]);
        }
        else 
        {
            return response()->json([
                'status' => 404 ,
                'message' => 'No medicine found'
            ]);
        }
    }
    public function updateMedicine(Request $request,$id){
        $medicines = medicine::where('medicineId', $request->id)->first();
        $medicines->name = $request->name;
        $medicines->quantity = $request->quantity;
        $medicines->price = $request->price;
        $medicines->discount = $request->discount;
        $fileName = $request->medicineId."_".time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $medicines["photo"] = '/storage/'.$path;
        $requestData["photo"] = '/storage/'.$path;

        $medicines->save();
        return response()->json([
            'medicine'=>"medicine updated"
        ]);
    }

    public function dashboard(){
        $info = info::all();
        return response()->json($info);
    }
    public function editSupplier($id){
        $supplier = editsupplier::find($id);
        return response()->json([
            'supplier'=>$supplier
        ]);
    }
    public function updateSupplier(Request $request,$id){
        $supplier = editsupplier::find($id);
        $supplier-> name = $request->name;
        $supplier-> email = $request->email;
        $supplier-> dateOfJoin = $request->dateOfJoin;
        $supplier-> shift = $request->shift;
        $supplier-> salary = $request->salary;
        $supplier-> bonus = $request->bonus;
        $supplier-> status = $request->status;
        $supplier-> vehicle = $request->vehicle;
        $supplier-> update();
        return response()->json([
            'supplier'=>"supplier updated"
        ]);
    }
    public function infoSupplier(){
        $supplier=editsupplier::select('Name','email')->get();
        $info = supplier::all();
        return response()->json(
            data: $info
        );
    }
}
