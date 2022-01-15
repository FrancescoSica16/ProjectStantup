<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bill;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = DB::table('bills')->distinct()->get('bill_number');
        
        return view('bill_index', compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $bill = new Bill();
       
        return view('bill_create', compact('bill'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $data = $request->all();

        $bill = new Bill;
        $bill["bill_number"] = $data['bill_number'];
        $bill["bill_attr_name"] = $data['bill_attr_name'];
        $bill["bill_attr_value"] = $data['bill_attr_value'];

        //$bill->fill($data);
        $bill->save();
        
        $attr="bill_attr_name";
        $val="bill_attr_value";
        for($i=1;$i<=$data['index'];$i++)
        {
            $bill = new Bill;
            $bill["bill_number"] = $data['bill_number'];
            $bill["bill_attr_name"] = $data[$attr.$i];
            $bill["bill_attr_value"] = $data[$val.$i];
            $bill->save();
        }
        

        return redirect()->route('bill_index')->with('status', 'la fattura è stata salvata');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill , $bill_number)
    {
        
        // $bill_number = DB::table('bills')->select('bill_attr_name', 'bill_attr_value')->where('bill_number', '=' , '{$bill_number}')->get();

        // $bill_number = DB::table('bills')->select('bill_number')->where('bill_number', '=' , $bill_number)->get();

        $bill = DB::table('bills')->select('bill_attr_name', 'bill_attr_value')->where('bill_number', '=' , $bill_number)->get();
        //dd($bill);
        return view("bill_view", compact("bill_number", "bill"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
