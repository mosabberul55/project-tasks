@extends('master')
@section('content')
  <div class="form-group">
    <select name="code" id="code" class="form-control" onchange="getNewData()">
      @foreach($trade_code as $code)
        <option value="{{ $code->trade_code }}">{{ $code->trade_code }}</option>
      @endforeach
    </select>
  </div>
  <div class="py-12 mt-2">
    <div id="chart" style="height: 300px;"></div>
  </div>
  @push('js')

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
