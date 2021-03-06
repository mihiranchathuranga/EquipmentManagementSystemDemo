<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerPageShow(){
        return view('RegisterEquipment.register');
    }

     public function show($id)
    {
       // $registers = Register::find($id);
          $registers = Register::findOrFail($id);
         // dd($registers);

       // return view('RegisterEquipment.show')->with('registers',$registers);
      //  return View::make('blog')->with('posts', $posts);
        //return view('RegisterEquipment.show',$registers);
          return view('RegisterEquipment.show',compact('registers'));
    }


    public function index()
    {
        $registers = Register::all();

        return view('RegisterEquipment.index')->with(['registers' => $registers]);

        //return $registers; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $register = new Register;

         $register->id           = $request->id;
         $register->category     = $request->category;
         $register->equipment_id = $request->equipment_id;
         $register->serial_no    = $request->serial_no;
         $register->supplier     = $request->supplier;

         $register->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $registers = Register::find($id);

        return view('RegisterEquipment.edit')->with(['registers' => $registers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registers = Register::find($id);

         $registers->id           = $request->id;
         $registers->category     = $request->category;
         $registers->equipment_id = $request->equipment_id;
         $registers->serial_no    = $request->serial_no;
         $registers->supplier     = $request->supplier;

         $registers->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //$register = Register::find($id);
        $register =Register::where('id',$id)->first();

        $register->delete();

        return redirect('RegisterEquipment/index');
        //return redirect()->action('HomeController@index');
    }
}
