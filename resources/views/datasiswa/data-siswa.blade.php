<!DOCTYPE html>
<html lang="en">

<head>
    <title>Narlin</title>
    @include('pages.head')


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('pages.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('pages.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800"> 
                        <i class="fa-solid fa-house"></i> DATA SISWA 
                        </h1>
                       <div class="row">
                        
                            <div>
                                <div class="card-body">
                                    <a class="btn btn-info" href="#" role="button">
                                    <i class="fa-sharp fa-solid fa-house"></i> Home</a>
                                    <a class="btn btn-info" href="#" role="button">
                                    <i class="fa-solid fa-cloud"></i> Data Siswa</a>
                                </div>
                            </div>
                        
                       </div>
                       <div class="container" style="margin-top: 10px">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                <a href="tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">NIS</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tempat Lahir</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">AKSI</th>
                                        </tr>
                                    </thead>
                                    @foreach($siswa as $s)
                                    <tbody>
                                        <tr>
                                            <td>{{$s->id}}</td>
                                            <td>{{$s->nis}}</td>
                                            <td>{{$s->nama}}</td>
                                            <td>{{$s->tempat_lahir}}</td>
                                            <td>{{$s->tgl_lahir}}</td>
                                            <td>{{$s->jenis_kelamin}}</td>
                                            <td class="text-center">
                                                <a href="/" class="btn btn-sm btn-primary">EDIT</a>
                                                <a href="/" class="btn btn-sm btn-danger">HAPUS</a>
                                            </td>
                                        </tr>                
                                    </tbody>
                                    @endforeach
              </table>
            </div>
          </div>
      </div>
    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('pages.footer')
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

    @include('pages.script')
</body>

</html>

