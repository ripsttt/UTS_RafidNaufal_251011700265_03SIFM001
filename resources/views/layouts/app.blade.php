<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Lowongan Kerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%); min-height: 100vh;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">Lowongan Pekerjaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/jobs') }}">Daftar Lowongan</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>