@extends('main-layout')

@section('content')
  <!-- MAIN PANEL -->
    <div id="main" role="main">

      <!-- RIBBON -->
      <div id="ribbon">        

        <!-- breadcrumb -->
        <ol class="breadcrumb">
          <li>
            {{$breadcrumb}}
          </li>
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->

      </div>
      <!-- END RIBBON -->

      <!-- MAIN CONTENT -->
      <div id="content">
<div class="main-container fadeIn animated" style="margin-bottom: 105px !important; margin-top: 104px !important;">

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
              <div class="visual">
                  <i class="fa fa-users"></i>
                  <i class="fa fa-user" style="margin-left:70px !important;margin-top:-100px; position:absolute;"></i>
              </div>
              <div class="details">
                  <div class="number">
                      <span><b>Employees</b></span>
                  </div><br/>
                  <div class="desc"> Last Added Employee: test </div>
                  <div class="desc"> Number of Employees: 11 </div>
              </div>
              <br/>
          </a>          
        </div>
        <div class="col-md-6">
          <a class="dashboard-stat dashboard-stat-v2 red" href="#">
              <div class="visual">
                  <i class="fa fa-clock-o"></i>
                  <i class="fa fa-clock-o" style="margin-left:48px !important;margin-top:-110px;"></i>
                  <i class="fa fa-clock-o" style="margin-left:80px !important;margin-top:-200px; position:absolute;"></i>
              </div>
              <div class="details">
                  <div class="number">
                      <span><b>Attendance</b></span></div><br/>
                  <div class="desc"> Last Attendance Record: 05/12/2016 </div>
                  <div class="desc"> Added by: admin </div>
              </div>
          </a>
        </div>

      </div> <!-- /.row -->

      <div class="row">
        <div class="col-md-6"><br/><br/>
          <a class="dashboard-stat dashboard-stat-v2 green" href="#">
              <div class="visual">
                  <i class="fa fa-file-text"></i>
                  <i class="fa fa-file-text" style="margin-left:65px !important;margin-top:-210px;"></i>
                  <i class="fa fa-file-text" style="margin-left:100px !important;margin-top:-209px; font-size:80px; position:absolute;"></i>
              </div>
              <div class="details">
                  <div class="number">
                      <span><b>Payslips</b></span>
                  </div><br/>
                  <div class="desc"> Last Generated: 05/13/2016 </div>
                  <div class="desc"> Number of Payslip: 11 </div>
              </div>
          </a>         
        </div>
        <div class="col-md-6"><br/><br/>
          <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
              <div class="visual">
                  <i class="fa fa-cogs"></i>
                  <i class="fa fa-cog" style="margin-left:80px !important;margin-top:-129px; font-size:80px; position:absolute;"></i>
                  <i class="fa fa-cog" style="margin-left:80px !important;margin-top:-55px; font-size:80px; position:absolute;"></i>
              </div>
              <div class="details">
                  <div class="number">
                      <span><b>Settings</b></span></div><br/>
                  <div class="desc"> Last update: 05/12/2016 </div>
                  <div class="desc"> Number of Admin User: 2 </div>
              </div>
          </a>
        </div>

      </div> <!-- /.row -->


    </div>
    


  </div>


      </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
  
@endsection