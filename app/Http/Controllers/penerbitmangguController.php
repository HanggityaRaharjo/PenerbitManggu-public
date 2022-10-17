<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\berita;
use App\Models\dataroyalti;
use App\Models\produk;
use App\Models\penulis;
use App\Models\KatalogBuku;
use App\Models\foto;
use App\Models\text;
use App\Models\slide;
use App\Exports\dataroyaltiExport;
use App\Imports\dataroyaltiImport;

use Auth;

class penerbitmangguController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('indexberanda');
    }
    //INDEXBERANDA
    public function indexberanda()
    {
        $slide = slide::get();
        $berita = berita::get();
        return view('layouts.index',compact('berita','slide'));
    }

    //ADMINBERITA
	public function berita()
    { 
        $berita = berita::get();
        return view('layouts.admin.berita-admin', compact('berita'));
    }


    public function beritastore(Request $request)
    {
        Request()->validate([
            'photo' => 'required|mimes:png,jpg,jpeg|max:1000',
            'judul' => 'required',
            'deskripsi' => 'required',
            
        ], [
            'photo.required' => 'Gambar tidak boleh kosong!',
            'judul.required' => 'Judul tidak boleh kosong!',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong!',
            
        ]);

        $file_name = $request->photo->getClientOriginalName();
            $image = $request->photo->storeAs('/beritaimage', $file_name);
        berita::create([
            'photo' => '/beritaimage/'.$image,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi,
            'user_id' => Auth::User()->id,            
        ]);
        return redirect('/berita-admin');
    }

    public function beritaedit($id)
    {
        $berita = berita::findorfail($id);
        return view('admin.berita', compact('berita', 'kategori'));
    }

    public function beritaupdate(Request $request, $id)
    {
        Request()->validate([
            'photo' => 'mimes:png,jpg,jpeg',
            'judul' => 'required',
            'deskripsi' => 'required',
            
        ], [
            'judul.required' => 'Judul tidak boleh kosong!',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong!',

            
        ]);

        $berita = berita::find($id);
        if (Request()->hasFile('photo')) {
            if (Storage::exists($berita->photo)) {
                Storage::delete($berita->photo);
            }

            $file_name = $request->photo->getClientOriginalName();
            $image = $request->photo->storeAs('/beritaimage', $file_name);
            $berita->update([
                'photo' => $request->image,
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'deskripsi' => $request->deskripsi,
                
            ]);
        } else {
            $berita->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'deskripsi' => $request->deskripsi,
                
            ]);
        }
        
        return redirect('/berita-admin');
    }

    public function beritadestroy($id)
    {
        $berita = berita::find($id);
            if (Storage::exists($berita->photo)) {
                Storage::delete($berita->photo);
            }
        $berita->delete();

        
        return redirect('/berita-admin');
    }

    
    //ADMINDATAROYALTI
	public function dataroyalti()
    {
        $dataroyalti = dataroyalti::paginate(15);
        if(request('search')){
            $dataroyalti->where('judul','like','%'.request('search').'%');
        }
        
        return view('layouts.admin.data-royalti-admin', compact('dataroyalti'));
    }
    public function dataroyaltistore(Request $request)
    {
        Request()->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'harga' => 'required',
            'terjual' => 'required',
            
        ], [
            'judul.required' => 'Judul tidak boleh kosong!',
            'penulis.required' => 'Penulis tidak boleh kosong!',
            'harga.required' => 'Harga tidak boleh kosong!',
            'terjual.required' => 'Terjual tidak boleh kosong!',         
        ]);
        dataroyalti::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'terjual' => $request->terjual,   
        ]);
        return redirect('/data-royalti-admin');
    }

    public function dataroyaltiedit($id)
    {
        $dataroyalti = dataroyalti::findorfail($id);
        return view('admin.dataroyalti', compact('dataroyalti'));
    }
    
    public function dataroyaltiupdate(Request $request, $id)
    {
        $data = dataroyalti::find($id);
        $request->validate([
            'judul' => 'required',
        ]);
        $data->judul = $request->judul;
        $data->penulis = $request->penulis;
        $data->harga = $request->harga;
        $data->terjual = $request->terjual;
        $data->save();
        return redirect('/data-royalti-admin');
    }

    public function dataroyaltidestroy($id)
    {
        $dataroyalti = dataroyalti::find($id);
        $dataroyalti->delete();

        
        return redirect('/data-royalti-admin');
    }

    public function dataroyaltiexport(){
        return Excel::download(new dataroyaltiExport,'dataroyalti.xlsx');
    }

    public function dataroyaltiimport(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file ->move('dataroyalti', $namaFile);
        Excel::import(new dataroyaltiImport, public_path('/dataroyalti/'.$namaFile));
        return redirect('/data-royalti-admin');
    }


    //ADMINPRODUK
    public function produk()
    {
        $produk = produk::first();
        return view('layouts.admin.produk-admin', compact('produk'));
    }
    //ADMINPENULIS
    public function penulis()
    {
        $penulis = penulis::get();
        $penulis = penulis::paginate(5);
        $fotos = foto::all();
        $texts = text::all();


        return view('layouts.admin.penulis-admin', compact('penulis','fotos','texts'));
    }

    public function penulisstore(Request $request)
    {
        Request()->validate([
            'photo' => 'required|mimes:png,jpg,jpeg|max:10000',
            'nama' => 'required',
            'deskripsi' => 'required',
            
        ], [
            'photo.required' => 'Gambar tidak boleh kosong!',
            'nama.required' => 'Nama tidak boleh kosong!',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong!',
            
        ]);
        $imageName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('/penulisimage'),$imageName);
        penulis::create([
            'photo' => '/penulisimage/'.$imageName,           
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,  
        ]);
        return redirect('/penulis-admin');
    }
    public function penulisupdate(Request $request, $id)
    {
        Request()->validate([
            'photo' => 'mimes:png,jpg,jpeg',
            'nama' => 'required',
            'deskripsi' => 'required',
            
        ], [
            'nama.required' => 'Nama tidak boleh kosong!',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong!',

        ]);

        $penulis = penulis::find($id);
        if (Request()->hasFile('photo')) {
            if (Storage::exists($penulis->photo)) {
                Storage::delete($penulis->photo);
            }

            $file_name = $request->photo->getClientOriginalName();
            $image = $request->photo->storeAs('penulis', $file_name);
            $penulis->update([
                'photo' => $image,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                
            ]);
        } else {
            $penulis->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                
            ]);
        }
        
        return redirect('/penulis-admin');
    }

    public function penulisdestroy($id)
    {
        $penulis = penulis::find($id);
            if (Storage::exists($penulis->photo)) {
                Storage::delete($penulis->photo);
            }
        $penulis->delete();
        return redirect('/penulis-admin');
    }


    //ADMINSLIDE
    public function slide()
    { 
        $slide = slide::get();
        $dataroyalti = dataroyalti::count();
        $penulis = penulis::count();
        return view('layouts.admin.index', compact('slide','dataroyalti','penulis'));
    }

    public function slidestore(Request $request)
    {
        Request()->validate([
            'photo' => 'required|mimes:png,jpg,jpeg|max:10000',            
        ], [
            'photo.required' => 'Gambar tidak boleh kosong!',
            
        ]);
        $imageName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('/slideimage'),$imageName);
        slide::create([
            'photo' => '/slideimage/'.$imageName,           
        ]);
        return redirect('/Dashboard');
    }
    public function slidedestroy($id)
    {
        $slide = slide::find($id);
            if (Storage::exists($slide->photo)) {
                Storage::delete($slide->photo);
            }
        $slide->delete();
        return redirect('/Dashboard');
    }

    // ADMIN KATALOG
    public function katalog_index(){
        $katalog = KatalogBuku::paginate(8);
        return view('layouts.admin.katalog-buku-admin',compact('katalog'));
    }

    public function create_katalog(Request $request){
        // dd($request);
        // $gambar = time().$request->file('gambar')->getClientOriginalName();
        // $request->file('gambar')->storeAs('gambar-katalog',$gambar);

        KatalogBuku::create([
            "judul" => $request->judul,
            "direct" => $request->direct,
            "keterangan" => $request->keterangan,
            "kategori" => $request->kategori,
            "gambar" => $request->gambar,
        ]);
        return back();
    }

}


