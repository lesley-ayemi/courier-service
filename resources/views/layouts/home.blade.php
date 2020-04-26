<!DOCTYPE html>
<html>
    @include('layouts.includes.header')
    <body id="home">

        @include('layouts.includes.loader')


        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- Header -->
            <header class="header-main">

                <!-- Header Topbar -->

                @include('layouts.includes.header_topbar')
                <!-- /.Header Topbar -->

                <!-- Header Logo & Navigation -->

                @include('layouts.includes.header_navbar')
                <!-- /.Header Logo & Navigation -->

            </header>
            <!-- /.Header -->

            <!-- Content Wrapper -->

            @yield('content')

            <!-- /.Content Wrapper -->

            <!-- Footer -->

            @include('layouts.includes.footer')
            <!-- /.Footer -->


        </main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->

        @include('layouts.includes.popup_login')

        <!-- /Popup: Login --> 

        <!-- Search Popup -->

        @include('layouts.includes.search_popup')
        <!-- / Search Popup -->

        <!-- Javascripts  -->

        @include('layouts.includes.scripts')

    </body>

</html>
