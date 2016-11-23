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
          <a class="btn btn-success" href="javascript:void(0);"><b>Add</b></a> <a class="btn btn-primary" href="javascript:void(0);"><b>Archive Selected</b></a> 
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
                  <span class="widget-icon"> <i class="fa fa-file-text"></i> </span>
                  <h2>SSS Setup</h2>                  
                  <div class="widget-toolbar">
                    Display Records:
                    <div class="btn-group">
                      <button class="btn dropdown-toggle btn-xs btn-primary" data-toggle="dropdown">
                        Active <i class="fa fa-caret-down"></i>
                      </button>
                      <ul class="dropdown-menu pull-right">
                        <li>
                          <a href="javascript:void(0);">Active</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);">Archive</a>
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
                    <table id="datatable_tabletools" class="table table-bordered table-striped table-condensed table-hover  has-tickbox">
                      <thead>
                        <tr>
                          <th class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </th>
                          <th>#</th>
                          <th>Salary Range</th>
                          <th>Base Salary</th>
                          <th>EC</th>
                          <th>ER</th>
                          <th>EE</th>
                          <th>Total</th>
                          <th>Status</th>
                          <th class="action">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>1</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="javascript:void(0);">Action</a>
                                </li>
                                <li>
                                  <a href="#" target="_blank">View</a>
                                </li>
                                <li>
                                  <a href="#">Edit </a>
                                </li>                                                                                          
                                <li>
                                  <a href="javascript:void(0);">Archive</a>
                                </li>                                
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>2</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>3</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>4</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>5</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>6</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>7</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>8</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>9</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>10</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>11</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>12</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>13</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>14</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>15</td>
                          <td>Php 1,000.00 - Php 1,249.99</td>
                          <td>Php 1,000.00</td>
                          <td>Php 10.00</td>
                          <td>Php 83.70</td>
                          <td>Php 36.30</td>
                          <td>Php 120.00</td>
                          <td>Active</td>
                          <td></td>
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