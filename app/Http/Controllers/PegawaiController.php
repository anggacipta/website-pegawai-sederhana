<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('dashboard.admin.pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('dashboard.admin.pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|min:10|max:15',
            'email' => 'required|email',
            'posisi' => 'required',
            'departemen' => 'required',
            'tanggal_lahir' => 'required|date_format:m/d/Y',
        ]);

        $pegawai = new Pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->telepon = $request->telepon;
        $pegawai->email = $request->email;
        $pegawai->posisi = $request->posisi;
        $pegawai->departemen = $request->departemen;
        $pegawai->tanggal_lahir = Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir)->format('Y-m-d');
        $pegawai->save();

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai created successfully.');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findorFail($id);
        return view('dashboard.admin.pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|min:10|max:15',
            'email' => 'required|email',
            'posisi' => 'required',
            'departemen' => 'required',
            'tanggal_lahir' => 'required|date_format:m/d/Y',
        ]);

        $pegawai = Pegawai::findorFail($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->telepon = $request->telepon;
        $pegawai->email = $request->email;
        $pegawai->posisi = $request->posisi;
        $pegawai->departemen = $request->departemen;
        $pegawai->tanggal_lahir = Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir)->format('Y-m-d');
        $pegawai->save();

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai updated successfully.');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findorFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai deleted successfully.');
    }

    public function api_docs()
    {
        return view('dashboard.admin.pegawai.api_docs');
    }
}
