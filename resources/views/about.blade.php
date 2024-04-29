@extends('layouts.main')

@section('container')
@foreach ( $about as $about)
       <h6 class="m-auto">
       <a href="/about/{{$about["slug"]}}">{{$about["tittle"]}}</a>
       </h6>
       <p> {{$about["body"]}}</p>
       @endforeach
       
   @endsection
   