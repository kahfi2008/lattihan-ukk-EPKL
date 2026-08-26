@if (session('success'))
 <div class="alert-sukses">{{ session('success') }}</div>
@endif
{{-- dipanggil di halaman lain --}}
@include('partials.alert')
