@extends('layout.masterpolos')

@section('content_lable')
@endsection

@section('urlCari')
{{-- /admin/init/role --}}
@endsection
@section('content_footer')
    Content Foot
@endsection




@section('content_main')
    <div class="card-body table-responsive p-0">
            @if (session('sukses'))
                <div class="alert alert-primary" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <div class="row text-nowrap">
                <div class="col-5" style="padding-left: 20px; padding-top: 5px;">
                    <h3>Ticket</h3>
                </div>
                <div class="col-6" style="padding-top: 5px;">
                    {{-- <button type="button" class="btn btn-primary btn-sm float-right"  
                            data-toggle="modal" data-target="#staticBackdrop">Tambah Data
                    </button> --}}
                </div>
            </div>
            <form action="/ticket/ticketadd" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="tipe">Tipe Pegawai</label>
                        <select name="tipe" class="form-control">
                            <option value="Organik">Organik</option>
                            <option value="Anorganik">Anorganik</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="nik">nik</label>
                        <input type="text" name="nik" class="form-control" id="nik">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="nama">nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="telp">telp</label>
                        <input type="text" name="telp" class="form-control" id="telp">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="email">email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-2">
                    <label for="lokasi">lokasi</label>
                    <select name="lokasi" class="form-control">
                        <option value="Pusat">Pusat</option>
                        <option value="Wilayah">Kantor Wilayah</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="kanwil">kanwil</label>
                    <select name="kanwil" class="form-control">
                        <option value="">Kantor</option>
                        <option value="00">Kantor Pusat</option>
                        <option value="01">Kantor Wilayah I Medan</option>
                        <option value="02">Kantor Wilayah II Pekanbaru</option>
                        <option value="03">Kantor Wilayah III </option>
                        <option value="04">Kantor Wilayah IV</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                      <label for="unit_kerja">unit_kerja</label>
                      <input type="text" name="unit_kerja" class="form-control" id="unit_kerja">
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="kriteria">kriteria</label>
                    <select name="kriteria" class="form-control">
                        <option value="">Kriteria</option>
                        <option value="APP">Aplikasi</option>
                        <option value="LGN">Login</option>
                        <option value="MBL">App Mobile</option>
                        <option value="MDL">Modul </option>
                        <option value="LL">Lain-Lain</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="sifat">sifat</label>
                    <select name="sifat" class="form-control">
                        <option value="">Sifat</option>
                        <option value="Minor">Minor</option>    
                        <option value="Middle">Middle</option> 
                        <option value="Major">Major</option>                    
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="judul">judul</label>
                    <input type="text" name="judul" class="form-control" id="judul">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">deskripsi</label>
                    <textarea rows="2" type="text" name="deskripsi" class="form-control" id="deskripsi"></textarea>
                  </div>
                {{-- <div class="row">
                    <div class="form-group col-md-3">
                        <label for="image_real_name">image_real_name</label>
                        <input type="text" name="image_real_name" class="form-control" id="image_real_name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="image_system_name">image_system_name</label>
                        <input type="text" name="image_system_name" class="form-control" id="image_system_name">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="image_path">image_path</label>
                        <input type="text" name="image_path" class="form-control" id="image_path">
                    </div>
                </div> --}}

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="upload">Upload File</label>
                        <input type="file" name="uploadFile" class="form-control" >
                    </div>
                </div>
@yield('helpdesk')

                  {{-- <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="" class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="" class="form-control" id="">
                  </div>
                             --}}




                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
                {{-- <table class="table table-hover text-nowrap">
                    <tr>
                    <th>Param_key</th>
                    <th>Param_Value</th>
                    <th>Param_Desc</th>
                    <th>Param_Status</th>
                    <th>Param_Seq</th>
                    <th>Aksi</th>
                    </tr>
                    @foreach ($data_param as $param)
                    <tr>              
                    </tr>
                    @endforeach
                </table> --}}
            {{-- {{$data_param->links()}} --}}
        </div>



        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Input Divisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    





                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
<script>
$(document).ready(function () {
    $("nav.navbar-default").hide();    
});

</script>

@endsection