<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return view('inventory_management.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=DB::table('product_categories')->get();
        return view('inventory_management.product.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //  dd($request->all());

        $category=$request->input('category');
        $pname=$request->input('pname');
        $pcompany=$request->input('pcompany');
        $pmodel=$request->input('pmodel');
        $pserial=$request->input('pserial');
        $pcondition=$request->input('pcondition');
        $pdate=$request->input('pdate');
        $pdescription=$request->input('pdescription');
        $pinvoice=$request->file('pinvoice');

       $invoice= $pinvoice->getClientOriginalName();
       $pinvoice->storeAs('public/product',$invoice);

        $sip=\Request::ip();
        $addedby=Auth::user()->name;
        
        $data=Product::create(['category'=>$category,'pname'=>$pname,'pcompany'=>$pcompany,'pmodel'=>$pmodel,'pserial'=>$pserial,'pcondition'=>$pcondition,'pdate'=>$pdate,'pdescription'=>$pdescription,'pinvoice'=>$invoice,'sip'=>$sip,'addedby'=>$addedby]);

         Session::flash('message','Product Added Successfully !!');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::where('id',$id)->get();
        return view('inventory_management.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
        $category=$request->input('category');
        $pname=$request->input('pname');
        $pcompany=$request->input('pcompany');
        $pmodel=$request->input('pmodel');
        $pserial=$request->input('pserial');
        $pcondition=$request->input('pcondition');
        $pdate=$request->input('pdate');
        $pdescription=$request->input('pdescription');
        $pinvoice=$request->file('pinvoice');

       $invoice= $pinvoice->getClientOriginalName();
       $pinvoice->storeAs('public/product',$invoice);

        $sip=\Request::ip();
        $addedby=Auth::user()->name;

        $data=Product::where('id',$id)->update(['category'=>$category,'pname'=>$pname,'pcompany'=>$pcompany,'pmodel'=>$pmodel,'pserial'=>$pserial,'pcondition'=>$pcondition,'pdate'=>$pdate,'pdescription'=>$pdescription,'pinvoice'=>$invoice,'sip'=>$sip,'addedby'=>$addedby]);

         Session::flash('message','Product Updated Successfully !!');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
       Product::where('id',$id)->delete();
         Session::flash('message','Product Deleted Successfully !!');
        return redirect()->route('product.index');
    }
}
