<x-layout>

    <div class="container py-5">

        {{-- =========================
             TOP HEADER
        ========================== --}}
        <div class="row align-items-center mb-5">

            <div class="col-lg-8">

                <div class="d-flex align-items-center gap-3">

                    <div class="rounded-4 d-flex align-items-center justify-content-center"
                         style="width:70px;height:70px;
                                background:linear-gradient(135deg,#0ea5e9,#2563eb);
                                font-size:30px;color:white;">

                        🎓

                    </div>

                    <div>

                        <h2 class="fw-bold mb-1"
                            style="color:#0f172a;">

                            Data Fakultas Universitas

                        </h2>

                        <p class="text-muted mb-0">

                            Kelola informasi fakultas dan dekan
                            secara terstruktur

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                <a href="/fakultas/create"
                   class="btn px-4 py-3 rounded-4 fw-semibold text-white shadow"
                   style="background:linear-gradient(135deg,#2563eb,#38bdf8);">

                    + Tambah Fakultas

                </a>

            </div>

        </div>


        {{-- =========================
             FILTER CARD
        ========================== --}}
        <div class="card border-0 rounded-5 shadow-sm mb-4">

            <div class="card-body p-4">

                <div class="row align-items-center g-3">

                    <div class="col-md-8">

                        <div class="position-relative">

                            <input type="text"
                                   class="form-control rounded-4 border-0 ps-5 py-3"
                                   placeholder="Cari fakultas..."
                                   style="background:#f1f5f9;">

                            <span class="position-absolute top-50 start-0 translate-middle-y ps-3">
                                🔍
                            </span>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="text-md-end">

                            <span class="badge rounded-pill px-4 py-3 fs-6"
                                  style="background:#dbeafe;color:#1d4ed8;">

                                Total :
                                {{ count($fakultas) }} Fakultas

                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================
             TABLE SECTION
        ========================== --}}
        <div class="card border-0 rounded-5 shadow-lg overflow-hidden">

            {{-- TABLE HEADER --}}
            <div class="p-4 text-white"
                 style="background:linear-gradient(135deg,#0f172a,#1e293b);">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h4 class="fw-bold mb-1">
                            List Data Fakultas
                        </h4>

                        <small class="opacity-75">

                            Informasi fakultas universitas

                        </small>

                    </div>

                    <div class="fs-2">
                        📚
                    </div>

                </div>

            </div>


            {{-- TABLE --}}
            <div class="table-responsive">

                <table class="table align-middle mb-0">

                    <thead style="background:#f8fafc;">

                        <tr>

                            <th class="py-4 px-4 text-muted fw-semibold">
                                No
                            </th>

                            <th class="py-4 text-muted fw-semibold">
                                Fakultas
                            </th>

                            <th class="py-4 text-muted fw-semibold">
                                Dekan
                            </th>

                            <th class="py-4 text-center text-muted fw-semibold">
                                Action
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse ($fakultas as $item)

                            <tr style="border-bottom:1px solid #f1f5f9;">

                                {{-- NUMBER --}}
                                <td class="px-4">

                                    <div class="rounded-circle
                                                d-flex align-items-center
                                                justify-content-center fw-bold"
                                         style="width:40px;height:40px;
                                                background:#eff6ff;
                                                color:#2563eb;">

                                        {{ $loop->iteration }}

                                    </div>

                                </td>

                                {{-- NAMA FAKULTAS --}}
                                <td>

                                    <div class="fw-bold text-dark mb-1">

                                        {{ $item->nama_fakultas }}

                                    </div>

                                    <small class="text-muted">

                                        Fakultas aktif universitas

                                    </small>

                                </td>

                                {{-- DEKAN --}}
                                <td>

                                    <span class="badge rounded-pill px-3 py-2"
                                          style="background:#ecfeff;
                                                 color:#0891b2;">

                                        {{ $item->nama_dekan }}

                                    </span>

                                </td>

                                {{-- BUTTON --}}
                                <td>

                                    <div class="d-flex justify-content-center
                                                flex-wrap gap-2">

                                        {{-- DETAIL --}}
                                        <a href="/fakultas/{{ $item->id }}"
                                           class="btn btn-sm rounded-4 px-3"
                                           style="background:#dbeafe;
                                                  color:#1d4ed8;">

                                            Detail

                                        </a>

                                        {{-- EDIT --}}
                                        <a href="/fakultas/{{ $item->id }}/edit"
                                           class="btn btn-sm rounded-4 px-3"
                                           style="background:#fef3c7;
                                                  color:#d97706;">

                                            Edit

                                        </a>

                                        {{-- DELETE --}}
                                        <form action="/fakultas/{{ $item->id }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin hapus data?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm rounded-4 px-3"
                                                    style="background:#fee2e2;
                                                           color:#dc2626;">

                                                Hapus

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="4"
                                    class="text-center py-5">

                                    <div class="mb-3 fs-1">
                                        📭
                                    </div>

                                    <h5 class="fw-bold text-muted">
                                        Data Fakultas Kosong
                                    </h5>

                                    <p class="text-muted mb-0">

                                        Belum ada data yang tersedia

                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            {{-- FOOTER --}}
            <div class="p-4 text-center"
                 style="background:#f8fafc;">

                <small class="text-muted">

                    Sistem Informasi Fakultas • Bootstrap 5 UI

                </small>

            </div>

        </div>

    </div>

</x-layout>