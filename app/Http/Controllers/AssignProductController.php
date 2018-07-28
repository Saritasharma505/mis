<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssignProduct;
use App\User;
use App\Product;
use DB;
use Session;

class AssignProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assign=AssignProduct::all();
        return view('inventory_management.product_allocated.index',compact('assign'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $users=User::orderBy('name')->get();
      
        $category=DB::table('product_categories')->get();
        return view('inventory_management.product_allocated.create',compact(['users','category']));
    }

    public function getProduct($category)
    {
      
       $product=DB::table('products')->where('category',$category)->get(['pdescription']);
       return response()->json($product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        AssignProduct::create($request->all());
        Session::flash('message','Product Assigned successfully!!');

       return redirect()->route('assign.index');
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
       $assign_product= AssignProduct::where('id',$id)->get();
        $users=User::orderBy('name')->get();
      
        $category=DB::table('product_categories')->get();
       return view('inventory_management.product_allocated.edit',compact(['assign_product','users','category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      

       $assigned_user= $request->input('assigned_user');
        $product_cat= $request->input('product_cat');
        $product_desc= $request->input('product_desc');
        $date= $request->input('date');
        $remark= $request->input('remark');
       // $assigned_user= $request->input('assigned_user');

          $data=AssignProduct::where('id',$id)->update(['assigned_user'=>$assigned_user,'product_cat'=>$product_cat,'product_desc'=>$product_desc,'date'=>$date,'remark'=>$remark]);

         Session::flash('message','Product Assignment Updated Successfully !!');
        return redirect()->route('assign.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AssignProduct::where('id',$id)->delete();
         Session::flash('message','Product Assigned Deleted successfully!!');

       return redirect()->route('assign.index');
    }
}
