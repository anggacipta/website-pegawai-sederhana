@extends('dashboard.admin.layouts.main')
@section('content')
    <!--  Header Start -->
    @include('dashboard.admin.layouts.navbar')
    <!--  Header End -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah Data Pegawai</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pegawai.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="alamat"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">No. Telp</label>
                                <input type="number" class="form-control" id="telepon" name="telepon">
                            </div>
                            <div class="mb-3">
                                <label for="posisi" class="form-label">Pilih Posisi</label>
                                <select class="js-example-basic-single form-control" name="posisi" id="posisi">
                                    <option value="progrmmer">Programmer</option>
                                    <option value="akuntan">Akuntan</option>
                                    <option value="designer">Designer</option>
                                    <option value="pemasok_barang">Pemasok Barang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="departemen" class="form-label">Pilih Departemen</label>
                                <select class="js-example-basic-single form-control" name="departemen" id="departemen">
                                    <option value="informatika">Informatika</option>
                                    <option value="keuangan">Keuangan</option>
                                    <option value="design">Design</option>
                                    <option value="logistik">Logistik</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="birthday" class="form-label">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('dashboard.admin.layouts.footer')
    </div>

    <script>
        $(document).ready(function () {
            $("form").validate({
                rules: {
                    nama: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    alamat: {
                        required: true,
                        minlength: 10
                    },
                    telepon: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 15
                    },
                    posisi: {
                        required: true
                    },
                    departemen: {
                        required: true
                    },
                    tanggal_lahir: {
                        required: true,
                        date: true
                    }
                },
                messages: {
                    nama: {
                        required: "Nama harus diisi",
                        minlength: "Nama harus terdiri dari setidaknya 2 karakter"
                    },
                    email: {
                        required: "Email harus diisi",
                        email: "Harap masukkan alamat email yang valid"
                    },
                    alamat: {
                        required: "Alamat harus diisi",
                        minlength: "Alamat harus terdiri dari setidaknya 10 karakter"
                    },
                    telepon: {
                        required: "Nomor telepon harus diisi",
                        digits: "Nomor telepon harus berupa angka",
                        minlength: "Nomor telepon harus terdiri dari setidaknya 10 angka",
                        maxlength: "Nomor telepon tidak boleh lebih dari 15 angka"
                    },
                    posisi: {
                        required: "Posisi harus dipilih"
                    },
                    departemen: {
                        required: "Departemen harus dipilih"
                    },
                    tanggal_lahir: {
                        required: "Tanggal lahir harus diisi",
                        date: "Harap masukkan tanggal yang valid"
                    }
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
