
@extends('frontLayout.app')
@section('title')
Home Page
@stop

@section('style')

@stop
@section('content')
<div class="content">
<div class="title m-b-md">
    <h2>QRCODE Login</h2>
    
</div>
@if (Sentinel::check() )
    <h2>Welcome {{Sentinel::getUser()->first_name}}</h3>
     <h4>Your name : {{Sentinel::getUser()->first_name}} <br></h4>
     <h4>Last name : {{Sentinel::getUser()->last_name}} <br></h4>
     <h4>E-mail : {{Sentinel::getUser()->email}} <br> </h4>
    @endif


</div>
@endsection

@section('scripts')


@endsection
