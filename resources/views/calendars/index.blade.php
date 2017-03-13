@extends('layouts.app')

@section('content')

<div class="col-sm-8 blog-main">

    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}

</div><!-- /.blog-main -->


@endsection