<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Feb 2022 04:49:56 GMT -->
<head>
    @include('layouts.admin.head')

    @livewireStyles

</head>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR - NAVEGACION LA PARTE DE ARRIBA LA PARTE DEL LOGIN  -->
    @include('layouts.admin.navegacion')
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    @include('layouts.admin.navegacion_2')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            @include('layouts.admin.sidebar')

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">

            <div class="layout-px-spacing">

                @yield('content')

            </div>

            @include('layouts.admin.footer')

        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('layouts.admin.scritps')
    @livewireScripts
    @yield('js')

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Feb 2022 04:52:19 GMT -->
</html>
