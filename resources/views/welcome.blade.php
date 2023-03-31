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
                    <h1 class="h3 mb-4 text-gray-800">Sistem Informasi Akuntansi Keuangan Kelompok Bermain Ananda Rasya
                    </h1>
                    <div class="row">

                        <div>
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <button type="button" class="btn btn-danger" style="width: 14rem; height: 10rem;">Data Siswa
                                        <i class="fa-solid fa-user fa-2xl"></i>
                                    </button>
                                </h5>        
                            </div>                      
                        </div>
                        <div>
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <button type="button" class="btn btn-warning" style="width: 14rem; height: 10rem;">Jurnal Umum
                                    <i class="fa-solid fa-file fa-2xl"></i>
                                    </button>
                                </h5>        
                            </div>                      
                        </div>
                        <div>
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <button type="button" class="btn btn-primary" style="width: 14rem; height: 10rem;">Laba Rugi
                                    <i class="fa-solid fa-rectangle-list fa-2xl"></i>
                                    </button>
                                </h5>        
                            </div>                      
                        </div>
                        <div>
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <button type="button" class="btn btn-success" style="width: 14rem; height: 10rem;">Arus Kas
                                    <i class="fa-solid fa-arrows-rotate fa-2xl"></i>
                                    </button>
                                </h5>        
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