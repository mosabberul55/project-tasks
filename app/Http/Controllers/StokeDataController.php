<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokeDataController extends Controller
{
  public function index()
  {
    $path = 'stock_market_data.json';
    $content = json_decode(file_get_contents($path), true);
    return view('index', compact('content'));
  }
  public function create()
  {
    return view('create');
  }
  public function store(Request $request)
  {
    $request->validate([
      'date'              => 'required',
      'trade_code'         => 'required|max:150',
      'high'               => 'required',
      'open'               => 'required|numeric',
      'close'              => 'required|numeric',
      'volume'             => 'required',
    ]);
    $data = file_get_contents('stock_market_data.json');
    $data = json_decode($data, true);
    $add_arr = array(
      'date' => $request->date,
      'trade_code' => $request->trade_code,
      'high' =>  $request->high,
      'low' =>  $request->low,
      'open' =>  $request->open,
      'close' =>  $request->close,
      'volume' =>  $request->volume
    );
    $data[] = $add_arr;
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('stock_market_data.json', $data);
    session()->flash('success', 'Added successfully !!');
    return redirect()->route('index');
  }
  public function edit($i)
  {
    $edit_id = $i;
    //get json data
    $data = file_get_contents('stock_market_data.json');
    $data_array = json_decode($data, true);
    $row = $data_array[$edit_id];
    return view('edit', compact('row', 'edit_id'));

  }
  public function update(Request $request ,$id)
  {
    // $request->validate([
    //   'date'         => 'required',
    //   'trade_code'         => 'required|max:150',
    //   'high'               => 'required',
    //   'low'               => 'required',
    //   'open'               => 'required|numeric',
    //   'close'              => 'required|numeric',
    //   'volume'             => 'required|numeric',
    // ]);
    $data = file_get_contents('stock_market_data.json');
    $data = json_decode($data, true);

    $data[$id] = array(
      'date'       => $request->date,
      'trade_code' => $request->trade_code,
      'high' =>  $request->high,
      'low' =>  $request->low,
      'open' =>  $request->open,
      'close' =>  $request->close,
      'volume' =>  $request->volume
    );
    //dd($data);
    $data = json_encode($data);
    file_put_contents('stock_market_data.json', $data);
    session()->flash('success', 'updated successfully !!');
    return redirect()->route('index');
  }
  public function delete($i)
  {

    $data = file_get_contents('stock_market_data.json');
    $data = json_decode($data);

    unset($data[$i]);

    //encode back to json
    $data = json_encode($data);
    file_put_contents('stock_market_data.json', $data);
    session()->flash('success', 'Deleted successfully !!');
    return redirect()->route('index');
  }
}
