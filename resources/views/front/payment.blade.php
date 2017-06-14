@extends('layouts.main')

@section('content')


    <div class="row" align="center">


        {!!$html!!}

        {{csrf_field()}}


    </div>
@endsection