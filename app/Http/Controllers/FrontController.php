<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

use App\Models\KatalogBuku;
use App\Models\berita;
use App\Models\penulis;
use App\Models\dataroyalti;
use App\Models\PengajuanRoyalti;
use App\Mail\SendEmail;

use PDF;

class FrontController extends Controller
{
    public function berita()
    {
        $berita = berita::paginate(3);
        return view('layouts.manggu-info',compact('berita'));
    }
     public function beritadetail(Request $request, $slug)
    {
        $keyword = $request->keyword;
        $berita = berita::where('slug', $slug)->where(function($query) use($keyword){
            $query->orWhere('judul', 'LIKE', '%'. $keyword .'%')
                  ->orWhere('deskripsi', 'LIKE', '%'. $keyword .'%');
        })->first();
        $postbaru = berita::orderBy('created_at', 'desc')->limit('3')->get();
        return view('layouts.manggu-info-halaman', compact('keyword', 'berita', 'postbaru'));
    }
    public function penulis()
    {
        // $keyword = $request->keyword;
        $penulis = penulis::paginate(3);
        return view('layouts.penulis',compact('penulis'));
    }
    public function dataroyalti(Request $request)
    {
        
        if($request->has('search')){
            $dataroyalti = dataroyalti::where('judul','LIKE','%'.$request->search.'%')->paginate(15);
        }else{
            $dataroyalti = dataroyalti::paginate(15);
        }
        return view('layouts.data-penjualan-dan-royalti',compact('dataroyalti'));
    }
    public function klaim_data($id)
    {
        $dataroyalti = dataroyalti::where('id',$id)->first();

        return view ('layouts.royalti',compact('dataroyalti'));
    }

    public function formulir(Request $request,$id)
    {

        $dataroyalti = dataroyalti::where('id',$id)->first();
        $tanggal = Carbon::now()->isoFormat('D-MMMM-Y');


        // File
        $filename_ktp = time().$request->file('file_ktp')->getClientOriginalName();
        $request->file('file_ktp')->storeAs('file-ktp',$filename_ktp);
        $filename_npwp = time().$request->file('file_npwp')->getClientOriginalName();
        $request->file('file_npwp')->storeAs('file-npwp',$filename_npwp);

        $data = PengajuanRoyalti::create([
            "dataroyalti_id" => $id,
            "nama" => $request->nama,
            "email" => $request->email,
            "no_ktp" => $request->no_ktp,
            "file_ktp" => $filename_ktp,
            "no_npwp" => $request->no_npwp,
            "file_npwp" => $filename_npwp,
            "no_rekening" => $request->no_rekening,
            "pilihan_bank" => $request->pilihan_bank,
        ]);
        $pdf = PDF::loadview('cetak-pdf',['data'=>$data]);
        Storage::put('public/pdf/'.$data->dataroyalti->kode.$data->nama.$data->dataroyalti_id.$data->dataroyalti->judul_buku.'.pdf', $pdf->output());

        Mail::to($request->email)->send(new SendEmail($data));
        return back();

    }
    // Katalog
    public function katalog_index(){
        $katalog = KatalogBuku::paginate(8);
        return view('layouts.katalog-buku',compact('katalog'));
    }
}
