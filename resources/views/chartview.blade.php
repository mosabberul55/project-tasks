@extends('master')
@section('content')
  <div>
    <select name="code" id="code" class="form-control" onchange="getNewData()">
      @foreach($trade_code as $code)
        <option value="{{ $code->trade_code }}">{{ $code->trade_code }}</option>
      @endforeach
    </select>

  </div>

  {{-- <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
  </div> --}}


  <div class="py-12">
    <h3>Line Chart</h3>
    <div id="chart" style="height: 300px;"></div>
  </div>
  @push('js')

    <!-- Your application script -->
    <script>
    var tt =  $('#code').val();
      const stokedatachart = new Chartisan({
        el: '#chart',
        url: "@chart('stoke_data_chart')"+"?trade_code="+tt,
        hooks: new ChartisanHooks()
        .colors()
        .datasets([{type: 'line', fill: false, borderColor: 'green'}, 'bar'])
      });

    </script>
    <script>
    function getNewData(){
      $val = $('#code').val();

      const stokedatachart = new Chartisan({
        el: '#chart',
        url: "@chart('stoke_data_chart')"+"?trade_code="+$val,
        hooks: new ChartisanHooks()
        .colors()
        .datasets([{type: 'line', fill: false, borderColor: 'green'}, 'bar'])
      });
    }
    </script>
  @endpush
@endsection
