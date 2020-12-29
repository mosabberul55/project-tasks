@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
          <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
          </button>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('success'))
  <div class="alert alert-success mt-2">
    <button type="button" class="close" data-dismiss="alert">
      <span>&times;</span>
    </button>
    <p>{{ Session::get('success') }}</p>
  </div>
@endif
@if (Session::has('error'))
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">
      <span>&times;</span>
    </button>
    <p>{{ Session::get('error') }}</p>
  </div>
@endif
