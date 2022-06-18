
<!DOCTYPE html>
<html lang="en">

    @include('layouts.partials.head')

<body class="">
 <!--Sidebar-->
    @include('layouts.partials.sidebar')

  <div class="main-content">
    <!-- Navbar -->
    @include('layouts.partials.nav')

      <!-- End Navbar -->
    <!-- Header -->
    <div class="header  pb-5 pt-5 pt-md-8" style="min-height: auto ; background-image: url(/img/header-bg.png); background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-default opacity-5"></span>
      <div class="container-fluid">

      @yield('content')
      </div>
    </div>

</div>


</div>



      @include('layouts.partials.script')

  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>


</body>

</html>
