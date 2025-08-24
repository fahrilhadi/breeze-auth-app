@extends('master')

@section('title')
    Dashboard | Breeze Auth App
@endsection

@section('main-content')
    <div class="max-w-2xl px-4 py-6 bg-white border border-gray-200 rounded-xl shadow-lg">
        <p class="px-4 py-6 text-center text-gray-500">Welcome to dashboard, {{ Auth::user()->name }}</p>
    </div>
@endsection