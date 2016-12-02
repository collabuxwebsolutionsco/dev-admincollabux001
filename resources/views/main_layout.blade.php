<!DOCTYPE html>
<html class="no-js" lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>{{$pageTitle}}</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="/css/bootstrap.min.css" type='text/css'>

        <!-- Font awesome -->
        <link rel="stylesheet" href="/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="/css/style.css" type='text/css'>

        @if (strpos($currentURL, 'attendance/manage') !== false) 
        <link rel='stylesheet' href='/plugins/fullcalendar/fullcalendar.css' type='text/css'/>
        @endif
        
        @if(strpos($currentURL, 'dashboard') !== false)
        <link rel='stylesheet' href='/css/pages/dashboard.css' type='text/css'/>
        @endif       

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smart-admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smart-admin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/override.css">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smart-admin/css/smartadmin-production.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smart-admin/css/smartadmin-skins.css">

    <!-- SmartAdmin RTL Support is under construction
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.css"> -->

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="/smart-admin/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/smart-admin/img/favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

  </head>
  <body class="fixed-header fixed-ribbon fixed-navigation">
    <!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->
  <!-- HEADER -->
    <header id="header">
      <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="/smart-admin/img/logo.png" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->
      </div>

      <!-- pulled right: nav area -->
      <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
          <span> <a href="javascript:void(0);" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
          <span> <a href="login.html" title="Sign Out"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->
      </div>
      <!-- end pulled right: nav area -->

    </header>
    <!-- END HEADER -->
    <!-- Left panel : Navigation area -->
    <!-- Note: This width of the aside area can be adjusted through LESS variables -->
    <aside id="left-panel">

      <!-- User info -->
      <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
          
          <a href="javascript:void(0);" id="show-shortcut">
            <img src="/smart-admin/img/avatars/sunny.png" alt="me" class="online" /> 
            <span>
              john.doe
            </span>
            <i class="fa fa-angle-down"></i>
          </a> 
          
        </span>
      </div>
      <!-- end user info -->

      <!-- NAVIGATION : This navigation is also responsive

      To make this navigation dynamic please make sure to link the node
      (the reference to the nav > ul) after page load. Or the navigation
      will not initialize.
      -->
      <nav>
        <!-- NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional hre="" links. See documentation for details.
        -->

        <ul>
          <li class="{{strpos($currentURL, 'dashboard') !== false ? 'active' : '' }}">
            <a href="/dashboard" title="Dashboard"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Dashboard</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-briefcase"></i> <span class="menu-item-parent">Work Load</span></a>
            <ul>
              <li class="{{strpos($currentURL, 'workload/projects') !== false ? 'active' : '' }}">
                <a href="/workload/projects">Projects</a>
              </li>
              <li class="{{strpos($currentURL, 'workload/tickets') !== false || strpos($currentURL, 'workload/details') !== false ? 'active' : '' }}">
                 <a href="/workload/tickets">Tickets</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Employees</span></a>
            <ul>
              <li class="{{strpos($currentURL, 'employee/add') !== false ? 'active' : '' }}">
                <a href="/employee/add">Add Employee</a>
              </li>
              <li class="{{strpos($currentURL, 'employee/manage') !== false || strpos($currentURL, 'employee/compensation') !== false || strpos($currentURL, 'employee/edit') !== false ? 'active' : '' }}">
                 <a href="/employee/manage">Manage Employees</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-clock-o"></i> <span class="menu-item-parent">Attendance</span></a>
            <ul>
              <li class="{{strpos($currentURL, 'attendance/add') !== false ? 'active' : '' }}">
                <a href="/attendance/add">Daily Time Record</a>
              </li>
              <li class="{{strpos($currentURL, 'attendance/leaveRequests') !== false ? 'active' : '' }}">
                <a href="/attendance/leaveRequests">Leave Requests</a>
              </li>
              <li class="{{strpos($currentURL, 'attendance/manage') !== false ? 'active' : '' }}">
                <a href="/attendance/manage">Manage Attendance</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-files-o"></i> <span class="menu-item-parent">Payslip</span></a>
            <ul>
              <li class="{{strpos($currentURL, 'payslip/generate') !== false ? 'active' : '' }}">
                <a href="/payslip/generate">Generate Payslip</a>
              </li>
              <li class="{{strpos($currentURL, 'payslip/manage') !== false ? 'active' : '' }}">
                <a href="/payslip/manage">Manage Payslips</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-book"></i> <span class="menu-item-parent">Remittance</span></a>            
            <ul>                            
              <li class="{{strpos($currentURL, 'remittance/generate') !== false ? 'active' : '' }}">
                <a href="/remittance/generate">Generate Remittance</a>
              </li>
              <li class="{{strpos($currentURL, 'remittance/manage') !== false ? 'active' : '' }}">
                <a href="/remittance/manage">Manage Remittance</a>
              </li>                                  
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">Users</span></a>
            <ul>
              <li class="{{strpos($currentURL, 'user/add') !== false ? 'active' : '' }}">
                <a href="/user/add">Add User</a>
              </li>
              <li class="{{strpos($currentURL, 'user/manage') !== false ? 'active' : '' }}">
                <a href="/user/manage">Manage Users</a>
              </li>
            </ul>
          </li>          
          <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-gears"></i> <span class="menu-item-parent">Settings</span></a>
            <ul>
              <li>
                <a href="#">HR Setup</a>
                <ul>
                  <li class="{{strpos($currentURL, 'setting/sss') !== false ? 'active' : '' }}">
                    <a href="/setting/sss"><i class="fa fa-fw fa-file-text"></i> SSS Setup</a>
                  </li>
                  <li class="{{strpos($currentURL, 'setting/pagibig') !== false ? 'active' : '' }}">
                    <a href="/setting/pagibig"><i class="fa fa-fw fa-file-text"></i> Pag-ibig Setup</a>
                  </li>
                  <li class="{{strpos($currentURL, 'setting/philhealth') !== false ? 'active' : '' }}">
                    <a href="/setting/philhealth"><i class="fa fa-fw fa-file-text"></i> Philhealth Setup</a>
                  </li>
                  <li class="{{strpos($currentURL, 'setting/tax') !== false ? 'active' : '' }}">
                    <a href="/setting/tax"><i class="fa fa-fw fa-file-text"></i> Tax Setup</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">System Setup</a>
                <ul>
                  <li>
                    <a href="datatables.html"><i class="fa fa-fw fa-gear"></i> My Account</a>                    
                  </li>
                  <li>
                    <a href="datatables.html"><i class="fa fa-fw fa-laptop"></i> User Roles</a>                    
                  </li>
                  <li>
                    <a href="datatables.html"><i class="fa fa-fw fa-table"></i> Maintenance Tables</a>                    
                  </li>
                </ul>
              </li>              
            </ul>
          </li>
        </ul>
      </nav>
      <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

    </aside>
    <!-- END NAVIGATION -->

    @yield('content')

    <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
    Note: These tiles are completely responsive,
    you can add as many as you like
    -->
    <div id="shortcut">
      <ul>
        <li>
          <a href="#inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
        </li>
        <li>
          <a href="#calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
        </li>
        <li>
          <a href="#gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
        </li>
        <li>
          <a href="#invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
        </li>
        <li>
          <a href="#gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
        </li>
        <li>
          <a href="javascript:void(0);" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
        </li>
      </ul>
    </div>
    <!-- END SHORTCUT AREA -->

    <!--================================================== -->

    <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
    <script data-pace-options='{ "restartOnRequestAfter": false }' src="smart-admin/js/plugin/pace/pace.min.js"></script>-->

    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script>
      if (!window.jQuery) {
        document.write('<script src="/smart-admin/js/libs/jquery-2.0.2.min.js"><\/script>');
      }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>
      if (!window.jQuery.ui) {
        document.write('<script src="/smart-admin/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
      }
    </script>

    <!-- JS TOUCH : include this plugin for mobile drag / drop touch events
    <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

    <!-- BOOTSTRAP JS -->
    <script src="/smart-admin/js/bootstrap/bootstrap.min.js"></script>

    <!-- CUSTOM NOTIFICATION -->
    <script src="/smart-admin/js/notification/SmartNotification.min.js"></script>

    <!-- JARVIS WIDGETS -->
    <script src="/smart-admin/js/smartwidgets/jarvis.widget.min.js"></script>

    <!-- EASY PIE CHARTS -->
    <script src="/smart-admin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

    <!-- SPARKLINES -->
    <script src="/smart-admin/js/plugin/sparkline/jquery.sparkline.min.js"></script>

    <!-- JQUERY VALIDATE -->
    <script src="/smart-admin/js/plugin/jquery-validate/jquery.validate.min.js"></script>

    <!-- JQUERY MASKED INPUT -->
    <script src="/smart-admin/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

    <!-- JQUERY SELECT2 INPUT -->
    <script src="/smart-admin/js/plugin/select2/select2.min.js"></script>

    <!-- JQUERY UI + Bootstrap Slider -->
    <script src="/smart-admin/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

    <!-- browser msie issue fix -->
    <script src="/smart-admin/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

    <!-- FastClick: For mobile devices -->
    <script src="/smart-admin/js/plugin/fastclick/fastclick.js"></script>

    <!--[if IE 7]>

    <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

    <![endif]-->

    <!-- MAIN APP JS FILE -->
    <script src="/smart-admin/js/app.js"></script>

    <!-- PAGE RELATED PLUGIN(S) 
    <script src="..."></script>-->

    

    <script type="text/javascript">
    
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    
    $(document).ready(function() {
      
      pageSetUp();        

      <?php if (strpos($currentURL, 'workload/tickets') !== false || strpos($currentURL, 'workload/projects') !== false || 
        strpos($currentURL, 'settings') !== false || strpos($currentURL, 'remittance') !== false || strpos($currentURL, 'employee/manage') !== false || 
        strpos($currentURL, 'attendance/leave_requests') !== false) { ?>
      $('#datatable_tabletools').dataTable({
        "sDom" : "<'dt-top-row'Tlf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>",
        "oTableTools" : {
          "aButtons" : [{
            "sExtends" : "collection",
            "sButtonText" : 'Save <span class="caret" />',
            "aButtons" : ["csv", "xls", "pdf"]
          }],
          "sSwfPath" : "/smart-admin/js/plugin/datatables/media/swf/copy_csv_xls_pdf.swf"
        },
        "fnInitComplete" : function(oSettings, json) {
          $(this).closest('#dt_table_tools_wrapper').find('.DTTT.btn-group').addClass('table_tools_group').children('a.btn').each(function() {
            $(this).addClass('btn-sm btn-default');
          });
        }
      }); 
      <?php }?>

      <?php if (strpos($currentURL, 'user/manage') !== false ) { ?>
      $('#datatable_tabletools').dataTable({
        "sPaginationType" : "bootstrap_full"
      });
      /*$('#datatable_tabletools').dataTable({
        "sDom" : "<'dt-top-row'Tlf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>",
        "oTableTools" : {
          "aButtons" : [{
            "sExtends" : "collection",
            "sButtonText" : 'Save <span class="caret" />',
            "aButtons" : ["csv", "xls", "pdf"]
          }],
          "sSwfPath" : "smart-admin/js/plugin/datatables/media/swf/copy_csv_xls_pdf.swf"
        },
        "fnInitComplete" : function(oSettings, json) {
          $(this).closest('#dt_table_tools_wrapper').find('.DTTT.btn-group').addClass('table_tools_group').children('a.btn').each(function() {
            $(this).addClass('btn-sm btn-default');
          });
        }
      }); */
      <?php }?>

      <?php if (strpos($currentURL, 'attendance/manage') !== false ) { ?>
      $('#calendar').fullCalendar({
        header: {
          left:   'prevYear, nextYear',
            center: 'title',
            right:  'today prev,next'
          },
        dayClick: function() {
              alert('a day has been clicked!');
          }       
      });

      var m = moment();
      <?php }?>

      <?php if (strpos($currentURL, 'workload/details') !== false) { ?>
          $('#ticketConversation').summernote({
              height : 180,
              focus : false,
              tabsize : 2
            });
       <?php } ?>

      });

    </script>
    <?php if (strpos($currentURL, 'workload/details') !== false) { ?>
      <script src="/smart-admin/js/plugin/summernote/summernote.js"></script>
    <?php } ?>
    
    <?php if (strpos($currentURL, 'workload/tickets') !== false || strpos($currentURL, 'workload/projects') !== false || 
      strpos($currentURL, 'setting') !== false || strpos($currentURL, 'remittance') !== false || 
      strpos($currentURL, 'user/manage') !== false || strpos($currentURL, 'employee/manage') !== false || 
      strpos($currentURL, 'attendance/leave_requests') !== false) { ?>
    <script src="/smart-admin/js/plugin/datatables/jquery.dataTables-cust.min.js"></script>
    <script src="/smart-admin/js/plugin/datatables/ColReorder.min.js"></script>
    <script src="/smart-admin/js/plugin/datatables/FixedColumns.min.js"></script>
    <script src="/smart-admin/js/plugin/datatables/ColVis.min.js"></script>
    <script src="/smart-admin/js/plugin/datatables/ZeroClipboard.js"></script>
    <script src="/smart-admin/js/plugin/datatables/media/js/TableTools.min.js"></script>
    <script src="/smart-admin/js/plugin/datatables/DT_bootstrap.js"></script>
    <?php }?>

    <?php if (strpos($currentURL, 'attendance/manage') !== false) {?>   
    <script src='/plugins/fullcalendar/lib/moment.min.js'></script>
    <script src='/plugins/fullcalendar/fullcalendar.js'></script>
    <?php }?>

    <!-- Your GOOGLE ANALYTICS CODE Below -->
    <script type="text/javascript">
      /*var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
        _gaq.push(['_trackPageview']);
      
      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();*/

    </script>

    @if(strpos($currentURL, 'setting/sss') !== false)
    <script src='/js/classes/sss_setting.js'></script>
    <script src='/js/pages/sss_setup.js'></script>
    @endif 

  </body>

</html>