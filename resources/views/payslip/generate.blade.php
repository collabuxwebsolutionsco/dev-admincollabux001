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
          <a class="btn btn-primary" href="javascript:void(0);"><b>Final Copy</b></a>  
        </section>
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
                  <span class="widget-icon"> <i class="fa fa-files-o"></i> </span>
                  <h2>Generate Payslip</h2>
        
                </header>
        
                <!-- widget div-->
                <div>     
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
        
                    <form class="smart-form">                      
        
                      <fieldset>                        
                        <div class="row">
                          <section class="col col-4">
                            <label class="label">Employee</label>
                            <label class="input">
                              <input type="text" name="employeeNum" placeholder="Employee Number">
                            </label>
                          </section>
                          <section class="col col-3">
                            <label class="label">Year</label>
                            <label class="select">
                              <select name="year">
                                <option value=""></option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>                                
                              </select>
                              <i></i>                              
                            </label>
                          </section>
                          <section class="col col-3">
                            <label class="label">Month</label>
                            <label class="select">
                              <select name="year">
                                <option value=""></option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>                                
                              </select>
                              <i></i>                              
                            </label>
                          </section>
                          <section class="col col-2">
                            <label class="label">Period</label>
                            <label class="select">
                              <select name="day">
                                <option value=""></value>
                                <option value="15">1st Half</value>
                                <option value="30">2nd Half</value>
                              </select>
                              <i></i>                              
                            </label>
                          </section>                                                   
                        </div>
                        <div class="row">
                          <section class="col col-9"></section>
                          <section class="col col-3">
                            <center><a class="btn btn-primary" href="javascript:void(0);"><b>Generate</b></a></center>
                          </section>
                        </div>
                        <hr/><br/>
                        <div class="row">
                          <section class="col col-9">
                            <b>Employee Number:</b> 000<br/>
                            <b>Employee Name:</b> Juan de la Cruz <br/>
                            <b>Position:</b> Senior Web Developer <br/>
                            <b>Pay Period:</b> August 29, 2016 - September 13, 2016
                          </section>
                          <section class="col col-3">
                            <img class="logo" src="../img/collabux-logo-banner-vertical.png"/>
                          </section>
                        </div> 
                        <div class="row" style="padding-left:15px;padding-right:15px;">                            
                          <table class="payslip">
                            <tr>
                              <td colspan="2"><b>Earnings</b></td>
                              <td colspan="2"><b>Deductions</b></td>
                            </tr>
                            <tr>
                              <td style="width:25%;">Basic Salary</td>
                              <td style="width:25%;">&nbsp;</td>
                              <td style="width:25%;">Undertime</td>
                              <td style="width:25%;">&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Overtime</td>
                              <td>&nbsp;</td>
                              <td>SSS</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Incentive</td>
                              <td>&nbsp;</td>
                              <td>Philhealth</td>
                              <td>&nbsp;</td>
                            </tr
                            <tr>
                              <td>Bonus</td>
                              <td>&nbsp;</td>
                              <td>Pag-IBIG</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Others</td>
                              <td>&nbsp;</td>
                              <td>Tax</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td style="text-align:right;" class="total">Total Earnings</td>
                              <td class="total">&nbsp;</td>
                              <td style="text-align:right;" class="total">Total Deductions</td>
                              <td class="total">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><b>Summary</b></td>
                              <td colspan="2"><b>Payment Information</b></td>
                            </tr>
                            <tr>
                              <td>Total Earnings</td>
                              <td>&nbsp;</td>
                              <td>Check Number</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Total Deductions</td>
                              <td>&nbsp;</td>
                              <td>Check Date</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Net Income</td>
                              <td>&nbsp;</td>
                              <td>Bank</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="4" class="received-by"><b>Received By</b></td>                              
                            </tr>
                            <tr>
                              <td colspan="4" class="received-sign">&nbsp;</td>                              
                            </tr>
                          </table>
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