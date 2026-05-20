<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Fakultas</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Outfit', sans-serif;
            background: #eef2ff;
            color: #1e293b;
        }

        /* =======================
           NAVBAR
        ======================= */
        .navbar-custom{
            background: white;
            padding: 18px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .brand-logo{
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg,#7c3aed,#4f46e5);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 20px;
        }

        .brand-text{
            font-size: 20px;
            font-weight: 700;
            color: #0f172a;
        }

        .nav-link{
            color: #475569 !important;
            font-weight: 500;
            padding: 10px 16px !important;
            border-radius: 10px;
            transition: 0.3s;
        }

        .nav-link:hover{
            background: #ede9fe;
            color: #4f46e5 !important;
        }

        .btn-main{
            background: linear-gradient(135deg,#7c3aed,#4f46e5);
            border: none;
            color: white;
            border-radius: 14px;
            padding: 11px 22px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-main:hover{
            transform: scale(1.03);
            color: white;
        }

        /* =======================
           HERO
        ======================= */
        .hero{
            padding: 70px 0 40px;
        }

        .hero-box{
            background: linear-gradient(135deg,#312e81,#4f46e5);
            border-radius: 35px;
            padding: 60px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-box::after{
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            top: -80px;
            right: -60px;
        }

        .hero-title{
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .hero-subtitle{
            color: rgba(255,255,255,0.85);
            margin-top: 20px;
            font-size: 1.05rem;
            max-width: 600px;
        }

        .hero-card{
            background: white;
            border-radius: 24px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            margin-top: -50px;
            position: relative;
            z-index: 5;
        }

        /* =======================
           CARD
        ======================= */
        .card-modern{
            border: none;
            border-radius: 24px;
            padding: 25px;
            background: white;
            transition: 0.3s;
            box-shadow: 0 8px 20px rgba(15,23,42,0.05);
        }

        .card-modern:hover{
            transform: translateY(-5px);
        }

        .icon-box{
            width: 60px;
            height: 60px;
            border-radius: 18px;
            background: #ede9fe;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* =======================
           CONTENT
        ======================= */
        main{
            min-height: 100vh;
            padding-bottom: 50px;
        }

        .content-section{
            margin-top: 40px;
        }

        /* =======================
           FOOTER
        ======================= */
        footer{
            background: #0f172a;
            color: rgba(255,255,255,0.7);
            padding: 30px 0;
        }

        /* =======================
           RESPONSIVE
        ======================= */
        @media(max-width: 768px){

            .hero-box{
                padding: 40px 25px;
            }

            .hero-title{
                font-size: 2rem;
            }

            .hero-card{
                margin-top: 20px;
            }

        }

    </style>

</head>

<body>

    <!-- =======================
         NAVBAR
    ======================== -->
    <nav class="navbar navbar-expand-lg navbar-custom">

        <div class="container">

            <a href="/"
               class="d-flex align-items-center gap-3 text-decoration-none">

                <div class="brand-logo">
                    SI
                </div>

                <div class="brand-text">
                    Sistem Fakultas
                </div>

            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarMenu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/fakultas" class="nav-link">
                            Fakultas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('prodi.index') }}"
                           class="nav-link">
                            Program Studi
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <a href="/fakultas/create"
                           class="btn btn-main">
                            + Tambah Data
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- =======================
         HERO
    ======================== -->
    <section class="hero">

        <div class="container">

            <div class="hero-box">

                <div class="row align-items-center">

                    <div class="col-lg-7">

                        <h1 class="hero-title">
                            Kelola Data Fakultas Lebih Mudah
                        </h1>

                        <p class="hero-subtitle">
                            Sistem informasi berbasis Bootstrap 5 dengan
                            tampilan modern, clean, dan responsive untuk
                            pengelolaan data fakultas serta program studi.
                        </p>

                        <div class="d-flex gap-3 mt-4 flex-wrap">

                            <a href="/fakultas"
                               class="btn btn-light px-4 py-2 rounded-4 fw-semibold">
                                Lihat Fakultas
                            </a>

                            <a href="{{ route('prodi.index') }}"
                               class="btn btn-outline-light px-4 py-2 rounded-4">
                                Data Prodi
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD INFO -->
            <div class="hero-card">

                <div class="row g-4">

                    <div class="col-md-4">

                        <div class="card-modern h-100">

                            <div class="icon-box">
                                🎓
                            </div>

                            <h5 class="fw-bold">
                                Data Fakultas
                            </h5>

                            <p class="text-muted mb-0">
                                Mengelola seluruh data fakultas secara cepat
                                dan terstruktur.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="card-modern h-100">

                            <div class="icon-box">
                                📘
                            </div>

                            <h5 class="fw-bold">
                                Program Studi
                            </h5>

                            <p class="text-muted mb-0">
                                Menyimpan dan mengatur data program studi
                                dengan mudah.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="card-modern h-100">

                            <div class="icon-box">
                                ⚡
                            </div>

                            <h5 class="fw-bold">
                                Responsive UI
                            </h5>

                            <p class="text-muted mb-0">
                                Tampilan modern yang nyaman digunakan di semua
                                perangkat.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- =======================
         MAIN CONTENT
    ======================== -->
    <main>

        <div class="container content-section">

            {{ $slot }}

        </div>

    </main>

    <!-- =======================
         FOOTER
    ======================== -->
    <footer>

        <div class="container text-center">

            <p class="mb-1 fw-semibold">
                Sistem Informasi Fakultas
            </p>

            <small>
                © 2026 All Rights Reserved
            </small>

        </div>

    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>