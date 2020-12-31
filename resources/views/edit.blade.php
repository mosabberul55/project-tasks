@extends('master')
@section('content')
  <form class="pb-5" action="{!! route('update', $stock_data->id) !!}" method="post">
    @include('alerts')
    @csrf
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" class="form-control" id="date" value="{{ $stock_data->date }}">
      </div>
      <div class="form-group">
        <label for="trade_code">Trade Code</label>
        <input type="text" name="trade_code" class="form-control" id="trade_code" value="{{ $stock_data->trade_code }}">
      </div>
      <div class="form-group">
        <label for="high">High</label>
        <input type="text" name="high" class="form-control" id="high" value="{{ $stock_data->high }}">
      </div>
      <div class="form-group">
        <label for="low">Low</label>
        <input type="text" name="low" class="form-control" id="low" value="{{ $stock_data->low }}">
      </div>
      <div class="form-group">
        <label for="open">Open</label>
        <input type="text" name="open" class="form-control" id="open" value="{{ $stock_data->open }}">
      </div>
      <div class="form-group">
        <label for="close">Close</label>
        <input type="text" name="close" class="form-control" id="close" value="{{ $stock_data->close }}">
      </div>
      <div class="form-group">
        <label for="volume">Volume</label>
        <input type="text" name="volume" class="form-control" id="volume" value="{{ $stock_data->volume }}">
      </div>


  <button type="submit" class="btn btn-primary btn-block w-25 mx-auto">Update</button>
</form>
@endsection
