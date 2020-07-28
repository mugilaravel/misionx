@extends('ticket.ticket')

@section('helpdesk')
<div class="form-group">
    <label for="catatan">catatan</label>
    <input type="text" name="catatan" class="form-control" id="catatan">
</div>
<div class="row">
    <div class="form-group col-md-2">
        <label for="tbl_pengajuan">tbl_pengajuan</label>
        <input type="date" name="tbl_pengajuan" class="form-control" id="tbl_pengajuan">
    </div>                             
    <div class="form-group col-md-2">
        <label for="tgl_selesai">tgl_selesai</label>
        <input type="date" name="tgl_selesai" class="form-control" id="tgl_selesai">
    </div>
    <div class="form-group col-md-2">
        <label for="status">status</label>
        <select name="status" class="form-control">
            <option value="">Status</option>
            <option value="P">Pengajuan</option>    
            <option value="O">On Progress</option> 
            <option value="D">Selesai</option>                    
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="petugas">petugas</label>
        <input type="text" name="petugas" class="form-control" id="petugas">
      </div>
</div> 
@endsection
    
