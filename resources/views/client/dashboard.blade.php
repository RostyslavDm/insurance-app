@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Client Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-gray-500 text-sm">My Policies</p>
            <p class="text-3xl font-bold text-blue-600">0</p>
        </div>
        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-gray-500 text-sm">Pending Applications</p>
            <p class="text-3xl font-bold text-yellow-500">0</p>
        </div>
        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-gray-500 text-sm">Active Policies</p>
            <p class="text-3xl font-bold text-green-500">0</p>
        </div>
    </div>
</div>
@endsection