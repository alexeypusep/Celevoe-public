@extends('layouts.copy_add')

@section('title', 'Должности направления')

@section('content')

    @if(!empty($data['0']['name_dir']))
        <h2 class="text-center mb-5">Должности направления {{ $data['0']['name_dir'] }}</h2>

        @foreach($data as $el)
            @include('inc.job-inc')
        @endforeach
    @else
        <h2 class="text-center mb-5">В данный момент по напралению нет должностей.</h2>
    @endif

@endsection
