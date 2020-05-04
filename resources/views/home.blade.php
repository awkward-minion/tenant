@extends('layouts.app')

@section('content')

@if (session('status'))
        {{ session('status') }}
@endif

<div id="core-app"></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  type="text/javascript">
    $(document).ready(function() {
        console.log('ready!!')
        
        var admin = {!! json_encode(Auth::guard('admin')->user(),  JSON_HEX_TAG) !!};
        window.localStorage.setItem('user-chat',  JSON.stringify(admin))
    });
</script>
@endsection
