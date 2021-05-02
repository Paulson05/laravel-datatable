<!DOCTYPE html>
<html>

<style>
   
</style>
@include('template.partials.head')
<body class="text-center " style="width: 100%; height: 100%; !important;">
@include('template.partials.navbar')

<div class="" style="z-index: 2; top: 0px;">

  
    @yield('content')
    @include('template.partials.footer')
</div>
 @include('template.partials.script')

@include('sweetalert::alert')
</body>

</html>
