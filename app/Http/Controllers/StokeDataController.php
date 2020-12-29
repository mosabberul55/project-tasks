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
}
