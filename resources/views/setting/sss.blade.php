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
         
        <section class="col-sm-6 col-md-6 col-lg-6 header-button">
          <a class="btn btn-success" href="javascript:void(0);" id="btn-add" data-toggle="modal" data-target="#modal-sss"><b>Add</b></a>
          <a class="btn btn-primary" href="javascript:void(0);" id="btn-multi-archive" data-toggle="modal" data-target="#modal-archive-sss"><b>Archive Selected</b></a> 
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
                <header class="section-header">                  
                  <span class="widget-icon"> <i class="fa fa-file-text"></i> </span>
                  <h2>SSS Setup</h2>                  
                  <div class="widget-toolbar">
                    Display Records:
                    <div class="btn-group">
                      <button class="btn dropdown-toggle btn-xs btn-primary" data-toggle="dropdown">
                        {{$status}}<i class="fa fa-caret-down"></i>
                      </button>
                      <ul class="dropdown-menu pull-right">
                        <li>
                          <a href="/setting/sss">Active</a>
                        </li>
                        <li>
                          <a href="/setting/sss/archive">Archive</a>
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
                              <input type="checkbox" name="checkbox-inline" id="chk-archive-all">
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
                          @if ($status == "Active")
                          <th class="action">Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($records as $record)
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline" class="chk-archive" data-id="{{$record->id}}">
                              <i></i> 
                            </label>
                          </td>
                          <td>{{$record->id}}</td>
                          <td>Php {{number_format($record->salary_from, 2, '.', ',')}} - Php {{number_format($record->salary_to, 2, '.', ',')}}</td>
                          <td>Php {{number_format($record->base_salary, 2, '.', ',')}}</td>
                          <td>Php {{number_format($record->ec, 2, '.', ',')}}</td>
                          <td>Php {{number_format($record->er, 2, '.', ',')}}</td>
                          <td>Php {{number_format($record->ee, 2, '.', ',')}}</td>
                          <td>Php {{number_format($record->total, 2, '.', ',')}}</td>
                          <td>{{$record->status}}</td>
                          @if ($status == "Active")
                          <td>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#modal-sss" class="btn btn-default txt-color-blue btn-sss-edit" 
                                  rel="tooltip" data-placement="bottom" data-original-title="Edit" data-id="{{$record->id}}">
                              <i class="fa fa-edit fa-lg"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-default txt-color-red btn-sss-archive" data-toggle="modal" data-target="#modal-archive-sss" 
                                  rel="tooltip" data-placement="bottom" data-original-title="Archive" data-id="{{$record->id}}">
                              <i class="fa fa-trash-o fa-lg"></i>
                            </a>                            
                          </td>
                          @endif
                        </tr>
                        @endforeach                        
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
        <div class="modal fade" id="modal-sss" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form id="frm-sss" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input id="hdn-sss-id" type="hidden">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                  </button>
                  <h4 class="modal-title" id="modal-sss-label">Add Record</h4>
                </div>
              
              <div class="modal-body smart-form">                
                <div class="row">
                  <section class="col col-5 form-group">
                    <label class="label">Salary Range</label>
                    <label class="input">
                      <input type="number" name="salary_from" id="txt-from" placeholder="From">
                    </label>
                  </section>
                  <section class="col col-2 form-group">
                    <label class="label">&nbsp;</label>
                    <label class="input">
                      <center>-</center>
                    </label>
                  </section>
                  <section class="col col-5 form-group">
                    <label class="label">&nbsp;</label>
                    <label class="input">
                      <input type="number" name="salary_to" id="txt-to" placeholder="To">
                    </label>
                  </section>
                </div>
              <section class="form-group">
                <label class="label">Base Salary:</label>
                <label class="input">
                    <input type="number" name="base_salary" id="txt-base" placeholder="Base Salary"/>
                </label>
              </section>  
              <div class="row">
                  <section class="col col-3 form-group">
                    <label class="label">EC</label>
                    <label class="input">
                      <input type="number" name="ec" id="txt-ec" placeholder="EC" value="0.00">
                    </label>
                  </section>
                  <section class="col col-3 form-group">
                    <label class="label">ER</label>
                    <label class="input">
                      <input type="number" name="er" id="txt-er" placeholder="ER" value="0.00">
                    </label>
                  </section>
                  <section class="col col-3 form-group">
                    <label class="label">EE</label>
                    <label class="input">
                      <input type="number" name="ee" id="txt-ee" placeholder="EE" value="0.00">
                    </label>
                  </section>
                  <section class="col col-3 form-group">
                    <label class="label">Total</label>
                    <label class="input">
                      <input type="number" disabled name="total" id="txt-total" placeholder="Total" value="0.00">
                    </label>
                  </section>
                </div>                
              </div>
              <div class="modal-footer">
                <span id="span-msg-success" class="success hide">Save Successful!</span>
                <span id="span-msg-error" class="error hide">Unable to Save. Error Encountered.</span>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
                <button type="submit" class="btn btn-primary">
                  Save
                </button>
              </div>
            </form>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="modal fade" id="modal-archive-sss" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="frm-archive-sss" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input name="_method" type="hidden" value="ARCHIVE">
              <input id="hdn-archive-sss-id" type="hidden">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
                </button>
                <h4 class="modal-title" id="modal-archive-sss-label">Archive Record</h4>
              </div>
              <div class="modal-body">
                <div class="alert alert-danger"><i class="fa fa-times-circle"></i> <span></span></div>
                <div class="row">
                  <div class="col-md-1 text-center">
                    <i class="fa fa-4x fa-question-circle archive-confirmation-icon"></i> 
                  </div>
                  <div class="col-md-10">
                    <p class="text-justify">
                      <span id="lbl-archive-sss-confirmation" class="archive-confirmation"> Are you sure you want to archive this setting?</span>
                    </p>
                  </div>
                  <div class="col-md-1">
                  </div>
                </div>
              </div>
              <div class="modal-footer" id="modal-remove-footer">
                <span id="span-msg-success" class="success hide">Save Successful!</span>
                <span id="span-msg-error" class="error hide">Unable to Save. Error Encountered.</span>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  No
                </button>
                <button type="submit" class="btn btn-primary">
                  Yes
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
          </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
@endsection