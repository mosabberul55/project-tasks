@extends('master')
@section('content')
  <div class="py-12">
    <h3>Line Chart</h3>
    <div id="chart" style="height: 300px;"></div>
  </div>
  @push('js')

    <!-- Your application script -->
    <script>
      const stokedatachart = new Chartisan({
        el: '#chart',
        url: "@chart('stoke_data_chart')",
        hooks: new ChartisanHooks()
        .colors()
        .datasets([{type: 'line', fill: false, borderColor: 'green'}, 'bar'])
      });
    </script>
  @endpush
@endsection