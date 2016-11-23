@extends('main-layout')

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
                  <h2>Employee Information</h2>  
                  <div class="widget-toolbar">
                      <a href="edit" class="btn dropdown-toggle btn-xs btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                  </div>       
                </header>
        
                <!-- widget div-->
                <div>     
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
        
                    <form class="smart-form">                      
        
                      <fieldset>                        
                        <div class="row">
                          <section class="col col-2 profile-pic-compensation">
                            <img src="../smart-admin/img/avatars/sunny-big.png">
                          </section>
                          <section class="col col-3 profile-pic-compensation">
                            <h1>John <span class="semi-bold">Doe</span>
                              <br>
                              <small> CEO, SmartAdmin</small></h1>
                              <ul class="list-unstyled">
                                <li>
                                  <p class="text-muted">
                                    <i class="fa fa-phone"></i>&nbsp;&nbsp;(<span class="txt-color-darken">313</span>) <span class="txt-color-darken">464</span> - <span class="txt-color-darken">6473</span>
                                  </p>
                                </li>
                                <li>
                                  <p class="text-muted">
                                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:simmons@smartadmin">ceo@smartadmin.com</a>
                                  </p>
                                </li>
                                <li>
                                  <p class="text-muted">
                                    <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span class="txt-color-darken">08/01/2016</span>
                                  </p>
                                </li>
                                <li>
                                  <p class="text-muted">
                                    <i class="fa fa-bars"></i>&nbsp;&nbsp;<span class="txt-color-darken">Active</span>
                                  </p>
                                </li>
                                
                              </ul>
                          </section>
                          <section class="col col-4"><br/><br/>
                            <h1>Supervisor: John Doe</h1>
                            <h4>Starting Salary: Php 10,000.00</h4>
                           
                          </section>
                          <section class="col col-3">
                            <br/><br/>
                            <ul class="list-unstyled">                                
                                <li>
                                  <p class="text-muted">
                                    TIN: 1234-5678-90
                                  </p>
                                </li>
                                <li>
                                  <p class="text-muted">
                                    SSS: 1234-506-70
                                  </p>
                                </li>
                                <li>
                                  <p class="text-muted">
                                    Pag-Ibig: 1234-506-70
                                  </p>
                                </li>
                                <li>
                                  <p class="text-muted">
                                    Philhealth: 1234-506-70
                                  </p>
                                </li>
                                
                              </ul>
                           
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

              <div class="jarviswidget jarviswidget-color-red" id="wid-id-18" data-widget-colorbutton="false" data-widget-editbutton="false">
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
                  <span class="widget-icon"> <i class="fa fa-money"></i> </span>
                  <h2>Employee Compensation (Current Salary: Php 10,000.00)</h2>           
                  
                </header>
        
                <!-- widget div-->
                <div>
                  
                  <!-- widget edit box -->
                  <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->
                    <input class="form-control" type="text">
                    <span class="note"><i class="fa fa-check text-success"></i> Change title to update and save instantly!</span>
                    
                  </div>
                  <!-- end widget edit box -->
                  
                  <!-- widget content -->
                  <div class="widget-body no-padding">
                    <div class="widget-body-toolbar">
                      
                      <div class="row">
                        
                        <div class="col-xs-9 col-sm-5 col-md-5 col-lg-5">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input class="form-control" id="prepend" placeholder="Filter" type="text">
                          </div>
                        </div>
                        <div class="col-xs-3 col-sm-7 col-md-7 col-lg-7 text-right">
                          
                          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus"></i> <span class="hidden-mobile">Add Compensation</span>
                          </button>
                          
                        </div>
                        
                      </div>
                      
                        
        
                    </div>
                    
                    <div class="custom-scroll table-responsive" style="height:290px; overflow-y: scroll;">
                      
        
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Effective Date</th>
                            <th>Type</th>                            
                            <th>Taxable?</th>
                            <th>Amount</th>                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>08/01/2016 - Present</td>
                            <td>Basic Salary</td>
                            <td>Yes</td>
                            <td>Php 10,000.00/month</td>
                          </tr>
                          <tr>
                            <td>08/01/2016 - Present</td>
                            <td>Transportation Allowance</td>
                            <td>No</td>
                            <td>Php 100.00/day</td>
                          </tr>
                          <tr>
                            <td>08/01/2016 - Present</td>
                            <td>Food Allowance</td>
                            <td>No</td>
                            <td>Php 100.00/day</td>
                          </tr>
                          <tr>
                            <td>08/01/2016 - Present</td>
                            <td>Clothing Allowance</td>
                            <td>No</td>
                            <td>Php 1,000.00/quarter</td>
                          </tr>
                        </tbody>
                      </table>
                    
                    </div>
                    
                    
                  
                  </div>
                  <!-- end widget content -->
                  
                </div>
                <!-- end widget div -->
                
              </div>
        
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