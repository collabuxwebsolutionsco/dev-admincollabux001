@extends('profile-layout')

@section('content')
  <!-- MAIN PANEL -->
    <div id="main" role="main">      

      <!-- MAIN CONTENT -->
      <div id="content">
        <section id="" class="">
        <!-- START ROW -->
          <div class="row">
        
            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-12">
        
              <div class="modal-dialog demo-modal view-profile-section">
                      <div class="modal-content">
                        <!-- <div class="modal-header">                          
                          <h4 class="modal-title">Modal title</h4>
                        </div> -->
                        <div class="modal-body smart-form">
                          <p>

                            <fieldset>                        
                              <h2>Overview</h2>
                        <div class="row">
                          <section class="col col-2 profile-pic-compensation">
                            <img src="../smart-admin/img/avatars/sunny-big.png">
                          </section>
                          <section class="col col-3">
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
                            <h4>Basic Salary: Php 10,000.00</h4>
                            <h4>Employee #: 001</h4>
                           
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
                        <hr/><hr/><br/>
                        <h2>Personal Information</h2><br/>
                        <div class="row text-black border-bottom-black border-top-black">
                          <section class="col col-4">
                            <b>First Name:</b> Juan
                          </section>
                          <section class="col col-4">
                            <b>Middle Name:</b> Aquino
                          </section>
                          <section class="col col-4">
                            <b>Last Name:</b> Dela Cruz
                          </section>
                        </div>
                        <div class="row text-black border-bottom-black">
                          <section class="col col-12">
                            <b>Present Address:</b> Unit 203 Pineda Bldg., Legazpi City
                          </section>                                                      
                        </div>
                        <div class="row text-black border-bottom-black">
                          <section class="col col-12">
                            <b>Permanent Address:</b> Same as Present Address
                          </section>                             
                        </div>
                        <div class="row text-black border-bottom-black">
                          <section class="col col-4">
                            <b>Gender:</b> Female
                          </section>   
                          <section class="col col-4">
                            <b>Birthday:</b> 08/01/2016
                          </section>                          
                          <section class="col col-4">
                            <b>Work #:</b> (052) 123-4567
                          </section>                             
                        </div>
                        <div class="row text-black border-bottom-black">
                          <section class="col col-4">
                            <b>Home #:</b> (052) 123-4567
                          </section>                                                                                      
                          <section class="col col-4">
                            <b>Mobile #:</b> (+63) 999-123-4567
                          </section>   
                          <section class="col col-4">
                            <b>Email:</b> employee@company.com
                          </section>                                                    
                        </div>
                        <div class="row text-black border-bottom-black">
                          <section class="col col-4">
                            <b>Religion:</b> Roman Catholic
                          </section>
                          <section class="col col-4">
                            <b>Citizenship:</b> Filipino
                          </section>  
                          <section class="col col-4">
                            <b>Civil Status:</b> Single
                          </section>                            
                        </div><br/><br/>
                        <hr/><hr/><br/>
                        <h2>Emergency Contacts</h2><br/>
                        <div class="row text-black border-bottom-black border-top-black">
                          <section class="col col-4">
                            <b>Name:</b> Juan Dela Cruz Sr.
                          </section>
                          <section class="col col-4">
                            <b>Relationship:</b> Father
                          </section>  
                          <section class="col col-4">
                            <b>Contact #:</b> (+63) 999-123-4567
                          </section>                            
                        </div>
                        <div class="row text-black border-bottom-black">
                          <section class="col col-4">
                            <b>Name:</b> Juan Dela Cruz Sr.
                          </section>
                          <section class="col col-4">
                            <b>Relationship:</b> Father
                          </section>  
                          <section class="col col-4">
                            <b>Contact #:</b> (+63) 999-123-4567
                          </section>                            
                        </div>
                        <div class="row text-black border-bottom-black">
                          <section class="col col-4">
                            <b>Name:</b> Juan Dela Cruz Sr.
                          </section>
                          <section class="col col-4">
                            <b>Relationship:</b> Father
                          </section>  
                          <section class="col col-4">
                            <b>Contact #:</b> (+63) 999-123-4567
                          </section>                            
                        </div><br/><br/>
                        <hr/><hr/><br/>
                        <h2>Admin Information</h2><br/>
                        <div class="row text-black border-bottom-black border-top-black">
                          <section class="col col-4">
                            <b>Employee #:</b> 001
                          </section>
                          <section class="col col-4">
                            <b>Position:</b> Web Developer
                          </section>  
                          <section class="col col-4">
                            <b>Supervisor:</b> John Doe
                          </section>                            
                        </div>
                        <div class="row text-black border-bottom-black">
                          <section class="col col-4">
                            <b>Starting Date:</b> 08/01/2016
                          </section>
                          <section class="col col-4">
                            <b>Starting Salary:</b> Php 10,000.00
                          </section>  
                          <section class="col col-4">
                            <b>Status:</b> Active
                          </section>                            
                        </div>
                        <div class="row text-black border-bottom-black">
                          <section class="col col-3">
                            <b>TIN:</b> 123-456-789-000
                          </section>
                          <section class="col col-3">
                            <b>SSS:</b> 123-456-789-000
                          </section>  
                          <section class="col col-3">
                            <b>Philhealth:</b> 123-456-789-000
                          </section> 
                          <section class="col col-3">
                            <b>Pag-Ibig:</b> 123-456-789-000
                          </section>                            
                        </div>
                        <div class="row text-black border-bottom-black">
                          <section class="col col-3">
                            <b>With Dependents:</b> Yes
                          </section>
                          <section class="col col-3">
                            <b># of Dependents:</b> 1
                          </section>  
                          <section class="col col-3">                          
                          </section> 
                          <section class="col col-3">                          
                          </section>                            
                        </div>

                      </fieldset>
                          </p>
                        </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                          </button>
                          <button type="button" class="btn btn-primary">
                            Save changes
                          </button>
                        </div> -->
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
        
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
