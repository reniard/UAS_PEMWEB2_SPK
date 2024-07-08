<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatifs = Alternatif::all();
        return view('alternatif.index', compact('alternatifs'));
    }

    public function create()
    {
        return view('alternatif.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_alternatif' => 'required|string',
            'nilai_c1' => 'required|integer',
            'nilai_c2' => 'required|integer',
            'nilai_c3' => 'required|integer',
            'nilai_c4' => 'required|integer',
            'nilai_c5' => 'required|integer',
        ]);

        Alternatif::create($request->all());

        return redirect()->route('alternatif.index')
            ->with('success', 'Alternatif berhasil ditambahkan.');
    }

    public function show($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        return view('alternatif.show', compact('alternatif'));
    }

    public function edit($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        return view('alternatif.edit', compact('alternatif'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_alternatif' => 'required|string',
            'nilai_c1' => 'required|integer',
            'nilai_c2' => 'required|integer',
            'nilai_c3' => 'required|integer',
            'nilai_c4' => 'required|integer',
            'nilai_c5' => 'required|integer',
        ]);

        $alternatif = Alternatif::findOrFail($id);
        $alternatif->update($request->all());

        return redirect()->route('alternatif.index')
            ->with('success', 'Alternatif berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->delete();

        return redirect()->route('alternatif.index')
            ->with('success', 'Alternatif berhasil dihapus.');
    }
}
