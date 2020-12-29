<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\StokeData;
use Illuminate\Support\Facades\Storage;
use Excel;
use App\Imports\StokeDataImport;

class StokeDataController extends Controller
{
  public function importForm()
  {
    return view('import_form');
  }
  public function importCSV(Request $request)
  {
    ini_set("memory_limit","7G");
    ini_set('max_execution_time', '0');
    ini_set('max_input_time', '0');
    set_time_limit(0);
    ignore_user_abort(true);
    Excel::import(new StokeDataImport, $request->file);
    session()->flash('success', 'Imported successfully !!');
    return redirect()->route('index');
  }
  public function index()
  {
    $data = StokeData::all();
    return view('index', compact('data'));
  }
  public function create()
  {
    return view('create');
  }
  public function store(Request $request)
  {
    $request->validate([
      'date'               => 'required',
      'trade_code'         => 'required|max:150',
      'high'               => 'required',
      'low'               => 'required',
      'open'               => 'required|numeric',
      'close'              => 'required|numeric',
      'volume'             => 'required',
    ]);
    $stock_data = new StokeData;
    $stock_data->date = $request->date;
    $stock_data->trade_code = $request->trade_code;
    $stock_data->high = $request->high;
    $stock_data->low = $request->low;
    $stock_data->open = $request->open;
    $stock_data->close = $request->close;
    $stock_data->volume = $request->volume;
    $stock_data->save();
    session()->flash('success', 'Added successfully !!');
    return redirect()->route('index');
  }
  public function edit($id)
  {
    $stock_data = StokeData::find($id);
    return view('edit', compact('stock_data'));
  }
  public function update(Request $request, $id)
  {
    $request->validate([
      'date'               => 'required',
      'trade_code'         => 'required|max:150',
      'high'               => 'required',
      'low'               => 'required',
      'open'               => 'required|numeric',
      'close'              => 'required|numeric',
      'volume'             => 'required',
    ]);
    $stock_data = StokeData::find($id);
    $stock_data->date = $request->date;
    $stock_data->trade_code = $request->trade_code;
    $stock_data->high = $request->high;
    $stock_data->low = $request->low;
    $stock_data->open = $request->open;
    $stock_data->close = $request->close;
    $stock_data->volume = $request->volume;
    $stock_data->save();
    session()->flash('success', 'Updated successfully !!');
    return redirect()->route('index');
  }
  public function delete($id)
  {
    $stock_data = StokeData::find($id);
    $stock_data->delete();
    session()->flash('success', 'Deleted successfully !!');
    return redirect()->route('index');
  }
}
