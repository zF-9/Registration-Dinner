<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--<script href="{{ asset('vendor/jquery/jquery-1.11.3.js') }}"></script>-->
  <script href="{{ asset('vendor/jquery/jquery-3.3.1.js') }}"></script>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Bootstrap core JavaScript-->
  <script href="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script href="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- testing -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

  <link href="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  
  <link href="{{ asset ('css/buttons-dataTables.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle" src="{{url('/storage/rageface.jpeg')}}">
              </a>

              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">MAJLIS APRESIASI SKIM SANGKUTAN DAN LATIHAN KUMPULAN 1/2019</h1>
          <p class="mb-4">Selamat Datang</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Senarai Pelatih SSL</h6>
            </div>
            <div class="card-body">


              <div class="table-responsive">
                <table class="table table-bordered" id="dataTableX" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Jabatan/Tempat Bertugas</th>
                          <th>Table</th>
                          <th>Time</th>
                          <th>Attendance</th>
                          <!--<th>Edit</th>-->
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Jabatan/Tempat Bertugas</th>
                          <th>Table</th>
                          <th>Time</th>
                          <th>Attendance</th>
                          <!--<th>Edit</th>-->
                        </tr>
                      </tfoot>
                  <tbody>
                    @foreach($penama as $key => $data)
                    <tr>
                      <td>{{ $data -> id }}</td>
                      <td><span style="font-weight: bold">{{ $data -> nama }}</span></td>
                      <td>{{ $data -> jabatan }}</td>
                      <td>{{ $data -> meja }}</td>  
                      <td>{{ $data -> jam }}</td>
                      <td>    
                        <!--<button id="xbutton" data-toggle="modal" data-target="#myModal" class="btn btn-success row-button" style="float:right; margin:12px 0px 12px 0px">
                          Daftar
                        </button>-->
                        <!--<button id="xbutton" class="row-button btn btn-warning" style="float:right; margin:12px 0px 12px 0px">
                            submit
                        </button>-->
                        {{ $loop->iteration }} of {{ $loop->count }}
                        <!-- iterate gives nombor loop: count gives the sum of loops -->
                      </td>
                      <!--<td>
                        {{ csrf_field() }} 
                        <a method="post" href="{{ action('FunctionController@attend', $data='id') }}" class="btn btn-warning">Edit</a>
                      </td>-->
                    </tr> 

                    @endforeach
                  </tbody>     
                </table>

              </div>



            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>I made &copy; this In 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- logout modal -->

  <!-- modal pendaftaran -->
  <div id="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title">Personal Info</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <p></p>
                <form action="/trytest" method="post">
                  {{ csrf_field() }} 
                  <div class="row">
                    <label style="margin-right: 93px">ID:</label>
                    <input name="p_id" class="col-xl-3" type="text" id="id_p">
                  </div>
                  <div class="row">
                    <label style="margin-right: 65px">Nama:</label>
                    <input name="p_nama" class="col-xl-9" type="text" id="nama_p">
                  </div>
                  <div class="row">
                    <label style="margin-right: 10px">Nombor Meja:</label>
                    <input name="p_meja" type="text" id="meja">
                  </div>
                  <div class="row">
                    <label style="margin-right: 69px">Masa:</label>
                    <input name="p_masa" id="masa_now">
                  </div>
                  <div class="row col-xl-12">
                      <input onclick="togglediv('updateBtn')" type="checkbox" name="p_attend" style="margin-left: 6px">
                      <label style="margin-top: 6px" class="col-md-6">
                        *Tick here to confirm
                      </label>
                  </div> 
                  <button id="updateBtn" style="display: none;float: right" type="submit" class="btn btn-primary">Confirm</button>  
                  </form>             
            </div>

            <div class="modal-footer">              
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        
      </div>
      </div>
    </div>  
    <!-- modal pendaftaran -->

  <script type="text/javascript">
      $(document).ready(function(){
          $("#dataTableX button").click(function(){ //button
              var trElem = $(this).closest("tr");// grabs the button parent tr element
              var firstTd = $(trElem).children("td")[0]; //takes the first td which would have your Id
              var secondTd = $(trElem).children("td")[1];
              var thirdTd = $(trElem).children("td")[2];
              //alert($(firstTd).text())
              $('#id_p').val($(firstTd).text());
              $('#nama_p').val($(secondTd).text());
              $('#meja').val($(thirdTd).text());

              var d = new Date();
              var x = d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();
              //document.getElementById("masa_now").innerHTML = x;
              $('#masa_now').val(x);

          })
      })
  </script>

  <script type="text/javascript">
    function togglediv(id) {
      var div = document.getElementById(id);
      div.style.display = div.style.display == "none" ? "block" : "none";
    } 
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset ('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset ('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset ('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset ('vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset ('js/chart-area.js')}}"></script>
  <script src="{{ asset ('js/chart-pie.js')}}"></script>
  <script src="{{ asset ('js/chart-bar.js') }}"></script>


    <!-- Page level plugins -->
  <script src="{{ asset ('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset ('js/datatables.js')}}"></script>

  <!-- button export script(s) -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>-->
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>  

</body>

</html>
