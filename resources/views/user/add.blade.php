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
        
        </div>
         
      </div>
      <!-- END RIBBON -->

      <!-- MAIN CONTENT -->
      <div id="content">
        <section id="" class="">
        <!-- START ROW -->
          <div class="row">
            <article class="col-sm-2 col-md-2 col-lg-2">&nbsp;</article>
            <!-- NEW COL START -->
            <article class="col-sm-8 col-md-8 col-lg-8">
        
              <!-- Widget ID (each widget will need unique ID)-->
              <div class="jarviswidget jarviswidget-color-red" id="wid-id-0" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
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
                <header>                  
                  <span class="widget-icon"> <i class="fa fa-user"></i> </span>
                  <h2>User</h2>
        
                </header>
        
                <!-- widget div-->
                <div>     
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
        
                    <form class="smart-form">                      
        
                      <fieldset>                        
                        <div class="row">
                          <section class="col col-6">
                            <label class="label">Employee</label>
                            <label class="input">
                              <input type="text" name="employeeNum" placeholder="Employee Number">
                            </label>
                          </section>
                          <section class="col col-6">
                            <label class="label">Username</label>
                            <label class="input">
                              <input type="text" name="username" placeholder="Username">
                            </label>
                          </section>
                        </div>
                        <div class="row">
                          <section class="col col-6">
                            <label class="label">Password</label>
                            <label class="input">
                              <input type="text" name="password" placeholder="Password">
                            </label>
                          </section>
                          <section class="col col-6">
                            <label class="label">Confirm Password</label>
                            <label class="input">
                              <input type="text" name="confromPassword" placeholder="Re-type Password">
                            </label>
                          </section>
                        </div>
                        <div class="row">
                          <section class="col col-6">
                            <label class="label">Role</label>
                            <label class="select">
                              <select>
                                <option></option>
                                <option>Admin</option>
                                <option>HR</option>
                                <option>Employee</option>
                                <option>Supervisor</option>
                              </select><i></i>
                            </label>
                          </section>
                          <section class="col col-6">                            
                          </section>
                        </div> 
                        <div class="row">
                          <section class="col col-9">                            
                          </section>
                          <section class="col col-3">
                            <center><a class="btn btn-primary" href="javascript:void(0);"><b>{{$saveButtonText}}</b></a></center>
                          </section>
                        </div>                                                
                      </fieldset>
                    </form>
        
                  </div>
                  <!-- end widget content -->
        
                </div>
                <!-- end widget div -->
        
              </div>
              <!-- end widget -->
        
            </article>
            <!-- END COL -->
            <article class="col-sm-2 col-md-2 col-lg-2">&nbsp;</article>
          </div>
        
          <!-- END ROW -->          
        </section>


      </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
@endsection