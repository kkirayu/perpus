<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        return view("admin.Buku.index", compact("buku"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku = Buku::findOrFile('id');
        return view('admin.buku.create', compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = FacadesValidator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:225',
            'penerbut' => 'required|string|max:225',
        ], [
            'judul' => 'Judul Wajib Di isi',
            'penulis' => 'Penulis Wajib Diisi',
            'penerbit' => 'Penerbit Wajib Diiisi',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/buku')
                ->withErrors($validator)->withInput();
        }

        $buku = new Buku();
        $buku->judul = $request->input('judul');
        $buku->penulis = $request->input('penulis');
        $buku->penerbit = $request->input('penerbit');
        $buku->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
