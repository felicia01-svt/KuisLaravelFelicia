<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-lg border-0 rounded-4">
                    
                    <div class="card-header bg-primary text-white text-center rounded-top-4 py-4">
                        <h3 class="mb-0 fw-bold">
                            Form Data Fakultas
                        </h3>
                        <small>Silakan isi data fakultas dengan lengkap</small>
                    </div>

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

                        <form action="/fakultas" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Nama Fakultas
                                </label>

                                <input 
                                    type="text"
                                    name="nama_fakultas"
                                    class="form-control form-control-lg rounded-3"
                                    placeholder="Contoh: Fakultas Teknik"
                                    
                                >
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Nama Dekan
                                </label>

                                <input 
                                    type="text"
                                    name="nama_dekan"
                                    class="form-control form-control-lg rounded-3"
                                    placeholder="Contoh: Dr. Budi Santoso"
                                    
                                >
                            </div>

                            <div class="d-grid">
                                <button 
                                    type="submit"
                                    class="btn btn-primary btn-lg rounded-3 shadow-sm"
                                >
                                    💾 Simpan Data
                                </button>
                            </div>

                        </form>

                    </div>

                    <div class="card-footer text-center bg-light rounded-bottom-4">
                        <small class="text-muted">
                            Sistem Informasi Fakultas
                        </small>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-layout>