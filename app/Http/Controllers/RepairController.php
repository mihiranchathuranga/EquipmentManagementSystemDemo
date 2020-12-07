<?php

namespace App\Http\Controllers;

use App\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{   
    public function repairPageShow(){
        return view('RepairEquipment.repair');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repairs = Repair::all();

        return view('RepairEquipment.index')->with(['repairs' => $repairs]);

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
        $repair = new Repair;

         $repair->id                  = $request->id;
         $repair->description         = $request->description;
         $repair->cost                = $request->cost;
         $repair->invoice_attach      = $request->invoice_attach;
         
         $repair->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // $registers = Register::find($id);
          $repairs = Repair::findOrFail($id);
         // dd($registers);

       // return view('RegisterEquipment.show')->with('registers',$registers);
      //  return View::make('blog')->with('posts', $posts);
        //return view('RegisterEquipment.show',$registers);
          return view('RepairEquipment.show',compact('repairs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repairs = Repair::find($id);

        return view('RepairEquipment.edit')->with(['repairs' => $repairs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $repairs = Repair::find($id);

         $repairs->id                = $request->id;
         $repairs->description       = $request->description;
         $repairs->cost              = $request->cost;
         $repairs->invoice_attach    = $request->invoice_attach;
         
         $repairs->save();

         

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        //$register = Register::find($id);
        $repair =Repair::where('id',$id)->first();

        $repair->delete();

        return redirect('RepairEquipment/index');
        //return redirect()->action('HomeController@index');
    }
}
