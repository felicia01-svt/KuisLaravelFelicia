<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                {{-- =========================
                     TOP BANNER
                ========================== --}}
                <div class="rounded-5 overflow-hidden shadow-lg border-0">

                    {{-- HEADER --}}
                    <div class="p-5 text-white position-relative"
                         style="background:linear-gradient(135deg,#7c3aed,#4338ca);">

                        <div class="position-absolute top-0 end-0 me-4 mt-3 opacity-25"
                             style="font-size:100px;">
                            🎓
                        </div>

                        <span class="badge bg-light text-dark px-3 py-2 rounded-pill mb-3">
                            DETAIL DATA
                        </span>

                        <h1 class="fw-bold mb-2">

                            {{ $fakultas->nama_fakultas }}

                        </h1>

                        <p class="mb-0 opacity-75">

                            Informasi lengkap mengenai fakultas
                            dan pimpinan akademik.

                        </p>

                    </div>


                    {{-- CONTENT --}}
                    <div class="bg-white p-5">

                        <div class="row g-4">

                            {{-- LEFT --}}
                            <div class="col-md-6">

                                <div class="border rounded-5 p-4 h-100">

                                    <small class="text-muted d-block mb-2">
                                        Nama Fakultas
                                    </small>

                                    <h4 class="fw-bold text-dark mb-0">

                                        {{ $fakultas->nama_fakultas }}

                                    </h4>

                                </div>

                            </div>


                            {{-- RIGHT --}}
                            <div class="col-md-6">

                                <div class="border rounded-5 p-4 h-100">

                                    <small class="text-muted d-block mb-2">
                                        Nama Dekan
                                    </small>

                                    <h4 class="fw-bold text-dark mb-0">

                                        {{ $fakultas->nama_dekan }}

                                    </h4>

                                </div>

                            </div>

                        </div>


                        {{-- INFO BOX --}}
                        <div class="mt-4 rounded-5 p-4"
                             style="background:#f8fafc;">

                            <div class="d-flex align-items-center gap-3">

                                <div class="rounded-circle d-flex
                                            align-items-center justify-content-center"
                                     style="width:60px;height:60px;
                                            background:#ede9fe;
                                            font-size:24px;">

                                    📘

                                </div>

                                <div>

                                    <h6 class="fw-bold mb-1">
                                        Informasi Akademik
                                    </h6>

                                    <small class="text-muted">

                                        Data ini digunakan untuk sistem
                                        administrasi fakultas universitas.

                                    </small>

                                </div>

                            </div>

                        </div>


                        {{-- BUTTON --}}
                        <div class="d-flex flex-wrap gap-3 mt-5">

                            <a href="/fakultas"
                               class="btn px-4 py-3 rounded-4 fw-semibold"
                               style="background:#e2e8f0;
                                      color:#0f172a;">

                                ← Kembali

                            </a>

                            <a href="/fakultas/{{ $fakultas->id }}/edit"
                               class="btn px-4 py-3 rounded-4 text-white fw-semibold"
                               style="background:linear-gradient(135deg,#f59e0b,#f97316);">

                                ✏ Edit Data

                            </a>

                        </div>

                    </div>


                    {{-- FOOTER --}}
                    <div class="bg-light border-top text-center py-3">

                        <small class="text-muted">

                            Sistem Informasi Fakultas • Laravel & Bootstrap 5

                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>