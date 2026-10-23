<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('bukus.index', compact('bukus'));
    }

    public function create()
    {
        return view('bukus,create');
    }

    public function store(Request $request)
    {
        Buku::create($request->all());
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil ditambah.');

    }

    public function show(string $id)
    {
        //
    }

    public function edit(Buku $buku)
    {
        return view('bukus.edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku)
    {
        $buku->update($request->all());
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil diubah.');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil di hapus');
    }
}
