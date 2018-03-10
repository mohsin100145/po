@extends('layouts.master')

@section('content')
	<div class="container-fluid">
	    <div class="row">
	 
	        <div class="col-md-12 col-sm-12 col-xs-12">
	            <div class="panel panel-primary">
	                <div class="panel-heading text-center"><code style="font-size: 25px;">Call Summary Dashboard</code></div>

	                <!-- <div class="panel-body" style="background-color: #7ED2FE"> -->
	                <!-- <div class="panel-body" style="background-color: #E3FAFF"> -->
	                <div class="panel-body" style="background-color: #ECF0F5">
	                <!-- <div class="panel-body" style="background-color: rebeccapurple"> -->  
	                    

	                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="fa fa-bell-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text" style="font-size: 18px;">Inbound Calls (Today)</span>
                                    <span class="info-box-number" style="font-size: 39px;">188</span>

                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="fa fa-headphones"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text" style="font-size: 18px;">Inbound Asweres Calls (Today)</span>
                                    <span class="info-box-number" style="font-size: 39px;">177</span>
                                </div>
                            <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="fa fa-pause"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text" style="font-size: 18px;">Inbound Calls (Last Hour)</span>
                                    <span class="info-box-number" style="font-size: 39px;">51</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="fa fa-pause"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text" style="font-size: 15px;">Inbound Answered Calls (Last Hour)</span>
                                    <span class="info-box-number" style="font-size: 39px;">49</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


	   					<div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="circle-tile ">
                                <div class="circle-tile-heading green"><i class="fa fa-users fa-fw fa-3x"></i></div>
                                <div class="circle-tile-content green" style="padding-top: 40px;">
                                    <div class="circle-tile-number text-faded" id="new_total" style="font-size: 32px;">96%</div>
                                    <div class="circle-tile-description text-faded"> <h4 style="margin-top: 0; margin-bottom: 0;"> Inbound SL (%) </h4> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="circle-tile ">
                                <div class="circle-tile-heading blue"><i class="fa fa-calendar fa-fw fa-3x"></i></div>
                                <div class="circle-tile-content blue" style="padding-top: 40px;">
                                    <div class="circle-tile-number text-faded" id=""  style="font-size: 32px;">87%</div>
                                    <div class="circle-tile-description text-faded"> <h4 style="margin-top: 0; margin-bottom: 0;"> Inbound AHT (%) </h4></div> 
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="circle-tile ">
                                <div class="circle-tile-heading dark-blue"><i class="fa fa-calendar fa-fw fa-3x"></i></div>
                                <div class="circle-tile-content dark-blue" style="padding-top: 40px;">
                                    <div class="circle-tile-number text-faded" id=""  style="font-size: 32px;">3%</div>
                                    <div class="circle-tile-description text-faded"> <h4 style="margin-top: 0; margin-bottom: 0;"> Inbound Drop (%) </h4></div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="circle-tile ">
                                <div class="circle-tile-heading purple"><i class="fa fa-calendar fa-fw fa-3x"></i></div>
                                <div class="circle-tile-content purple" style="padding-top: 40px;">
                                    <div class="circle-tile-number text-faded" id="answered_total"  style="font-size: 32px;">84%</div>
                                    <div class="circle-tile-description text-faded"> <h4 style="margin-top: 0; margin-bottom: 0;"> Inbound CAR (%) </h4></div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->    
	                     <!-- =========================================================== -->

	                     <div class="row">
	                        <div class="col-md-3 col-sm-12 col-xs-12">
	                            <div class="info-box bg-red">
	                                <span class="info-box-icon"><i class="glyphicon glyphicon-export"></i></span>
	                                <div class="info-box-content">
	                                    <span class="info-box-text" style="font-size: 18px;">Outbound Calls (Today)</span>
	                                    <span class="info-box-number" style="font-size: 39px;">144</span>
	                                </div>
	                                <!-- /.info-box-content -->
	                            </div>
	                            <!-- /.info-box -->
	                        </div>
	                        <!-- /.col -->
	                        <div class="col-md-3 col-sm-12 col-xs-12">
	                            <div class="info-box bg-red">
	                                <span class="info-box-icon"><i class="glyphicon glyphicon-saved"></i></span>
	                                <div class="info-box-content">
	                                    <span class="info-box-text" style="font-size: 15px;">Outbound Answered Calls (Today)</span>
	                                    <span class="info-box-number" style="font-size: 39px;">142</span>
	                                </div>
	                                <!-- /.info-box-content -->
	                            </div>
	                            <!-- /.info-box -->
	                        </div>
	                        <!-- /.col -->   
	                        <div class="col-md-3 col-sm-12 col-xs-12">
	                            <div class="info-box bg-red">
	                                <span class="info-box-icon"><i class="glyphicon glyphicon-download-alt"></i></span>
	                                <div class="info-box-content">
	                                    <span class="info-box-text" style="font-size: 18px;">Outbound Calls (Last Hour)</span>
	                                    <span class="info-box-number" style="font-size: 39px;">27</span>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.col -->
	                        <div class="col-md-3 col-sm-12 col-xs-12">
	                            <div class="info-box bg-red">
	                                <span class="info-box-icon"><i class="glyphicon glyphicon-download-alt"></i></span>
	                                <div class="info-box-content">
	                                    <span class="info-box-text" style="font-size: 15px;">Outbound Answered Calls (Last Hour)</span>
	                                    <span class="info-box-number" style="font-size: 39px;">26</span>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.col -->
	                    </div>
	                    <!-- /.row -->

	                    <!-- =========================================================== -->
	                   

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="small-box bg-aqua" style="background-color: #008080 !important;">
                                <div class="inner">
                                    <h3>98%</h3>
                                    <p><b>Outbound SL (%)</b></p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-files-o"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="small-box bg-aqua" style="background-color: #008080 !important;">
                                <div class="inner">
                                    <h3>89%</h3>
                                    <p><b>Outbound AHT (%)</b></p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-clipboard"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="small-box bg-aqua" style="background-color: #008080 !important;">
                                <div class="inner">
                                    <h3>2.3%</h3>
                                    <p><b>Outbound Drop (%)</b></p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="small-box bg-aqua" style="background-color: #008080 !important;">
                                <div class="inner">
                                    <h3>82%</h3>
                                    <p><b>Outbound CAR (%)</b></p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-anchor"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->

                    <!-- =========================================================== -->
          
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection