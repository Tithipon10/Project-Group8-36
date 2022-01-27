<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="scrollbar">

@include('layouts/layouts_v2/head')

<body>
    <div class="main">
        <div class="no-highlight">
            @include('layouts/layouts_v2/BG')
            @include('layouts/layouts_v2/header')
            @yield('content')
            {{-- @include('layouts/log&register') --}}
            {{-- @include('layouts/footer') --}}
        </div>
    </div>

</body>
{{-- Script --}}
<script src="{{ asset('js/script.js') }}" defer></script>
<script src="https://kit.fontawesome.com/e391ce7786.js" crossorigin="anonymous"></script>

<!--   Core   -->
<script src="{{ asset('admin/assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!--   Optional JS   -->
<script src="{{ asset('admin/assets/js/plugins/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
<!--   Argon JS   -->
<script src="{{ asset('admin/assets/js/argon-dashboard.min.js?v=1.1.2') }}"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-dashboard-free"
        });
</script>

</html>
