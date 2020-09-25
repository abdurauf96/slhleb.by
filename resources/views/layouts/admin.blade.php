
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Окно Администратора</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/fontawesome/css/all.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/css/fileinput.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/themes/explorer/theme.min.css" rel="stylesheet" type="text/css" />
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/my.css" rel="stylesheet" type="text/css" />
    <link href="/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">
      
      <header class="main-header">
        <a href="/admin/dashboard" class="logo">
            <img src="/frontend/images/logo.png" style="width:33px;" alt="">
            <b>Админка</b></a>
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
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/frontend/images/logo.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Слуцкий хлебозавод</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/frontend/images/logo.png" class="img-circle" alt="User Image" />
                    <p>
                      Слуцкий хлебозавод
                      <small>2020</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Профиль</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ route('logout') }}" class="btn btn-default btn-flat"   onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Выйти</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <!--<img src="/dist/img/admin.jpg" class="img-circle" alt="User Image" />-->
            </div>
            <div class="pull-left info">
              <!--<p>Абдурауф Сайдалиев</p>-->

              <a href="#"><i class="fa fa-circle text-success"></i> Online </a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          
          <ul class="sidebar-menu "> 
            @foreach($laravelAdminMenus->menus as $section)
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>{{ $section->section }}</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              @if($section->items)
              <ul class="treeview-menu" >
                @foreach($section->items as $menu)
                <li><a class="menu-url" href="{{ url($menu->url) }}"><i class="fa fa-circle-o"></i> {{ $menu->title }}</a></li>
                @endforeach
              </ul>
              @endif
            </li>
            @endforeach
          </ul>
          
          <!--<ul class="sidebar-menu">-->
            
          
          <!--  @foreach($laravelAdminMenus->menus as $section)-->
          <!--  <li class="treeview">-->
          <!--    <a href="#">-->
          <!--      <i class="fa fa-edit"></i> <span>{{ $section->section }}</span>-->
          <!--      <i class="fa fa-angle-left pull-right"></i>-->
          <!--    </a>-->
          <!--    @if($section->items)-->
          <!--    <ul class="treeview-menu" style="display: none;">-->
          <!--      @foreach($section->items as $menu)-->
          <!--      <li @if('/'.Request::path()==$menu->url) class="active" @endif ><a href="{{ url($menu->url) }}"><i class="fa fa-circle-o"></i> {{ $menu->title }}</a></li>-->
          <!--      @endforeach-->
          <!--    </ul>-->
          <!--    @endif-->
          <!--  </li>-->
          <!--  @endforeach-->
          <!--</ul>-->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <main class="py-4">
          @if (Session::has('flash_message'))
              <div class="container">
                  <div class=" col-lg-4 alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      {{ Session::get('flash_message') }}
                  </div>
              </div>
          @endif
        </main>
        <!-- Main content -->
        <section class="content">
             @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
       
      </footer>
    </div><!-- ./wrapper -->
    
    <!-- jQuery 2.1.3 -->
    <script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='/plugins/fastclick/fastclick.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/fileinput.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/themes/explorer/theme.min.css'></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js" type="text/javascript"></script>
    <script src="/js/my.js" type="text/javascript"></script>
    <script src="/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/js/dataTables.bootstrap.js" type="text/javascript"></script>
  
    
    {{-- <script type="text/javascript">
        $( document ).ready(function() {
            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();

                var tableFields = $('.table-fields'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(tableFields);

                newEntry.find('input').val('');
                tableFields.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-minus"></span>');
            }).on('click', '.btn-remove', function(e) {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });

        });
    </script> --}}
    <script>
      $('#title').keyup(function(e) {
        $.get('/admin/check_slug', 
          { 'title': $(this).val() }, 
          function( data ) {
            $('#slug').val(data.slug);
          }
        );
      });
    </script>
    @yield('scripts')
    
  </body>
</html>