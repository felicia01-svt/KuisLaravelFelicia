<x-layout>
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card border-0 shadow-lg rounded-4">

                    {{-- Header --}}
                    <div class="card-header bg-warning text-dark text-center py-4 rounded-top-4">
                        <h2 class="fw-bold mb-1">
                            ✏ Edit Fakultas
                        </h2>

                        <p class="mb-0 small">
                            Perbarui informasi data fakultas
                        </p>
                    </div>

                    {{-- Body --}}
                    <div class="card-body p-4">

                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="/fakultas/{{ $fakultas->id }}" method="POST">
                            @csrf
                            @method("PUT")

                            {{-- Nama Fakultas --}}
                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Nama Fakultas
                                </label>

                                <input 
                                    type="text"
                                    name="nama_fakultas"
                                    class="form-control form-control-lg rounded-3"
                                    placeholder="Masukkan nama fakultas"
                                    value="{{ $fakultas->nama_fakultas }}"
                                    required
                                >

                            </div>

                            {{-- Nama Dekan --}}
                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Nama Dekan
                                </label>

                                <input 
                                    type="text"
                                    name="nama_dekan"
                                    id="nama_dekan"
                                    class="form-control form-control-lg rounded-3"
                                    placeholder="Masukkan nama dekan"
                                    value="{{ $fakultas->nama_dekan }}"
                                    required
                                >

                            </div>

                            {{-- Tombol --}}
                            <div class="d-flex gap-2">

                                <a href="/fakultas" 
                                   class="btn btn-secondary rounded-3 px-4">
                                    ← Kembali
                                </a>

                                <button 
                                    type="submit"
                                    class="btn btn-warning text-white rounded-3 px-4 shadow-sm">
                                    💾 Update
                                </button>

                            </div>

                        </form>

                    </div>

                    {{-- Footer --}}
                    <div class="card-footer bg-light text-center rounded-bottom-4">
                        <small class="text-muted">
                            Sistem Informasi Fakultas
                        </small>
                    </div>

                </div>

            </div>
        </div>

    </div>
</x-layout>