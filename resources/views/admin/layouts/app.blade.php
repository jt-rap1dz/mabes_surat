@include('admin.layouts.header')
@include('admin.layouts.sidebar')
{{-- memanggil file header dan sidebar --}}
<div class="container-fluid px-4">
    @yield('konten')
</div>
@include('admin.layouts.footer')
<!-- memanggil file footer -->