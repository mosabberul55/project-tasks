@extends('master')
@section('content')
  <div class="row text-center">
  <div class="col-md-6 offset-md-3">
    <p class="lead mt-5">Before going to the home page You need to import <span class="span text-danger">stock_market_data.csv</span> into the sql server.</p>
    <div class="card">
      <div class="card-header">
        Import (one time only)
      </div>
      <div class="card-body">
        <form action="{!! route('import.CSV') !!}" enctype="multipart/form-data" method="post">
          @csrf
          <div class="form-group">
            <label for="file">Choose csv form public folder</label>
            <small class="d-block mb-3 text-primary">This may take 40-100 seconds. please don't close. After the import, it will automatically redirect You to the home page.</small>
            <input type="file" name="file" class="form-control">
          </div>
          <input type="submit" name="" value="Submit" class="btn btn-primary">
        </form>
      </div>
    </div>
    <div class="mt-3 pt-2">
      <p class="text-success">If you import once you don't need to import. Just go to the home page directly.</p>
      <a href="{!! route('index') !!}" class="btn btn-success">Home Page</a>
    </div>
  </div>
  </div>
@endsection
