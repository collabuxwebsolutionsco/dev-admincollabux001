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
                  <span class="widget-icon"> <i class="fa fa-clock-o"></i> </span>
                  <h2>Daily Timelog</h2>
        
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
                            <label class="label">Day</label>
                            <label class="select">
                              <select name="day">
                                <option value=""></option>
                                @for ($i=1;$i<=31;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor                                                        
                              </select>
                              <i></i>                              
                            </label>
                          </section>                         
                        </div>
                        <div class="row">
                          <section class="col col-9"></section>
                          <section class="col col-3">
                            <center><a class="btn btn-primary" href="javascript:void(0);"><b>Search</b></a></center>
                          </section>
                        </div>
                        <hr/><br/>
                        <table class="table table-bordered table-striped" style="width:100%;">
                        <thead>
                          <tr>
                            <th>&nbsp;</th>
                            <th colspan="2"><center>A.M.</center></th>
                            <th colspan="2"><center>P.M.</center></th>                            
                            <th colspan="2"><center>Worked Hrs</center></th>   
                            <th colspan="2"><center>Undertime</center></th>
                            <th colspan="2"><center>Overtime</center></th>
                          </tr>
                          <tr>
                            <th style="width:5%;"><center>Day</center></th>
                            <th style="width:10%;"><center>In</center></th>
                            <th style="width:10%;"><center>Out</center></th>
                            <th style="width:10%;"><center>In</center></th>
                            <th style="width:10%;"><center>Out</center></th>
                            <th style="width:10%;"><center>Hrs</center></th>
                            <th style="width:9%;"><center>Mins</center></th>
                            <th style="width:9%;"><center>Hrs</center></th>
                            <th style="width:9%;"><center>Mins</center></th>
                            <th style="width:9%;"><center>Hrs</center></th>
                            <th style="width:9%;"><center>Mins</center></th>
                          </tr>
                        </thead>
                        <tbody>
                          @for ($i=1;$i<=31;$i++)
                            <tr>
                              <td><center>{{$i}}</center></td>
                              <td>
                                <section>                                  
                                  <label class="input">
                                    <input type="text" class="input-xs" name="amFrom{{$i}}" data-mask="99:99">
                                  </label>
                                </section>
                              </td>
                              <td>
                                <section>                                  
                                  <label class="input">
                                    <input type="text" class="input-xs" name="amTo{{$i}}" data-mask="99:99">
                                  </label>
                                </section>
                              </td>
                              <td>
                                <section>                                  
                                  <label class="input">
                                    <input type="text" class="input-xs" name="pmFrom{{$i}}" data-mask="99:99">
                                  </label>
                                </section>
                              </td>
                              <td>
                                <section>                                  
                                  <label class="input">
                                    <input type="text" class="input-xs" name="pmTo{{$i}}" data-mask="99:99">
                                  </label>
                                </section>
                              </td>
                              <td>
                                <section>                                  
                                  <label class="input">
                                    <input type="text" class="input-xs" name="workedHrs{{$i}}" data-mask="99">
                                  </label>
                                </section>
                              </td>
                              <td>
                                <section>                                  
                                  <label class="input">
                                    <input type="text" class="input-xs" name="workedMin{{$i}}" data-mask="99">
                                  </label>
                                </section>
                              </td>
                              <td>
                                <section>                                  
                                  <label class="input">
                                    <input type="text" class="input-xs" name="underHrs{{$i}}" data-mask="99">
                                  </label>
                                </section>
                              </td>
                              <td>
                                <section>                                  
                                  <label class="input">
                                    <input type="text" class="input-xs" name="underMin{{$i}}" data-mask="99">
                                  </label>
                                </section>
                              </td>
                              <td>
                                <section>                                  
                                  <label class="input">
                                    <input type="text" class="input-xs" name="overHrs{{$i}}" data-mask="99">
                                  </label>
                                </section>
                              </td>
                              <td>
                                <section>                                  
                                  <label class="input">
                                    <input type="text" class="input-xs" name="overMin{{$i}}" data-mask="99">
                                  </label>
                                </section>
                              </td>
                            </tr>
                          @endfor                 
                        </tbody>
                      </table>                        
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