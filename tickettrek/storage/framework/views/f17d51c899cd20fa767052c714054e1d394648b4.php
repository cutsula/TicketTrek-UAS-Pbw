<?php if(!session('admin')): ?>
    <script>
        alert('Anda Harus Login');
        location = '<?php echo e(url('home/login')); ?>';
    </script>
<?php endif; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ticket Trek - Admin</title>
    <link href="<?php echo e(asset('assets/admin/css/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="<?php echo e(asset('assets/admin/css/css/sb-admin-2.min.css')); ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet"
        href="<?php echo e(asset('assets/admin/assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css')); ?>">
    <link href="<?php echo e(asset('assets/admin/css/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet"
        type="text/css">
    <script src="<?php echo e(asset('assets/admin/assets/ckeditor/ckeditor.js')); ?>"></script>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('foto/logo.png')); ?>">

</head>

<body id="page-top">

    <div id="wrapper">
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #764ca3;">
            <a class="sidebar-brand d-flex align-items-center justify-content-center text-white"
                href="<?php echo e(url('admin')); ?>">
                <div class="sidebar-brand-text mx-3">Ticket Trek</sup></div>
            </a>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo e(url('admin')); ?>">
                    <i class="fas fa-fw fa-book text-white"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo e(url('admin/wisata')); ?>">
                    <i class="fas fa-fw fa-pen text-white"></i>
                    <span>Daftar Wisata</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo e(url('admin/transaksi')); ?>">
                    <i class="fas fa-fw fa-home text-white"></i>
                    <span>Transaksi</span></a>
            </li>
            <hr class="sidebar-divider">
            
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?');" class="nav-link"
                                href="<?php echo e(url('admin/logout')); ?>">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Keluar</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <div id="page-inner">
                        <?php if(Session::has('alert')): ?>
                            <div class="alert alert-primary">
                                <?php echo e(Session::get('alert')); ?>

                            </div>
                        <?php endif; ?>
                        <?php echo $__env->yieldContent('page-content'); ?>
                    </div>
                </div>
            </div>
            <script src="<?php echo e(asset('assets/admin/assets/js/jquery-1.10.2.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/js/bootstrap.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/js/jquery.metisMenu.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/js/morris/raphael-2.1.0.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/js/morris/morris.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/css/js/sb-admin-2.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/js/jquery.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/js/bootstrap.bundle.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js')); ?>">
            </script>
            <script src="<?php echo e(asset('assets/admin/assets/DataTables/JSZip-2.5.0/jszip.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/DataTables/pdfmake-0.1.36/pdfmake.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/DataTables/pdfmake-0.1.36/vfs_fonts.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/DataTables/Buttons-1.5.6/js/buttons.html5.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/DataTables/Buttons-1.5.6/js/buttons.print.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/admin/assets/DataTables/Buttons-1.5.6/js/buttons.colvis.min.js')); ?>"></script>
            <script>
                $(document).ready(function() {
                    var table = $('#table').DataTable({
                        responsive: true,
                        scrollX: true,
                        buttons: ['csv', 'print', 'excel', 'pdf'],
                        dom: "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
                            "<'row'<'col-md-12'tr>>" +
                            "<'row'<'col-md-5'i><'col-md-7'p>>",
                        lengthMenu: [
                            [5, 10, 25, 50, 100, -1],
                            [5, 10, 25, 50, 100, "ALL"]
                        ]
                    });

                    table.buttons().container()
                        .appendTo('#table_wrapper .col-md-5:eq(0)');
                });
            </script>
</body>

</html>
<?php /**PATH /Users/cutsula/Downloads/tickettrek/resources/views/admin/templates/index.blade.php ENDPATH**/ ?>