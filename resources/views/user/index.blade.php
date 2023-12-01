@extends('layout.header')

@section('title', 'User')

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
                        <option value="Admin">Admin</option>
                        <option value="User">Pendonor</option>
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
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
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
                    <tbody>
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
                    </tbody>
                </table>
                {{-- <div class="mt-3">
                    <h6>Preview Image</h6>
                    <img src="" alt="Preview Image" class="img-fluid">
                </div> --}}
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
            <h1>User</h1>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4"> 
                <div class="input-group">
                    <input type="text" id="txsearch" class="form-control rounded" placeholder="Search..." aria-label="Search" aria-describedby="search-addon">
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
                <h3>Daftar User</h3>
            </div>
            <table id="tabeluser">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listuser as $r)
                    <tr>
                        <td>
                            <img src="img/{{ $r->username }}.png" alt="User Image">
                            <p>{{ $r->username }}</p>
                        </td>
                        <td>{{ $r->role }}</td>
                        <td>
                            <a href="#" 
                            data-username="{{ $r->username }}" 
                            data-password="{{ $r->password }}" 
                            data-alamat="{{ $r->alamat }}" 
                            data-goldarah="{{ $r->gol_darah }}" 
                            data-role="{{ $r->role }}"  
                            data-imageuser="{{ $r->imageuser }}" 
                            class="detailBtn"
                            data-bs-toggle="modal" 
                            data-bs-target="#detailmodal">
                            <i class='bx bx-clipboard'></i>
                         </a>
                                                  
                            <a href="#"><i class='bx bxs-edit'></i></a>
                            <a href="#"><i class='bx bxs-trash' ></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
            $('#txsearch').on('keyup', function () {
                dataTable.search(this.value).draw();
            });
        });
    </script>

@include('user.detailuserJS')
@endsection
