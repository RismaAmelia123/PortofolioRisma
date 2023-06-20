<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    //
    function show(){
        $data['profil'] = Profil::all();
        return view ('profil',$data);
    }
    function profil(){
        $profil = Profil::first();
        if ($profil){
            $data = [
                'nisn' => $profil->nisn,
                'nama' => $profil->nama,
                'tl' => $profil->tl,
                'ttl' => $profil->ttl,
                'jk' => $profil->jk,
                'status' => $profil->status,
                'pendidikan' => $profil->pendidikan,
                'kontak' => $profil->kontak,
                'email' => $profil->email,
                'alamat' => $profil->alamat,
                'deskripsi' => $profil->deskripsi,
                'foto' => $profil->foto,
                'action' => '/profil/update/'.$profil->nisn
            ];
            return view ('profil',$data);
        }else{
            
            $data = [
                'nisn' => '',
                'nama' => '',
                'tl' => '',
                'ttl' => '',
                'jk' => '',
                'status' => '',
                'pendidikan' => '',
                'kontak' => '',
                'email' => '',
                'alamat' => '',
                'deskripsi' => '',
                'foto' => '',
                
                'action' => '/profil/create/',
            ];
            return view('profil',$data);
        }
            }
    function create(Request $request){
        Profil::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'tl' => $request->tl,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'status' => $request->status,
            'pendidikan' => $request->pendidikan,
            'kontak' => $request->kontak,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->file('foto')->store('foto')
        ]);
        return redirect('profil');
    }
    function edit($id){
        $data['profil'] = Profil::find($id);
        $data['action'] = url('profil/update').'/'.$data['profil']->nisn;
        $data['tombol'] = "Update";
        return view ('profil',$data);
    }
    function update(Request $request){
        $data = Profil::where('nisn',$request->nisn)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        Profil::where('nisn',$request->nisn)->update([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'tl' => $request->tl,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'status' => $request->status,
            'pendidikan' => $request->pendidikan,
            'kontak' => $request->kontak,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);
        return redirect('profil');
    }
    
}