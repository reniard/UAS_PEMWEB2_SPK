<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::all();
        return view('kriteria.index', compact('kriterias'))->with('i', 0);
    }

    public function create()
    {
        return view('kriteria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'bobot' => 'required|integer',
        ]);

        Kriteria::create($request->all());

        return redirect()->route('kriteria.index')->with('success', 'Kriteria created successfully.');
    }

    public function show(Kriteria $kriteria)
    {
        return view('kriteria.show', compact('kriteria'));
    }

    public function edit($id)
    {
        $kriterium = Kriteria::findOrFail($id);
        return view('kriteria.edit', compact('kriterium'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'bobot' => 'required|integer',
        ]);

        $kriterium = Kriteria::findOrFail($id);
        $kriterium->update($request->all());

        return redirect()->route('kriteria.index')->with('success', 'Kriteria updated successfully');
    }

    public function destroy($id)
    {
        $kriterium = Kriteria::findOrFail($id);
        $kriterium->delete();

        return redirect()->route('kriteria.index')
            ->with('success', 'Kriteria berhasil dihapus.');
    }
}
