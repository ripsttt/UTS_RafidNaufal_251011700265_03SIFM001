@extends('layouts.app')

@section('content')
<h2 class="fw-bold mb-4 text-center">Daftar Lowongan Kerja</h2>
<div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 mb-5">
    @forelse($jobs as $job)
    <div class="col">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ asset('assets/images/' . $job->image) }}" class="card-img-top" alt="Cover Loker" style="height: 250px; object-fit: cover;">
            <div class="card-body d-flex flex-column text-center">
                <h5 class="card-title fw-bold">{{ $job->title }}</h5>
                <p class="card-text text-muted mb-1">{{ $job->company }}</p>
                <p class="card-text fw-bold text-success mb-3">{{ $job->salary }}</p>
                <a href="{{ url('/job/' . $job->id) }}" class="btn btn-primary mt-auto">Lihat Detail</a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center">
        <p>Belum ada data lowongan kerja.</p>
    </div>
    @endforelse
</div>
@endsection