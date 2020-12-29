@extends('master')
@section('content')
  <div class="text-center">
    <a href="{!! route('create') !!}" class="btn btn-success">Create New Record</a>
  </div>
  @include('alerts')

  <table class="table table-bordered table-hover mt-3">
        <thead class="table-dark">
          <tr>
            <th>Sl</th>
            <th>Date</th>
            <th>Trade Code</th>
            <th>High</th>
            <th>Low</th>
            <th>Open</th>
            <th>Close</th>
            <th>Volume</th>
            <th>Action</th>
          </tr>
        </thead>

        @foreach ($content as $key=>$cont)

            <tr>
              <td>{{ $key }}</td>
              <td>{{ $cont['date'] }}</td>
              <td>{{ $cont['trade_code'] }}</td>
              <td>{{ $cont['high'] }}</td>
              <td>{{ $cont['low'] }}</td>
              <td>{{ $cont['open'] }}</td>
              <td>{{ $cont['close'] }}</td>
              <td>{{ $cont['volume'] }}</td>
              <td>
                <a href="{!! route('edit', $key) !!}" class="btn btn-warning">Edit</a>
                <form class="form-inline" action="{!! route('delete', $key) !!}" method="post">
                    @csrf
                    <input type="submit" name="" class="btn btn-danger" value="delete">
                </form>
              </td>
            </tr>
        @endforeach
      </table>
@endsection
