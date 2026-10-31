@extends('layouts.app')

@section('content')
<div class="p-5 text-center mt-4 rounded shadow-sm"s style="background-color: #f4f0e6;">
    <h3 class="fst-italic">Welcome To</h3>
    <h1 class="display-4 fw-bold" style="font-family: serif; color: #4a3b32;">Portal Lowongan Kerja</h1>
    <div class="mt-4 mb-4" style="color: #5c4d43;">
        <p class="mb-0">Nama: Rafid Naufal Abi Zainal</p>
        <p class="mb-0">NIM: 251011700265</p>
        <p class="mb-0">Prodi Sistem Informasi</p>
        <p class="fw-bold mt-2">Dosen: AFIF EFENDI</p>
    </div>
    <a href="{{ url('/jobs') }}" class="btn btn-primary btn-lg px-5 shadow">Lanjut Untuk Melihat Lowongan &rarr;</a>
</div>
@endsection