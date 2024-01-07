<!-- resources/views/dashboard.blade.php -->

@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Auth::user()->role === 'admin')
                <div class="col-md-6">
                    <div class="card mb-4" >
                        <div class="card-body">
                            <h5 class="card-title">Total Siswa</h5>
                            <p class="card-text">{{ $statistics['total_students'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Total Rayon</h5>
                            <p class="card-text">{{ $statistics['total_rayon'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Total Rombel</h5>
                            <p class="card-text">{{ $statistics['total_rombel'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Total User</h5>
                            <p class="card-text">{{ $statistics['total_administrators'] }}</p>
                        </div>
                    </div>
                </div>

            @elseif(Auth::user()->role === 'ps')
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Students in Rayon</h5>
                            <p class="card-text">{{ $statistics['total_students'] }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
