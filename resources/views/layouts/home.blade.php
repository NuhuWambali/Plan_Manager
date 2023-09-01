<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('layouts._home_header')
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        @include('layouts._navbar')
        <!-- Left navbar-header -->
        @include('layouts._leftnavbar')
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="{{route('index')}}">Dashboard</a></li>
                            <li class="active">Plan Manager</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                @yield('content')
                @include('layouts._right_sidebar')
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> <?php echo date("Y") ?> &copy; Developed by Nuhu </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
@include('layouts._script')


<script>
    function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute("href");
        console.log(urlToRedirect);
        swal({
            title:"Are You Sure You?",
            text:"You Will Not Be Able To Undo",
            icon:"warning",
            buttons:true,
            dangerMode:true
        })
        .then((willCancel)=>{
            if(willCancel){
                window.location.href=urlToRedirect;
            }

        });
    }
</script>
</body>
</html>
