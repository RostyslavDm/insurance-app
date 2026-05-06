@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Admin Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-gray-500 text-sm">Total Users</p>
            <p class="text-3xl font-bold text-blue-600">0</p>
        </div>
        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-gray-500 text-sm">Active Roles</p>
            <p class="text-3xl font-bold text-purple-500">0</p>
        </div>
        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-gray-500 text-sm">New Users Today</p>
            <p class="text-3xl font-bold text-green-500">0</p>
        </div>
    </div>
</div>
@endsection