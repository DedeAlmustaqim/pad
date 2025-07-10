@extends('layouts.app')

@section('content')
    {{ session('name') }}
    {{ session('email') }}
    {{ session('role') }}
@endsection
