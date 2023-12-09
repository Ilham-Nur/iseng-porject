@extends('layout.header')

@section('title', 'Pendonor')

@section('main')

<style>
.dataTables_filter {
    display: none;
}
</style>

{{-- All modal --}}

{{-- Add modal --}}
<div class="modal fade" id="addusermodal" tabindex="-1" aria-labelledby="addusermodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addusermodal">Tambah User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="userForm">
                <!-- Input for Name -->
                <div class="mb-3">
                    <label for="inputName" class="form-label">Name :</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Enter name">
                </div>
                <!-- Input for Password -->
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password :</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Enter password">
                </div>
                <!-- Input for Alamat -->
                <div class="mb-3">
                    <label for="inputAlamat" class="form-label">Alamat :</label>
                    <input type="text" class="form-control" id="inputAlamat" placeholder="Enter address">
                </div>
                <!-- Input for Golongan darah -->
                <div class="mb-3">
                    <label for="selectGolDarah" class="form-label">Golongan Darah :</label>
                    <select class="form-select" id="selectGolDarah">
                        <option value="" selected disabled>Please Select Gol Darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <!-- Input for Role -->
                <div class="mb-3">
                    <label for="selectRole" class="form-label">Role :</label>
                    <select class="form-select" id="selectRole">
                        <option value="" selected disabled>Please Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="pendonor">Pendonor</option>
                    </select>
                </div>
                <!-- Input for Gambar -->
                <div class="mb-3">
                    <label for="inputGambar" class="form-label">Gambar :</label>
                    <input type="file" class="form-control" id="inputGambar">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button"  id="adduser"class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>
{{-- End Add modal --}}

{{-- Edit modal --}}

{{-- End Edit modal --}}

{{-- Detail modal --}}
<div class="modal fade" id="detailmodal" tabindex="-1" aria-labelledby="detailmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detailmodal">Detail User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                        <tr>
                            <th scope="row">Nama</th>
                            <td id="username"></td>
                        </tr>
                        <tr>
                            <th scope="row">Role</th>
                            <td id="role"></td>
                        </tr>
                        <tr>
                            <th scope="row">Password</th>
                            <td id="password"></td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td id="alamat"></td>
                        </tr>
                        <tr>
                            <th scope="row">Golongan Darah</th>
                            <td id="golDarah"></td>
                        </tr>
                        <tr>
                            <th scope="row"><h6>Preview Image</h6></th>
                            <td id="golDarah"><img id="userImage" alt="User Image" alt="Preview Image" class="img-fluid" width="100" height="100" ></td>
                        </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
{{-- End Detail modal --}}

{{-- All modal --}}



    <div class="head-title">
        <div class="left">
            <h1>Pendonor</h1>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4"> 
                <div class="input-group">
                    <input type="text" id="txSearch" class="form-control rounded" placeholder="Search..." aria-label="Search" aria-describedby="search-addon">
                    <div class="input-group-append ms-2">
                        <!-- Add any search-related button or icon here if needed -->
                    </div>
                </div>
            </div>
            
            <div class="col-md-8 text-md-end"> <!-- Pushed the button to the right -->
                <a href="#" class="btn btn-primary addmodalBtn"  data-bs-toggle="modal" data-bs-target="#addusermodal">
                    Tambah <span><i class='bx bx-plus'></i></span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Daftar Pendonor</h3>
            </div>
            <div class="containeruser">
                <table id="tabeluser">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor Kontak</th>
                            <th>Golongan Darah</th>
                            {{-- <th>Riwayat Kesahatan</th> --}}
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Farah</td>
                            <td>jl. Kumalasari blok J no.20 </td>
                            <td>081382768739</td>
                            <td>O+</td>
                            <td>                  
                                <a href="#"><i class='bx bxs-edit'></i></a>
                                <a href="#"><i class='bx bxs-trash' ></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>jl. Meranti blok K no.30 </td>
                            <td>081237827281</td>
                            <td>AB+</td>
                            <td>                  
                                <a href="#"><i class='bx bxs-edit'></i></a>
                                <a href="#"><i class='bx bxs-trash' ></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Junan</td>
                            <td>jl. Adhyaksa Baru blok D no.90 </td>
                            <td>08132948712</td>
                            <td>A+</td>
                            <td>                  
                                <a href="#"><i class='bx bxs-edit'></i></a>
                                <a href="#"><i class='bx bxs-trash' ></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Marnita Kasih</td>
                            <td>jl. Mediterania blok K no.17 </td>
                            <td>08921372632</td>
                            <td>B-</td>
                            <td>                  
                                <a href="#"><i class='bx bxs-edit'></i></a>
                                <a href="#"><i class='bx bxs-trash' ></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Hartono</td>
                            <td>jl. A.Yani blok L no.29 </td>
                            <td>08782198293</td>
                            <td>A+</td>
                            <td>                  
                                <a href="#"><i class='bx bxs-edit'></i></a>
                                <a href="#"><i class='bx bxs-trash' ></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function () {
            // Initialize DataTable
            var dataTable = $('#tabeluser').DataTable({
                searching: true,
                ordering: true,  // Tambahkan opsi ordering
                pageLength: 10,
                lengthChange: false
            });

            // Trigger pencarian setiap kali keyup pada input
            $('#txSearch').on('keyup', function () {
                dataTable.search(this.value).draw();
            });
        });
    </script>

@include('user.detailuserJS')
@include('user.tambahuserJS')
@endsection
