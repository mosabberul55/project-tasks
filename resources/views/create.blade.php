@extends('master')
@section('content')
  <form class="pb-5" action="{!! route('store') !!}" method="post">
    @include('alerts')
    @csrf
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" class="form-control" id="date">
      </div>
      <div class="form-group">
        <label for="trade_code">Trade Code</label>
        <input type="text" name="trade_code" class="form-control" id="trade_code">
      </div>
      <div class="form-group">
        <label for="high">High</label>
        <input type="number" name="high" class="form-control" id="high">
      </div>
      <div class="form-group">
        <label for="low">Low</label>
        <input type="number" name="low" class="form-control" id="low">
      </div>
      <div class="form-group">
        <label for="open">Open</label>
        <input type="number" name="open" class="form-control" id="open">
      </div>
      <div class="form-group">
        <label for="close">Close</label>
        <input type="number" name="close" class="form-control" id="close">
      </div>
      <div class="form-group">
        <label for="volume">Volume</label>
        <input type="text" name="volume" class="form-control" id="volume">
      </div>


  <button type="submit" class="btn btn-primary btn-block w-25 mx-auto">Submit</button>
</form>
@endsection
