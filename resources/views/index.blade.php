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
          <a href="{!! route('edit', $Stock_data->id) !!}" class="btn btn-warning">Edit</a>
          <a href="#deleteModal{{ $Stock_data->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection

<!-- Delete Modal -->
<div class="modal" id="deleteModal{{ $Stock_data->id }}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Are You sure to delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{!! route('delete', $Stock_data->id) !!}"  method="post">
          @csrf
          <button type="submit" class="btn btn-danger text-light">Permanent Delete</button>
        </form>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
