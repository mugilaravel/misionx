<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function Ticket()
    {
        return view('ticket.ticket');
    }

    public function Ticketadd(Request $request)
    {
        // dd($request->all());
        // return view('ticket.ticket');
        $ticket = new \App\Ticket;
        $ticket->tipe=$request->tipe;
        $ticket->nik=$request->nik;
        $ticket->nama=$request->nama;
        $ticket->telp=$request->telp;
        $ticket->email=$request->email;
        $ticket->lokasi=$request->lokasi;
        $ticket->kanwil=$request->kanwil;
        $ticket->unit_kerja=$request->unit_kerja;
        $ticket->kriteria=$request->kriteria;
        $ticket->judul=$request->judul;
        $ticket->deskripsi=$request->deskripsi;
        // $ticket->image_real_name=$request->image_real_name;
        $ticket->image_system_name=$request->image_system_name;
        $ticket->image_path=$request->image_path;
        $ticket->status=$request->status;
        $ticket->sifat=$request->sifat;
        $ticket->tbl_pengajuan=$request->tbl_pengajuan;            
        $ticket->petugas=$request->petugas;
        $ticket->catatan=$request->catatan;
        $ticket->tgl_selesai=$request->tgl_selesai;
        
        if($request->hasFile('uploadFile')){
            $request->File('uploadFile')->move('images/',$request->file('uploadFile')->getClientOriginalName());
            $ticket->image_real_name = $request->file('uploadFile')->getClientOriginalName();
        }
        $ticket->save();
        return redirect('ticket')->with('sukses','Data Berhasil di Simpan. Nomor Ticket :: '.$ticket->id);
    }
}
