<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $aut = \App\User::where('id',session()->get('logged'))->first();
        return view('user.index',compact('aut'));
    }

    public function password()
    {
        $aut = \App\User::where('id',session()->get('logged'))->first();
        return view('user.infos',compact('aut'));
    }

    public function orders()
    {
        $aut = \App\User::where('id',session()->get('logged'))->first();
        return view('user.orders',compact('aut'));
    }

    public function address()
    {
        $aut = \App\User::where('id',session()->get('logged'))->first();
        $address = \App\Address::where('user_id',session()->get('logged'))->get();
        return view('user.address',compact('aut','address'));
    }
    public function editaddress($id)
    {
        $aut = \App\User::where('id',session()->get('logged'))->first();
        $address = \App\Address::where('id',$id)->first();
        if($address->user_id == $aut->id){
            return redirect()->back()->with('editaddress', $address->id);
        }
    }

    public function deleteaddress($id)
    {
        $aut = \App\User::where('id',session()->get('logged'))->first();
        $address = \App\Address::where('id',$id)->firstOrFail();
        if($address->user_id == $aut->id){
                $address->delete();
            return redirect()->back();
        }
    }

    public function register(Request $req)
    {
        $users = \App\User::orderby('id','DESC')->first();
        $emailcheck = \App\User::where('email',$req->email)->first();
        if($req->password == $req->conpassword && empty($emailcheck)){
        
        if(!empty($users)){

            $id = $users->id + 1;
        }else{
            $id = 1;
        }
        $user = \App\User::create([
            'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'role' => 2,
                'lastname' => $req-> lastname,
                'country' => $req-> country,
                'day' => $req-> day,
                'mounth' => $req-> mounth,
                'year' => $req-> year
            ]);
            $req->session()->put('logged', $id);
            return redirect('/');
        }
        if($req->password != $req->conpassword){
            return redirect()->back()->with('confpass', 'Passwords dont mutch');
        }
        if(!empty($emailcheck)){
            return redirect()->back()->with('confemail', 'Email already exist');
        }
        
    }

    public function subscribe(Request $req) {
        $user = \App\Subscribe::create([
                'email' => $req->mail,
            ]);
            $req->session()->put('Registred',$req->mail);
return redirect()->back();
    }

    public function login(Request $req)
    {
        $cheks = \App\User::where('email', $req->email)->first();
        if(!empty($cheks) && Hash::check($req->password, $cheks->password)){
        $req->session()->put('logged', $cheks->id);
        return redirect('/');
        }else{
            return redirect()->back()->with('conflogin', 'البريد غير موجود');
        }
    }

    public function editpassword(Request $req)
    {
        $cheks = \App\User::where('id', $req->id)->first();
        if(!empty($cheks) && Hash::check($req->pass, $cheks->password)){
        if($req->newpass == $req->confpass){
            $users = \App\User::where('id',$req->id)->update([
                'password' => Hash::make($req->newpass)
                    ]);
                    toastr()->info('Password edited seccussfully');
                    return redirect()->back();    
        }
        }else{
            return redirect()->back()->with('conflogin', 'Verify your password');
        }
    }

    public function edit(Request $req) {
        $users = \App\User::where('id',$req->id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'lastname' => $req->lastname,
            'phone' => $req->phone,
            'country' => $req->country,
            'day' => $req->day,
            'mounth' => $req->mounth,
            'year' => $req->year
                ]);
        toastr()->info('Informations edited seccussfully');
                return redirect()->back();
            }
        
            public function delete(Request $req) {
        
                $users = \App\User::where('id',$req->id)->firstOrFail();
                        $users->delete();
        toastr()->error('User is deleted seccussfully');
                return redirect()->back();
            }

            public function logout(Request $req)
            {
                $req->session()->forget('logged');
                return redirect('/');
            }

    public function store(Request $request) {
        if($request->type == "add") {
if($request->defaulte){
    $def = 1;
    $addr = \App\Address::where('user_id',$request->id)->update([
        'defaulte' => 0
            ]);
}else{
    $def = 0;
}
            $address = \App\Address::create([
                'user_id' => $request->id,
                'name' => $request->name,
                'lastname' => $request->lastname,
                'address' => $request->address,
                'city' => $request->city,
                'zip' => $request->zip,
                'state' => $request->state,
                'country' => $request->country,
                'phone' => $request->phone,
                'defaulte' => $def
            ]);
            toastr()->success('Address is added seccussfully');
            return redirect()->back();    
        }

        if($request->type == "edit") {
            if($request->defaulte){
                $def = 1;
                $addr = \App\Address::where('user_id',$request->id)->update([
                    'defaulte' => 0
                        ]);
            }else{
                $def = 0;
            }
                        $address = \App\Address::where('id',$request->idad)->update([
                            'name' => $request->name,
                            'lastname' => $request->lastname,
                            'address' => $request->address,
                            'city' => $request->city,
                            'zip' => $request->zip,
                            'state' => $request->state,
                            'country' => $request->country,
                            'phone' => $request->phone,
                            'defaulte' => $def
                        ]);
                        toastr()->success('Address is updated seccussfully');
                        return redirect()->back();    
                    }

    }
}

