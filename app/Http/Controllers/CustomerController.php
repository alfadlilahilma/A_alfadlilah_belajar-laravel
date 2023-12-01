<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all()->toArray();

    }

    public function show($id)
    {
        $data = Customer::find($id)->toArray();

        dd($data);
    }

    public function search(Request $request)
    {
        $province = $request->input('province');
        $data = Customer::where('province',$province)->get()->toArray();

        dd($data);
    }

    public function store(Request $request)
    {
        
        $data = [
            'name'=>'alfadlilah ilma',
            'email'=>'alfadlilahdela@gmail.com',
            'phone'=>'087754078131',
            'address'=>'JL.Kartini No.118',
            'city'=>'Sumenep',
            'province'=>'Jawa Timur'
        ];
        //$insert=Customer::create([
          //  'name'=>$Request->input('name'),
            //'email'=>$Request->input('email'),
            //'phone'=>$Request->input('phone'),
            //'address'=>$Request->input('address'),
            //'city'=>$Request->input('city'),
            //'province'=>$Request->input('province'),
        //])
        $insert=Customer::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'address'=>$data['address'],
            'city'=>$data['city'],
            'province'=>$data['province']
        ]);

        dd($data);
    }
    public function update(Request $request)
{
    $id = $request->input('id');
    $data = [
        'name' => 'dela ilma',
        'email' => 'dela@gmail.com',
        'phone' => '087754078131',
        'address' => 'JL.Kartini No.118',
        'city' => 'Sumenep',
        'province' => 'Jawa Timur'
    ];

    $update = Customer::where('id', $id)->update([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'address' => $data['address'],
        'city' => $data['city'],
        'province' => $data['province'] // Fixed the unclosed square bracket here
    ]);
}
    public function delete($id)
    {
    $delete = Customer::where('id', $id)->delete();
    //$delete = Customer::destroy($id);

    return $delete;
    }
}
    
