@extends('layouts.copy_add')

@section('title') {{ $data['0']['position'] }} @endsection

@section('content')

    @foreach($data as $el)
        @include('inc.job-inc')
    @endforeach

@endsection
