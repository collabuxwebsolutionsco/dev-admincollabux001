@extends('main_layout')

@section('content')
  <!-- MAIN PANEL -->
    <div id="main" role="main">

      <!-- RIBBON -->
      <div id="ribbon">
        <div class="row">

        <!-- breadcrumb -->
        <section class="col-sm-6 col-md-6 col-lg-6">
          <ol class="breadcrumb">
            <li>
              {{$breadcrumb}}
            </li>
          </ol>
        </section>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->
         
        <section class="col-sm-6 col-md-6 col-lg-6 header-button">
          <a class="btn btn-primary" href="javascript:void(0);"><b>Archive Selected</b></a> 
        </section>        </div>
         
      </div>
      <!-- END RIBBON -->

      <!-- MAIN CONTENT -->
      <div id="content">
        <section id="" class="">
        <!-- START ROW -->
          <div class="row">
        
            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-12">
                      
              <!-- Widget ID (each widget will need unique ID)-->
              <div class="jarviswidget jarviswidget-color-red" id="wid-id-3" data-widget-editbutton="false">
                <!-- widget options:
                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
        
                data-widget-colorbutton="false"
                data-widget-editbutton="false"
                data-widget-togglebutton="false"
                data-widget-deletebutton="false"
                data-widget-fullscreenbutton="false"
                data-widget-custombutton="false"
                data-widget-collapsed="true"
                data-widget-sortable="false"
        
                -->
                <header class="section-header">                  
                  <span class="widget-icon"> <i class="fa fa-calendar"></i> </span>
                  <h2>Manage Attendance</h2>                  
                  <div class="widget-toolbar">
                    View:
                    <div class="btn-group">
                      <button class="btn dropdown-toggle btn-xs btn-primary" data-toggle="dropdown">
                        Active <i class="fa fa-caret-down"></i>
                      </button>
                      <ul class="dropdown-menu pull-right">
                        <li>
                          <a href="javascript:void(0);">Calendar</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);">List</a>
                        </li>                        
                      </ul>
                    </div>
                  </div>                  
        
                </header>
        
                <!-- widget div-->
                <div>
        
                  <!-- widget edit box -->
                  <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->
        
                  </div>
                  <!-- end widget edit box -->
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
                    <div class="widget-body-toolbar">
        
                    </div>
                    <div id='calendar'></div>
        
                  </div>
                  <!-- end widget content -->
        
                </div>
                <!-- end widget div -->
        
              </div>
              <!-- end widget -->
        
            </article>
            <!-- END COL -->
          </div>
        
          <!-- END ROW -->          
        </section>


      </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
@endsection