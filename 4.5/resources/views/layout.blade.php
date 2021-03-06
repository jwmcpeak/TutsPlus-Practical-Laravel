<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ticket System</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">Support Tickets</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="/">
              <i class="fa fa-fw fa-home"></i>
              <span class="nav-link-text">
                Home</span>
            </a>
        </li>
        @if (Auth::check())
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="{{ url('/tickets') }}">
              <i class="fa fa-fw"></i>
              <span class="nav-link-text">
                Tickets</span>
            </a>
        </li>

        @endif
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contact Us">
          <a class="nav-link" href="#">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="nav-link-text">
                Contact Us</span>
            </a>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          @if (Auth::check())
          <a class="nav-link" href="{{ url ('/logout') }}">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          @else
          <a class="nav-link" href="{{ url ('/login') }}">
              Login</a>
          @endif
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="sticky-footer">
    <div class="container">
      <div class="text-center">
        <small>Copyright &copy; Our Ticket System</small>
      </div>
    </div>
  </footer>

  <!-- Scroll to Top Button -->


  <!-- Logout Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/popper/popper.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="/vendor/chart.js/Chart.min.js"></script>
  <script src="/vendor/datatables/jquery.dataTables.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for this template -->


</body>

</html>