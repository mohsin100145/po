@extends('layouts.master')

@section('content')
<div class="container-fluid" style="padding-right: 0px; padding-left: 1px;">
        <div class="row">
     
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center"><code style="font-size: 25px;">Call Counter Dashboard</code></div>

                    <!-- <div class="panel-body" style="background-color: #7ED2FE"> -->
                    <!-- <div class="panel-body" style="background-color: #E3FAFF"> -->
                    <div class="panel-body" style="background-color: #ECF0F5">
                    <!-- <div class="panel-body" style="background-color: rebeccapurple"> -->  
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-12 col-xs-12">
                              <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-phone"></i></span>

                                <div class="info-box-content">
                                  <span class="info-box-text" style="font-size: 18px;">Thana Online</span>
                                  <span class="info-box-number" style="font-size: 39px;">99</span>
                                </div>
                                
                              </div>
                              
                            </div>
                            <!-- /.col -->

                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-phone"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text" style="font-size: 18px;">Thane Offline</span>
                                        <span class="info-box-number" style="font-size: 39px;">66</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <div class="col-md-offset-0 col-md-4 col-sm-12 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-red"><i class="fa fa-clock-o"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text" style="font-size: 18px;">Call Ringing</span>
                                        <span class="info-box-number" style="font-size: 39px;">10</span>
                                    </div>
                                <!-- /.info-box-content -->
                                </div>
                              <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            
                        </div>
                        <!-- /.row -->

                        <!-- =========================================================== -->

                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-aqua" style="background-color: #008080 !important;"><i class="fa fa-tty"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text" style="font-size: 18px;">Thana Incall</span>
                                        <span class="info-box-number" style="font-size: 39px;">77</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-yellow" style="background-color: #008080 !important;"><i class="fa fa-headphones"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text" style="font-size: 18px;">Thana Paused</span>
                                        <span class="info-box-number" style="font-size: 39px;">55</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-yellow" style="background-color: #008080 !important;"><i class="fa fa-users"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text" style="font-size: 16px;">Thana Waiting</span>
                                        <span class="info-box-number" style="font-size: 39px;">44</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            
                            
                        </div>
                        <!-- /.row -->

                        <!-- =========================================================== -->

                        
                       <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-bell-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Extension: 5001 (Dhanmondi Thana)</span>
              <span class="info-box-number">01758214966</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Transfer Calltaker 01
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-hand-o-right"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Extension: 5002 (Banani Thana)</span>
              <span class="info-box-number">01658214555</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Transfer Calltaker 02
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-headphones"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Extension: 5003 (Moheshkhali Thana)</span>
              <span class="info-box-number">01758214222</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Transfer Calltaker 03
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-tty"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Extension: 5004 (Cox's Bazar Thana)</span>
              <span class="info-box-number">01668214977</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Transfer Banani Thana
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->
                        

        <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Extension: 5002 (Banani Thana)</span>
              <span class="info-box-number">01668214977</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Tranfer Call Dispatcher 01
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Extension: 5002 (Banani Thana)</span>
              <span class="info-box-number">01668214977</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Tranfer Call Dispatcher 02
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Extension: 5002 (Banani Thana)</span>
              <span class="info-box-number">01668214977</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Tranfer Call Dispatcher 03
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Extension: 5002 (Banani Thana)</span>
              <span class="info-box-number">01668214977</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Tranfer Call Dispatcher 04
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->               
                        
                        



                       

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
