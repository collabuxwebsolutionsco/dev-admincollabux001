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
             {!!$breadcrumb!!}
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
          <a class="btn btn-primary" href="javascript:void(0);"><b>Save Changes</b></a>  
        </section>
        </div>
         
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
                  <h2>Project Information</h2>  
                  <div class="widget-toolbar">
                      <a href="/workload/projects" class="btn dropdown-toggle btn-xs btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                  </div>       
                </header>
        
                <!-- widget div-->
                <div>     
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
        
                    <form class="smart-form">                      
        
                      <fieldset>                        
                        <div class="row">                          
                          <section class="col col-3 profile-pic-compensation">
                            <h1><span class="semi-bold">Project Title</span>
                              <br>
                              <small> Project Leader</small></h1>  
                              11/21/2016                            
                          </section>
                          <section class="col col-9">
                            Project Description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

              <!-- Widget ID (each widget will need unique ID)-->
              <div class="jarviswidget jarviswidget-color-red" id="wid-id-2" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">                
                <header>                  
                  <span class="widget-icon"> <i class="fa fa-user"></i> </span>
                  <h2>Ticket Information</h2>  
                  <div class="widget-toolbar">
                      <a href="/workload/tickets" class="btn dropdown-toggle btn-xs btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                  </div>       
                </header>
        
                <!-- widget div-->
                <div>     
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
        
                    <form class="smart-form">                      
        
                      <fieldset>                        
                        <div class="row">                          
                          <section class="col col-3 profile-pic-compensation">
                            <h1><span class="semi-bold">Ticket Title</span>
                              <br>
                              <small> Assigned To</small></h1>  
                              11/21/2016                            
                          </section>
                          <section class="col col-9">
                            Ticket Description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

              <!-- Widget ID (each widget will need unique ID)-->
              <div class="jarviswidget jarviswidget-color-red" id="wid-id-2" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">                
                <header>                  
                  <span class="widget-icon"> <i class="fa fa-user"></i> </span>
                  <h2>Conversation</h2>                         
                </header>
        
                <!-- widget div-->
                <div>     
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
        
                    <!-- row -->
        <div class="row">

          <div class="col-sm-12">

            <div class="well">

              <table class="table table-striped table-forum">                
                <tbody>
                  <!-- Post -->
                  <tr>
                    <td class="text-center"><a href="javascript:void(0);"><strong>John Doe</strong></a></td>
                    <td>on <em>Jan 1, 2014 - 12:00am</em></td>
                  </tr>
                  <tr>
                    <td class="text-center" style="width: 12%;">
                    <div class="push-bit">
                      <a href="profile.html"> <img src="/smart-admin/img/avatars/sunny.png" width="50" alt="avatar" class="online"> </a>
                    </div></td>
                    <td>
                    <p>

                      Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                    </p><h5>Forecast Pie</h5><span class="sparkline display-inline margin-bottom-10" data-sparkline-type="pie" data-sparkline-offset="90" data-sparkline-piesize="150px"> 33,20,10 </span>
                    <p>
                      Fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viv.
                    </p><em>- John Doe
                    <br>
                    CEO, SmartAdmin</em></td>
                  </tr>
                  <!-- end Post -->

                  <!-- Post -->
                  <tr>
                    <td class="text-center"><a href="javascript:void(0);"><strong>Sadi Orlaf</strong></a></td>
                    <td>on <em>Jan 1, 2014 - 12:00am</em></td>
                  </tr>
                  <tr>
                    <td class="text-center" style="width: 12%;">
                    <div class="push-bit">
                      <a href="profile.html"> <img src="/smart-admin/img/avatars/5.png" width="50" alt="avatar" class="offline"> </a>
                    </div><small>473 Posts</small></td>
                    <td>
                    <p>

                      Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                    </p><em>- Sadi Orlaf
                    <br>
                    Executive, SmartAdmin</em>
                    <div class="forum-attachment">
                      2 attachment(s) — <a href="javascript:void(0);"> Download all attachments</a>
                      <ul class="list-inline margin-top-10">
                        <li class="well well-sm padding-5">
                          <strong>rocketlaunch.jpg</strong>
                          <br>
                          400 kb
                          <br>
                          <a href="javascript:void(0);"> Download</a> | <a href="javascript:void(0);"> View</a>
                        </li>
                        <li class="well well-sm padding-5">
                          <strong>budget.xsl</strong>
                          <br>
                          400 kb
                          <br>
                          <a href="javascript:void(0);"> Download</a> | <a href="javascript:void(0);"> Share</a>
                        </li>
                      </ul>
                    </div></td>
                  </tr>
                  <!-- end Post -->

                  <!-- Post -->
                  <tr>
                    <td class="text-center"><a href="javascript:void(0);"><strong>Me</strong></a></td>
                    <td><em>Today</em></td>
                  </tr>
                  <tr>
                    <td class="text-center" style="width: 12%;">
                    <div class="push-bit">
                      <a href="profile.html"> <img src="/smart-admin/img/avatars/sunny.png" width="50" alt="avatar" class="online"> </a>
                    </div></td>
                    <td><div id="ticketConversation"></div>
                      
                    <button class="btn btn-primary margin-top-10">
                      Post
                    </button>
                    </td>
                  </tr>
                  <!-- end Post -->

                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- end row -->
        
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
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">New Compensation</h4>
              </div>
              <div class="modal-body smart-form">

                <div class="row">
                  <section class="col col-4">
                      <label class="label">Effectivity Date:</label>
                      <label class="input"> <i class="icon-append fa fa-calendar"></i>
                        <input type="text" name="start_date" placeholder="Start Date" class="datepicker" data-dateformat='mm/dd/yy'>
                      </label>
                    </section> 
                  <section class="col col-4">
                      <label class="label">&nbsp;</label>
                      <label class="input"> <i class="icon-append fa fa-calendar"></i>
                        <input type="text" name="end_date" placeholder="End Date" class="datepicker" data-dateformat='mm/dd/yy'>
                      </label>
                    </section> 
                  <section class="col col-4">
                    <label class="label">Type:</label>
                    <label class="select"> 
                      <select name="compensation_type">
                        <option value="" disabled selected>Select Type</option>
                        <option value="1">Basic Salary</option>
                        <option value="2">Transportation Allowance</option>
                        <option value="3">Clothing Allowance</option>
                      </select>
                      <i></i>
                    </label>
                  </section>
                </div>
                <div class="row">
                  <section class="col col-4">
                      <label class="label">Taxable?</label>
                      <label class="select"> 
                        <select name="taxable">
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>                         
                        </select>
                        <i></i>
                      </label>
                    </section> 
                  <section class="col col-4">
                      <label class="label">Amount:</label>
                      <label class="input"> 
                        <input type="text" name="amount" placeholder="Amount">
                        <i></i>
                      </label>
                    </section> 
                  <section class="col col-4">
                    <label class="label">Duration</label>
                    <label class="select"> 
                      <select name="compensation_type">
                        <option value="" disabled selected>Select Duration</option>
                        <option value="1">Daily</option>
                        <option value="2">Monthly</option>
                        <option value="3">Quarterly</option>
                        <option value="4">Yearly</option>                        
                      </select>
                      <i></i>
                    </label>
                  </section>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
                <button type="button" class="btn btn-primary">
                  Save
                </button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

      </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->

@endsection