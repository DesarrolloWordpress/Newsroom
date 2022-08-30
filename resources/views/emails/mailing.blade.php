{{-- @extends('layouts.main_home')
@section('styles')
    <link href="css/home.css" rel="stylesheet">
    <style>
    </style>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script></script>
@endsection
@section('content') --}}
<div class="informacion_news container-md">
    <div class="row">
        <div class="col-xl-4 col-md-12 mt-xl-0 mt-md-4">
            <h5>Bienvenido a nuestro mailing</h5>
        </div>
        <div class="col-xl-4 col-md-12 mt-xl-0 mt-md-4">
            <p>Correo:<strong>{{ $contacto['mailmailing'] }}</strong></p>
            <hr>
            <p><a href="https://www.reyma.com.mx/contactanos">www.reyma.com.mx/contactanos</a></p>
        </div>
    </div>
</div>
{{-- @endsection --}}
