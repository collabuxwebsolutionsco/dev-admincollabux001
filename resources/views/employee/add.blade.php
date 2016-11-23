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
          <a class="btn btn-primary" href="javascript:void(0);"><b>{{$saveButtonText}}</b></a>  
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
                  <h2>Personal Information</h2>
        
                </header>
        
                <!-- widget div-->
                <div>     
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
        
                    <form class="smart-form">                      
        
                      <fieldset>                        
                        <div class="row">
                          <section class="col col-4">
                            <label class="label">Full Name</label>
                            <label class="input">
                              <input type="text" name="fname" placeholder="First Name">
                            </label>
                          </section>
                          <section class="col col-4">
                            <label class="label">&nbsp;</label>
                            <label class="input">
                              <input type="text" name="mname" placeholder="Middle Name">
                            </label>
                          </section>
                          <section class="col col-4">
                            <label class="label">&nbsp;</label>
                            <label class="input">
                              <input type="text" name="lname" placeholder="Last Name">
                            </label>
                          </section>
                        </div>
                        <section>
                          <label class="label">Present Address</label>
                          <label class="input">
                            <input type="text" name="present_address" placeholder="Present Address">
                          </label>
                        </section>                        
                        <section>
                          <label class="label">Permanent Address &nbsp;&nbsp;<span class="permanent-address"><input type="checkbox"/> Same with Present Address</span></label>
                          <label class="input">
                            <input type="text" name="permanent_address" placeholder="Permanent Address">
                          </label>
                        </section> 
                        <div class="row">
                          <section class="col col-4">
                            <label class="label">Gender</label>
                            <label class="select">
                              <select name="gender" placeholder="Gender">
                                <option value="" disabled selected>Gender</option>                                
                                @foreach (Config::get('constants.GENDER') as $gender)
                                <option value="{{$gender}}">{{$gender}}</option>                                
                                @endforeach
                              </select>
                              <i></i>
                              <!-- <input type="text" name="fname" placeholder="First Name"> -->
                            </label>
                          </section>
                          <section class="col col-4">
                            <label class="label">Birthday</label>
                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                              <input type="text" name="birthday" placeholder="Birthday" class="datepicker" data-dateformat='mm/dd/yy'>
                            </label>
                          </section> 
                          <section class="col col-4">
                            <label class="label">Email</label>
                            <label class="input">
                              <input type="email" name="email" placeholder="E-mail">
                            </label>
                          </section>                         
                        </div>  
                        <div class="row">
                          <section class="col col-4">                            
                            <label class="label">Work Phone #</label>
                            <label class="input">
                              <input type="tel" name="work_phone" placeholder="Work Phone #" data-mask="(999) 999-9999" class="valid">
                            </label>
                          </section>
                          <section class="col col-4">                            
                            <label class="label">Home Phone #</label>
                            <label class="input">
                              <input type="tel" name="home_phone" placeholder="Home Phone #" data-mask="(999) 999-9999" class="valid">
                            </label>
                          </section>
                          <section class="col col-4">                            
                            <label class="label">Mobile Phone #</label>
                            <label class="input">
                              <input type="tel" name="mobile_phone" placeholder="Mobile Phone #" data-mask="(+63) 999-999-9999" class="valid">
                            </label>
                          </section>
                        </div>  
                        <div class="row">
                          <section class="col col-4">
                            <label class="label">Religion</label>
                            <label class="input">
                              <input type="text" name="religion" placeholder="Religion">
                            </label>
                          </section>
                          <section class="col col-4">
                            <label class="label">Citizenship</label>
                            <label class="input">
                              <input type="text" name="citizenship" placeholder="Citizenship">
                            </label>
                          </section>
                          <section class="col col-4">
                            <label class="label">Civil Status</label>
                            <label class="input">
                              <input type="text" name="civil_status" placeholder="Civil Status">
                            </label>
                          </section>
                        </div>      
                        <section class="">
                            <label class="label"><br/>Emergency Contacts</label>                            
                        </section>                 
                        <div class="row">
                          <section class="col col-4">
                            <label class="label">Name</label>
                            <label class="input">
                              <input type="text" name="emergency_name1" placeholder="Emergency Contact Name 1">
                            </label>
                          </section>
                          <section class="col col-4">
                            <label class="label">Relationship</label>
                            <label class="input">
                              <input type="text" name="emergency_rel1" placeholder="Emergency Relationship 1">
                            </label>
                          </section>
                          <section class="col col-4">
                            <label class="label">Contact #</label>
                            <label class="input">
                              <input type="text" name="emergency_contact1" placeholder="Emergency Contact # 1">
                            </label>
                          </section>
                        </div>  
                        <div class="row">
                          <section class="col col-4">                            
                            <label class="input">
                              <input type="text" name="emergency_name2" placeholder="Emergency Contact Name 2">
                            </label>
                          </section>
                          <section class="col col-4">                            
                            <label class="input">
                              <input type="text" name="emergency_rel2" placeholder="Emergency Relationship 2">
                            </label>
                          </section>
                          <section class="col col-4">                            
                            <label class="input">
                              <input type="text" name="emergency_contact2" placeholder="Emergency Contact # 2">
                            </label>
                          </section>
                        </div>  
                        <div class="row">
                          <section class="col col-4">                            
                            <label class="input">
                              <input type="text" name="emergency_name3" placeholder="Emergency Contact Name 3">
                            </label>
                          </section>
                          <section class="col col-4">                            
                            <label class="input">
                              <input type="text" name="emergency_rel3" placeholder="Emergency Relationship 3">
                            </label>
                          </section>
                          <section class="col col-4">                            
                            <label class="input">
                              <input type="text" name="emergency_contact3" placeholder="Emergency Contact # 3">
                            </label>
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
            <!-- NEW COL START -->
            <article class="col-sm-4 col-md-4 col-lg-4">
        
              <!-- Widget ID (each widget will need unique ID)-->
              <div class="jarviswidget jarviswidget-color-red" id="wid-id-1" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
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
                  <span class="widget-icon"> <i class="fa fa-newspaper-o"></i> </span>
                  <h2>Admin Information</h2>
        
                </header>
        
                <!-- widget div-->
                <div class="admin-information">     
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
        
                    <form class="smart-form">                      
        
                      <fieldset>                        
                          <section class="">
                            <label class="label">Employee #</label>
                            <label class="input">
                              <input type="text" name="employeeNum" placeholder="Employee Number">
                            </label>
                          </section>
                          <section class="">
                            <label class="label">Position</label>
                            <label class="input">
                              <input type="text" name="Position" placeholder="Position">
                            </label>
                          </section>
                          <section class="">
                            <label class="label">Supervisor</label>
                            <label class="input">
                              <input type="text" name="Supervisor" placeholder="Supervisor">
                            </label>
                          </section>
                          <section class="">
                            <label class="label">Start Date</label>
                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                              <input type="text" name="start_date" placeholder="Start Date" class="datepicker" data-dateformat='mm/dd/yy'>
                            </label>
                          </section>
                          <section class="">
                            <label class="label">Starting Salary</label>
                            <label class="input">
                              <input type="text" name="starting_salary" placeholder="Starting Salary">
                            </label>
                          </section>
                          <section class="">
                            <label class="label">Status</label>
                            <label class="input">
                              <input type="text" name="status" placeholder="Status">
                            </label>
                          </section>
                          <div class="row">
                            <section class="col col-6">
                              <label class="label">TIN</label>
                              <label class="input">
                                <input type="text" name="tin" placeholder="TIN">
                              </label>
                            </section>
                            <section class="col col-6">
                            <label class="label">SSS</label>
                            <label class="input">
                              <input type="text" name="sss" placeholder="SSS">
                            </label>
                          </section>
                          </div>
                          <div class="row">
                            <section class="col col-6">
                              <label class="label">Philhealth</label>
                              <label class="input">
                                <input type="text" name="philhealth" placeholder="Philhealth">
                              </label>
                            </section>
                            <section class="col col-6">
                            <label class="label">PAG-IBIG</label>
                            <label class="input">
                              <input type="text" name="pagibig" placeholder="PAG-IBIGr">
                            </label>
                          </section>
                          </div>                          
                          <div class="row">
                            <section class="col col-6">
                              <label class="label">With Dependents</label>
                              <label class="select">
                                <select name="with_dependent">
                                  <option value="" disabled selected>Dependents</option>
                                  @foreach (Config::get('constants.WITH_DEPENDENTS') as $dependent)
                                  <option value="{{$dependent}}">{{$dependent}}</option>                                
                                  @endforeach
                                </select>
                                <i></i>                                
                              </label>
                            </section>
                            <section class="col col-6">
                              <label class="label"># of Dependents</label>
                              <label class="select">
                                <select name="dependents">
                                  <option value="" disabled selected>0</option>
                                  @foreach (Config::get('constants.NUM_DEPENDENTS') as $dependent)
                                  <option value="{{$dependent}}">{{$dependent}}</option>                                
                                  @endforeach
                                </select>
                                <i></i>                                
                              </label>
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
        
          </div>
        
          <!-- END ROW -->          
        </section>


      </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
@endsection