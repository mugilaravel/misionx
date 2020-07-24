<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table ='ticket';
    protected $fillable = [
        'tipe',
            'nik',
            'nama',
            'telp',
            'email',
            'lokasi',
            'kanwil',
            'unit_kerja',
            'kriteria',
            'judul',
            'deskripsi',
            'image_real_name',
            'image_system_name',
            'image_path',
            'status',
            'sifat',
            'tbl_pengajuan',            
            'petugas',
            'catatan',
            'tgl_selesai',
    ];
}
