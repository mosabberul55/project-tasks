@extends('master')
@section('content')
  <form class="" action="{!! route('update', $edit_id) !!}" method="post">
    @include('alerts')
    @csrf
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <div class="form-group">
          <label for="date">date</label>
          <input type="date" name="date" class="form-control" id="date" value="{{ $row['date'] }}">
        </div>
        <label for="trade_code">Trade Code</label>
        <input type="text" name="trade_code" class="form-control" value="{{ $row['trade_code'] }}" id="trade_code">
      </div>
      <div class="form-group">
        <label for="high">High</label>
        <input type="text" name="high" class="form-control" value="{{ $row['high'] }}" id="high">
      </div>
      <div class="form-group">
        <label for="low">Low</label>
        <input type="text" name="low" class="form-control" value="{{ $row['low'] }}" id="low">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="open">Open</label>
        <input type="text" name="open" class="form-control" value="{{ $row['open'] }}" id="open">
      </div>
      <div class="form-group">
        <label for="close">Close</label>
        <input type="text" name="close" class="form-control" value="{{ $row['close'] }}" id="close">
      </div>
      <div class="form-group">
        <label for="volume">Volume</label>
        {{-- <input type="text" name="close[]" class="form-control" value="{!! $row['volume'] !!}" id="close"> --}}
          <textarea name="volume" class="form-control" rows="2" cols="12">{{  $row['volume'] }}</textarea>
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-info btn-block w-25 mx-auto">Update</button>
</form>
@endsection
