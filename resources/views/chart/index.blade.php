@extends('layouts.master')

@section('content')
<!-- <div class="container-fluid" style="padding-right: 0px; padding-left: 1px;"> -->
<div class="container-fluid">
    
            <!-- Main content -->
    <section class="content">



      <div class="row">
        <div class="col-md-12">
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pie Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">

              <center><div id="piechart" class="pull-middle" style="width: 900px; height: 500px;"></div></center>

            </div>
            
          </div>
          

          

        </div>
        </div>


        <!-- <div class="row">
        
          <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              


    		<center><div id="barchart_material" style="width: 900px; height: 1000px;"></div></center>
            </div>
           
          </div>
          </div>
          </div> -->
         










          <div class="row">
          
          <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar columnchart_material Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              
            	

    			<div id="columnchart_material" style="width: 1300px; height: 500px;"></div>


            </div>
            
          </div>
          </div>
          

        
        
      </div>



















          <div class="row">
          
          <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar1111 Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              
            	
    


    		<div id="top_x_div" style="width: 900px; height: 300px;"></div>


            </div>
           
          </div>
          </div>
          

        
       
      </div>
     









      <!-- <div class="row">
          
          <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              
            	

    			<div id="top_x_div" style="width: 800px; height: 600px;"></div>


            </div>
            
          </div>
          </div>
          

        
        
      </div> -->
      

    </section>
        
</div>
@endsection

@section('style')
	
@endsection

@section('script')
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



            
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['999', 'Call Disposition'],
          ['Thana Call',     90],
          ['Fire Service Call',      60],
          ['Ambulance Call',  50]
        ]);

        var options = {
          title: 'Call Disposition'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


    <script type="text/javascript">
      // google.charts.load('current', {'packages':['bar']});
      // google.charts.setOnLoadCallback(drawChart);

      // function drawChart() {
      //   var data = google.visualization.arrayToDataTable([
      //     ['Month', 'Thana Call', 'Fire Service Call', 'Ambulance Call'],
      //     ['January', 100, 40, 20],
      //     ['February', 117, 46, 25],
      //     ['March', 66, 112, 30],
      //     ['April', 103, 54, 35],
      //     ['May', 117, 46, 25],
      //     ['June', 66, 112, 30],
      //     ['July', 103, 54, 35],
      //     ['August', 117, 46, 25],
      //     ['September', 66, 112, 30],
      //     ['October', 103, 54, 35],
      //     ['November', 117, 46, 25],
      //     ['December', 66, 112, 30]
      //   ]);

      //   var options = {
      //     chart: {
      //       title: 'Month wise call summary',
      //       subtitle: 'Month wise call summary of this year',
      //     },
      //     bars: 'horizontal' // Required for Material Bar Charts.
      //   };

      //   var chart = new google.charts.Bar(document.getElementById('barchart_material'));

      //   chart.draw(data, google.charts.Bar.convertOptions(options));
      // }
    </script>





    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Thana Call', 'Fire Service Call', 'Ambulance Call'],
          ['January', 100, 40, 20],
          ['February', 117, 46, 25],
          ['March', 66, 112, 30],
          ['April', 103, 54, 35],
          ['May', 100, 40, 20],
          ['June', 117, 46, 25],
          ['July', 66, 112, 30],
          ['August', 103, 54, 35],
          ['September', 100, 40, 20],
          ['October', 117, 46, 25],
          ['November', 66, 112, 30],
          ['December', 103, 54, 35]
        ]);

        var options = {
          chart: {
            title: 'Call monthly',
            subtitle: 'Call monthly this year',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>






    <script type="text/javascript">

    	//SAME ID: top_x_div

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Call', 'Percentage'],
          ["Thana Call", 44],
          ["Fire Service Call", 31],
          ["Ambulance Call", 12]
        ]);

        var options = {
          title: 'Chess opening moves mohsin',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          bars: 'horizontal', 
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} 
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));    //SAME ID: top_x_div
        chart.draw(data, options);
      };
    </script>

    <script type="text/javascript">

    //SAME ID: top_x_div

      // google.charts.load('current', {'packages':['bar']});
      // google.charts.setOnLoadCallback(drawStuff);

      // function drawStuff() {
      //   var data = new google.visualization.arrayToDataTable([
      //     ['Call', 'Percentage'],
      //     ["Thana Call", 44],
      //     ["Fire Service Call", 31],
      //     ["Ambulance Call", 12]
      //   ]);

      //   var options = {
      //     width: 800,
      //     legend: { position: 'none' },
      //     chart: {
      //       title: 'Call Vertical bar',
      //       subtitle: 'Call Vertical bar description' },
      //     axes: {
      //       x: {
      //         0: { side: 'top', label: 'Something Something'} // Top x-axis.
      //       }
      //     },
      //     bar: { groupWidth: "90%" }
      //   };

      //   var chart = new google.charts.Bar(document.getElementById('top_x_div'));    //SAME ID: top_x_div
      //   // Convert the Classic options to Material options.
      //   chart.draw(data, google.charts.Bar.convertOptions(options));
      // };
    </script>

@endsection
