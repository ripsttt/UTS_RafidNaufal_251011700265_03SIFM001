@extends('layouts.app')

@section('content')
<div class="container text-center py-5">
    <img src="{{ asset('assets/images/' . $job->image) }}" class="img-fluid rounded shadow mb-4" style="max-height: 400px; object-fit: cover;" alt="Gambar Detail">
    
    <h2 class="fw-bold mb-1">{{ $job->title }}</h2>
    <p class="text-muted fs-5">{{ $job->company }} | {{ $job->location }}</p>
    <p class="text-success fw-bold fs-4">{{ $job->salary }}</p>
    
    <div class="text-start mx-auto mt-4 p-4 bg-white shadow-sm rounded" style="max-width: 700px;">
        <p><strong>Tipe Pekerjaan:</strong> <span class="badge bg-info text-dark">{{ $job->type }}</span></p>
        <p><strong>Tanggal Posting:</strong> {{ $job->posted_date }}</p>
        <p><strong>Persyaratan:</strong><br>{{ $job->requirements }}</p>
        <p><strong>Deskripsi Pekerjaan:</strong><br>{{ $job->description }}</p>
    </div>

    <div class="mt-4">
        <a href="{{ url('/') }}" class="btn btn-secondary px-4">Kembali</a>
    </div>
</div>
@endsection