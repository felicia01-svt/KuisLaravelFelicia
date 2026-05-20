<x-layout>
    <div class="container py-5">

        {{-- Alert Notifikasi Sukses --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm mb-4" role="alert">
                ✨ {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold text-primary mb-1">
                    📚 List Program Studi
                </h2>

                <p class="text-muted mb-0">
                    Data seluruh program studi universitas
                </p>
            </div>

            <a href="{{ route('prodi.create') }}" class="btn btn-primary rounded-3 shadow-sm">
                + Tambah Prodi
            </a>

        </div>

        {{-- Card --}}
        <div class="card border-0 shadow-lg rounded-4">

            <div class="card-body p-4">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-primary">
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama Prodi</th>
                                <th>Nama Kaprodi</th>
                                <th>Alias / Kode</th>
                                <th width="30%" class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($prodis as $item)

                                <tr>

                                    <td class="fw-semibold">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        <span class="fw-bold text-dark">
                                            {{ $item->nama_prodi }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $item->nama_kaprodi }}
                                    </td>

                                    <td>
                                        <span class="badge bg-secondary px-2 py-2 rounded-2">
                                            {{ $item->alias_prodi }}
                                        </span>
                                    </td>

                                    <td class="text-center">

                                        <div class="d-flex justify-content-center gap-2">

                                            {{-- Detail --}}
                                            <a href="{{ route('prodi.show', $item->id) }}"
                                               class="btn btn-info btn-sm rounded-3 text-white">
                                                👁 Detail
                                            </a>

                                            {{-- Edit --}}
                                            <a href="{{ route('prodi.edit', $item->id) }}"
                                               class="btn btn-warning btn-sm rounded-3 text-white">
                                                ✏ Edit
                                            </a>

                                            {{-- Hapus --}}
                                            <form action="{{ route('prodi.destroy', $item->id) }}" 
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus data prodi ini?')">

                                                @csrf
                                                @method("DELETE")

                                                <button type="submit"
                                                        class="btn btn-danger btn-sm rounded-3">
                                                    🗑 Hapus
                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted">
                                        Data program studi belum tersedia
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

            {{-- Footer --}}
            <div class="card-footer bg-light text-center rounded-bottom-4">
                <small class="text-muted">
                    Sistem Informasi Program Studi
                </small>
            </div>

        </div>

    </div>
</x-layout>