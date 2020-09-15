@extends('template.index')
@section('content')
    <!-- Chart's container -->
    <h3>Number of Posts by each user</h3>
    <div id="userchart" style="height: 300px;"></div>
    <h3>Number of Posts by month Wise</h3>
    <div id="monthchart" style="height: 300px;"></div>
    <h3>Number of Posts by Year Wise</h3>
    <div id="yearchart" style="height: 300px;"></div>
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->
    <script>
      const user_post_chart = new Chartisan({
        el: '#userchart',
        url: "@chart('user_chart')",
        hooks: new ChartisanHooks()
              .colors(['#EBC94C'])
              .tooltip(),
      });
      const month_chart = new Chartisan({
        el: '#monthchart',
        url: "@chart('month_wise_chart')",
        hooks: new ChartisanHooks()
              .colors(['#ECB94A'])
              .tooltip(),
      });
      const year_chart = new Chartisan({
        el: '#yearchart',
        url: "@chart('year_wise_chart')",
        hooks: new ChartisanHooks()
              .colors(['#ECC94B'])
              .tooltip(),
      });
    </script>
  @endsection
