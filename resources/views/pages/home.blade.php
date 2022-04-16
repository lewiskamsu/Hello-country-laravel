@extends('app')

@section('title',config('app.name'))

@section('content')
       <img src="{{asset('/images/cameroun_chine1.jpg')}}" alt="Relation Cameroun_chine" width="120px" heigth="120px"
       class="mt-8 rounded shadow-md ">
       <h1 class="mt-3 text-3xl sm:text-5xl font-semibold text-indigo-600 ">Hello from Cameroun!</h1>
       <p class="text-lg text-gray-800">It's currently {{date('h:i:s A')}}.</p>

@endsection
