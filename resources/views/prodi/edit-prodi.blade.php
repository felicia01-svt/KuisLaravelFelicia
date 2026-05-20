<x-layout>
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card border-0 shadow-lg rounded-4">

                    {{-- Header --}}
                    <div class="card-header bg-warning text-dark text-center py-4 rounded-top-4">
                        <h2 class="fw-bold mb-1">
                            ✏ Edit Program Studi
                        </h2>

                        <p class="mb-0 small text-muted">
                            Perbarui informasi data program studi
                        </p>
                    </div>

                    {{-- Body --}}
                    <div class="card-body p-4">

                        @if ($errors->any())
                            <div class="alert alert-danger rounded-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
                            @csrf
                            @method("PUT")

                            {{-- Nama Prodi --}}
                            <div class="mb-4">
                                <label for="nama_prodi" class="form-label fw-semibold">
                                    Nama Prodi
                                </label>
                                <input 
                                    type="text"
                                    id="nama_prodi"
                                    name="nama_prodi"
                                    class="form-control form-control-lg rounded-3 @error('nama_prodi') is-invalid @enderror"
                                    placeholder="Masukkan nama prodi"
                                    value="{{ old('nama_prodi', $prodi->nama_prodi) }}"
                                >
                            </div>

                            {{-- Nama Kaprodi --}}
                            <div class="mb-4">
                                <label for="nama_kaprodi" class="form-label fw-semibold">
                                    Nama Kaprodi
                                </label>
                                <input 
                                    type="text"
                                    id="nama_kaprodi"
                                    name="nama_kaprodi"
                                    class="form-control form-control-lg rounded-3 @error('nama_kaprodi') is-invalid @enderror"
                                    placeholder="Masukkan nama kaprodi"
                                    value="{{ old('nama_kaprodi', $prodi->nama_kaprodi) }}"
                                >
                            </div>

                            {{-- Alias Prodi --}}
                            <div class="mb-4">
                                <label for="alias_prodi" class="form-label fw-semibold">
                                    Pilih Kode/Alias Prodi
                                </label>
                                <select 
                                    name="alias_prodi" 
                                    id="alias_prodi" 
                                    class="form-select form-select-lg rounded-3 @error('alias_prodi') is-invalid @enderror"
                                >
                                    @php
                                        $currentAlias = old('alias_prodi', $prodi->alias_prodi);
                                    @endphp
                                    <option value="SI" {{ $currentAlias == 'SI' ? 'selected' : '' }}>Sistem Informasi</option>
                                    <option value="TI" {{ $currentAlias == 'TI' ? 'selected' : '' }}>Teknik Informatika</option>
                                    <option value="SK" {{ $currentAlias == 'SK' ? 'selected' : '' }}>Sistem Komputer</option>
                                </select>
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex gap-2">

                                <a href="{{ route('prodi.index') }}" 
                                   class="btn btn-secondary rounded-3 px-4">
                                    ← Kembali
                                </a>

                                <button 
                                    type="submit"
                                    class="btn btn-warning text-white rounded-3 px-4 shadow-sm"
                                >
                                    💾 Update Data
                                </button>

                            </div>

                        </form>

                    </div>

                    {{-- Footer --}}
                    <div class="card-footer bg-light text-center rounded-bottom-4">
                        <small class="text-muted">
                            Sistem Informasi Program Studi
                        </small>
                    </div>

                </div>

            </div>
        </div>

    </div>
</x-layout>