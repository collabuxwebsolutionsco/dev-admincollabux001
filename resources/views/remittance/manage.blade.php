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
                  <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                  <h2>Generate Remittance</h2>
        
                </header>
        
                <!-- widget div-->
                <div>     
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
        
                    <form class="smart-form">                      
        
                      <fieldset>                        
                        <div class="row">
                          <section class="col col-4">
                            <label class="label">Options</label>
                            <label class="select">
                              <select>
                                <option></option>
                                <option>SSS</option>
                                <option>Pag-IBIG</option>
                                <option>Philhealth</option>
                                <option>Tax</option>
                              </select><i></i>
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
                            <label class="label">&nbsp;</label>
                            <center><a class="btn btn-primary" href="javascript:void(0);"><b>Search</b></a></center>
                          </section>                                                                             
                        </div>                        
                        <hr/><br/>                                                 
                      </fieldset>                      
                    </form>

                        <div class="remittance widget-body-toolbar">
        
                        </div>
                        <table id="datatable_tabletools" class="table table-bordered table-striped table-condensed table-hover  has-tickbox">
                          <thead>
                            <tr>                              
                              <th>#</th>
                              <th>Type</th>
                              <th>Amount</th>
                              <th>Period</th>
                              <th>Date Created</th>
                              <th>Created By</th>                              
                            </tr>
                          </thead>
                          <tbody>
                            <tr>                              
                              <td>001</td>
                              <td>SSS</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>Pag-IBIG</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>Philhealth</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>Tax</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>SSS</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>SSS</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>SSS</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>SSS</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>SSS</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>SSS</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>SSS</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                            <tr>                              
                              <td>001</td>
                              <td>SSS</td>
                              <td>Php 8,000.00</td>
                              <td>September 2016</td>
                              <td>10/01/2016</td>
                              <td>admin</td>                              
                            </tr>
                          </tbody>
                        </table>
        
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