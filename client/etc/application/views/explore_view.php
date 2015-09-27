<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TourME - Home | Explore</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/enigma/web/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/enigma/web/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/enigma/web/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/enigma/web/css/edited.css">
    <link rel="stylesheet" type="text/css"
    href="https://js.api.here.com/v3/3.0/mapsjs-ui.css" />
    <script type="text/javascript" charset="UTF-8"
      src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
    <script type="text/javascript" charset="UTF-8"
      src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
    <script type="text/javascript" charset="UTF-8"
      src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
    <script type="text/javascript" charset="UTF-8"
      src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
     <script type="text/javascript" charset="UTF-8"
      src="https://js.api.here.com/v3/3.0/mapsjs-places.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="/enigma/web/home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>T.</b>ME</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="/enigma/web/img/tour_icon.png" style="height: 30px; width: auto;"> Tour.me</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="/enigma/web/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/enigma/web/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/enigma/web/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/enigma/web/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/enigma/web/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/enigma/web/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $fname; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/enigma/web/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $fname; ?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="/enigma/web/home/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/enigma/web/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $fname;?></p>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="/enigma/web/home">
                <i class="fa fa-user"></i> <span>Profile</span> </i>
              </a>
            </li>
            <li>
              <a href="/enigma/web/home/tours">
                <i class="fa fa-tags"></i> <span>Tours</span> </i>
              </a>
            </li>
            <li>
              <a href="/enigma/web/home/travels">
                <i class="fa fa-map"></i> <span>Travels</span> </i>
              </a>
            </li>
            <li class="active">
              <a href="#">
                <i class="fa fa-lightbulb-o"></i> <span>Explore</span> </i>
              </a>
            </li>
            <li>
              <a href="/enigma/web/home/mailbox">
                <i class="fa fa-envelope"></i> <span>Mailbox</span> </i>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Explore</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <h1>Explore Philippine Culture!</h1>
          <div class="row">
            <div class="pull-left" id="map" style="width: 70%; height: 795px; background: grey" >
              <script  type="text/javascript" charset="UTF-8" >
    
            /**
             * Creates a new marker and adds it to a group
             * @param {H.map.Group} group       The group holding the new marker
             * @param {H.geo.Point} coordinate  The location of the marker
             * @param {String} html             Data associated with the marker
             */
            function addMarkerToGroup(group, coordinate, html) {
              var marker = new H.map.Marker(coordinate);
              // add custom data to the marker
              marker.setData(html);
              group.addObject(marker);
            }

            var ncr = {
                    lat: 14.598707, 
                    lng: 121.004751
                  };

                  var car = {
                    lat: 17.697409, 
                    lng: 121.36322
                  };
                  var regionOne = {
                    lat: 17.45128, 
                    lng: 120.566711
                  };
                  var regionTwo = {
                    lat: 17.294003, 
                    lng: 122.110291
                  };
                  var regionThree = {
                    lat: 16.062706, 
                    lng: 120.907288
                  };
                  var regionFourA = {
                    lat: 14.201553, 
                    lng: 121.593933
                  };
                  var regionFourB = {
                    lat: 11.966247, 
                    lng: 120.140991
                  };
                  var regionFive = {
                    lat: 13.616092, 
                    lng: 123.19519
                  };
                  var regionSix = {
                    lat: 11.266767, 
                    lng: 122.382202
                  };
                  var regionSeven = {
                    lat: 10.381927, 
                    lng: 123.920288
                  };
                  var regionEight = {
                    lat: 11.352951, 
                    lng: 124.93103
                  };
                  var regionNine = {
                    lat: 7.941732, 
                    lng: 123.074341
                  };
                  var regionTen = {
                    lat: 8.050527, 
                    lng: 124.172974
                  };
                  var regionEleven = {
                    lat: 7.451803, 
                    lng: 125.678101
                  };
                  var regionTwelve = {
                    lat: 6.786808, 
                    lng: 124.3927
                  };
                  var regionThirteen = {
                    lat: 8.984919, 
                    lng: 125.864868
                  };
                  var armm = {
                    lat: 6.033495, 
                    lng: 121.173706
                  };

                  var nir = {
                    lat: 9.88444,
                    lng: 122.942505
                  };
            /**
             * Add two markers showing the position of Liverpool and Manchester City football clubs.
             * Clicking on a marker opens an infobubble which holds HTML content related to the marker.
             * @param  {H.Map} map      A HERE Map instance within the application
             */
            function addInfoBubble(map) {
              var group = new H.map.Group();

              map.addObject(group);

              // add 'tap' event listener, that opens info bubble, to the group
              group.addEventListener('tap', function (evt) {
                // event target is the marker itself, group is a parent event target
                // for all objects that it contains
                var bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {
                  // read custom data
                  content: evt.target.getData()
                });
                // show info bubble
                ui.addBubble(bubble);
              }, false);

              addMarkerToGroup(group, ncr,
                '<div><a href=\'http://www.mcfc.co.uk\' >Manchester City</a>' +
                '</div><div >City of Manchester Stadium<br>Capacity: 48,000</div>');

              addMarkerToGroup(group, car,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionOne,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionTwo,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionThree,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionFourA,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionFourB,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionFive,
                '<div ><a href=\'/enigma/web/home/r5feed\' >Bicol Region</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionSix,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionSeven,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionEight,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionNine,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionTen,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionEleven,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionTwelve,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, regionThirteen,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, armm,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

              addMarkerToGroup(group, nir,
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

            }

            function moveMapToNCR(map){
              map.setCenter(ncr);
              map.setZoom(14);
            }

            /**
             * Boilerplate map initialization code starts below:
             */

            // initialize communication with the platform
            var platform = new H.service.Platform({
              'app_id': 'WZpWFIxuldegBsK3LCv1',
              'app_code' : 'voZ7B4yaZnJmFqMFzbIWUw',
              useCIT: true,
              useHTTPS: true
            });
            var defaultLayers = platform.createDefaultLayers();

            // initialize a map - this map is centered over Europe
            var map = new H.Map(document.getElementById('map'),
              defaultLayers.normal.map,{
              center: {lat: 12.391513, lng: 122.497559},
              zoom: 6
            });

            // MapEvents enables the event system
            // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
            var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

            // create default UI with layers provided by the platform
            var ui = H.ui.UI.createDefault(map, defaultLayers);

            // Now use the map as required...
            addInfoBubble(map);
              </script>
            </div>
            <div style="width:30%;" class="pull-right">
              <img src="/enigma/web/img/top10.png" style="width:100%;">
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015 <a href="http://localhost/enigma/web/home">Tour ME</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="/enigma/web/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/enigma/web/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/enigma/web/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/enigma/web/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/enigma/web/dist/js/demo.js"></script>
  </body>
</html>
