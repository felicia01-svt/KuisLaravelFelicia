<x-layout>
    <div class="container py-5">
        
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card border-0 shadow-lg rounded-4">

                    {{-- Header --}}
                    <div class="card-header bg-primary text-white text-center py-4 rounded-top-4">
                        <h2 class="fw-bold mb-1">
                            📘 Detail Prodi
                        </h2>
                        <p class="mb-0 small">
                            Informasi lengkap data Prodi
                        </p>
                    </div>

                    {{-- Body --}}
                    <div class="card-body p-4">

                        <table class="table table-borderless align-middle">
                            <tbody>

                                <tr class="border-bottom">
                                    <th width="35%" class="text-secondary fs-5">
                                        Nama Prodi
                                    </th>
                                    <td width="5%" class="fw-bold">
                                        :
                                    </td>
                                    <td class="fs-5 fw-semibold text-dark">
                                        {{ $prodi->nama_prodi }}
                                    </td>
                                </tr>

                                <tr class="border-bottom">
                                    <th class="text-secondary fs-5">
                                        Nama Kaprodi
                                    </th>
                                    <td class="fw-bold">
                                        :
                                    </td>
                                    <td class="fs-5 fw-semibold text-dark">
                                        {{ $prodi->nama_kaprodi }}
                                    </td>
                                </tr>

                                <tr>
                                    <th class="text-secondary fs-5">
                                        Alias / Kode
                                    </th>
                                    <td class="fw-bold">
                                        :
                                    </td>
                                    <td class="fs-5 fw-semibold text-dark">
                                        <span class="badge bg-secondary px-3 py-2 fs-6 rounded-3">
                                            {{ $prodi->alias_prodi }}
                                        </span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        {{-- Tombol Navigasi --}}
                        <div class="mt-4 d-flex gap-2">

                            <a href="{{ route('prodi.index') }}" 
                               class="btn btn-secondary rounded-3 px-4">
                                ← Kembali
                            </a>

                            <a href="{{ route('prodi.edit', $prodi->id) }}" 
                               class="btn btn-warning rounded-3 px-4 text-white">
                                ✏ Edit
                            </a>

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
        </div>

    </div>
</x-layout>