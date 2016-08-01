<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = \App\Payment::paginate(20);
    //    var_dump($categories);
       $data["payments"] = $payments;
        return view('payment.index',$data);//We should create folder called "Category" and file called 'index.blade.php'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $items = Items::all(['id', 'name']);
//
//    return view('prices.create', compact('id', 'items'));
    
       $feetype = \App\Feetype::all(['feeID', 'feetype']);
       //$data["feetype"] = $feetype;
       return view('payment.create',  compact($feetype));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $input = $request::all();
//        \App\Category::create($input);
//        return redirect()->back();
        $payment = new \App\Payment();
        //$feetypes = \App\Feetype::lists('feeID', 'feetype');
        $payment->feeID = $request->get("feeID");
        $payment->calAmount = $request->get("calAmount");
        $payment->calDate = $request->get("calDate");
        $payment->paidamount = $request->get("paidamount");
        $payment->dateofpayments = $request->get("dateofpayments");
        $payment->reciptNo = $request->get("reciptNo");
        $payment->feestatus = $request->get("feestatus");
        
//        
//        $fee->feeID = $request->get("feeID");
//        $fee->calAmount = $request->get("calAmount");
//        $fee->calDate = $request->get("calDate");
//        $fee->paidamount = $request->get("paidamount");
//        $fee->dateofpayments = $request->get("dateofpayments");
//        $fee->reciptNo = $request->get("reciptNo");
//        $fee->feestatus = $request->get("feestatus");
        
        $payment->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($fno)
    {
        $payment = \App\Payment::find($fno);
        $data["payment"] = $payment;
        
        return view('payment.show',$data);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($fno)
    {
        $payment = \App\Payment::find($fno);
        $data["payment"] = $payment;
        
        return view('payment.edit',$data);//
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
