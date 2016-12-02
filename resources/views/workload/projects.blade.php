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
          <a class="btn btn-success" href="javascript:void(0);" data-toggle="modal" data-target="#myModal"><b>Add Project</b></a> <a class="btn btn-primary" href="javascript:void(0);"><b>Archive Selected</b></a> 
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
                  <span class="widget-icon"> <i class="fa fa-archive"></i> </span>
                  <h2>Project List</h2>                  
                  <div class="widget-toolbar">
                    Display Records:
                    <div class="btn-group">
                      <button class="btn dropdown-toggle btn-xs btn-primary" data-toggle="dropdown">
                        All <i class="fa fa-caret-down"></i>
                      </button>
                      <ul class="dropdown-menu pull-right">
                        <li>
                          <a href="javascript:void(0);">In Progress</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);">On Hold</a>
                        </li>                        
                        <li>
                          <a href="javascript:void(0);">Close</a>
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
                          <th style="width:30%;">Project</th>
                          <th style="width:20%;">Member(s)</th>
                          <th>Status</th>
                          <th>Starts</th>
                          <th>Deadline</th>
                          <th>Tickets</th>                          
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
                          <td><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Project Title</a> <br><small class="text-muted"><i>Short Description<i></i></i></small></td>
                          <td>
                          	<div class="project-members">
	                          	<a href="javascript:void(0)"><img src="/smart-admin/img/avatars/4.png" class="busy"></a>
	                          	<a href="javascript:void(0)"><img src="/smart-admin/img/avatars/1.png" class="busy"></a> 
	                          </div>
                          </td>
                          <td><span class="label label-success">In Progress</span></td>
                          <td>11/21/2016</td>
                          <td>11/21/2016</td>
                          <td><a href="/workload/tickets">12</a></td>                          
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>2</td>
                          <td><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Updating forms</a><br><small class="text-muted">Update all forms<i><i></i></i></small></td>
                          <td>
                          	<div class="project-members">
	                          	<a href="javascript:void(0)"><img src="/smart-admin/img/avatars/4.png" class="busy"></a>
	                          	<a href="javascript:void(0)"><img src="/smart-admin/img/avatars/1.png" class="busy"></a> 
	                        </div>
	                      </td>
                          <td><span class="label label-success">In Progress</span></td>
                          <td>11/21/2016</td>
                          <td>11/21/2016</td>
                          <td><a href="/workload/tickets">11</a></td>                          
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
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">Add Projects</h4>
              </div>
              <div class="modal-body smart-form">

                
              	<section>
                  <label class="label">Project Title</label>
                  <label class="input">
                    <input type="text" name="modal_proj_title" placeholder="Project Title"/>
                  </label>
                </section>                 
              <section>
                <label class="label">Description:</label>
                <label class="textarea"> 
                 <textarea name="modal_proj_desc"></textarea>
                  <i></i>
                </label>
              </section>  
              <section>
                <label class="label">Project Leader:</label>
                <label class="input"> 
                 <input type="text" name="modal_proj_lead"/>
              </label>
              </section>                
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
