<!DOCTYPE html>
<html lang="en">

<head>
    @include('block.head')   
</head>

<body class="title ">
    {{-- nav bar --}}    
    @include('block.bar')
    {{-- end nav bar --}}
    <br>

    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- <!-- Content Header (Page header) -->
        @include('cpadmin.blocks.header') --}}

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            @yield('content')
        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->


    <!-- Footer -->
    @include('block.footer')
    <!--End Footer -->

    
</body>

</html>