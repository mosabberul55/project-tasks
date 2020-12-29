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
    @php $i = 0;  @endphp
    @foreach ($data as $Stock_data)
      @php $i++; @endphp
      <tr>
        <td>{{ $i }}</td>
        <td>{{ $Stock_data->date }}</td>
        <td>{{ $Stock_data->trade_code }}</td>
        <td>{{ $Stock_data->high }}</td>
        <td>{{ $Stock_data->low }}</td>
        <td>{{ $Stock_data->open }}</td>
        <td>{{ $Stock_data->close }}</td>
        <td>{{ $Stock_data->volume }}</td>
        <td>
          <a href="{!! route('edit', $Stock_data->id) !!}" class="btn btn-warning d-inline-block mr-2">Edit</a>
          <form class="form-inline  d-inline-block" action="{{ route('delete', $Stock_data->id) }}" method="post">
            @csrf
            <input type="button" class="btn btn-danger" name="" value="Delete"  data-toggle="modal" data-target="#modal1">
            <div id="modal1" class="modal">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      Are you Sure Want to delete this?
      <button type="button" class="close" data-dismiss="modal" name="button">&times;</button>
    </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-warning" name="" value="Delete">
        <button type="button" class="btn btn-danger" name="button" data-dismiss="modal">Close</button>
      </div>


  </div>
</div>
</div>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
