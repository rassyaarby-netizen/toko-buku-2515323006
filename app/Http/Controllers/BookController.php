<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
        private array $daftarBuku = [
        1 => ['judul' => '10 Dosa Besar Soeharto', 'penulis' => 'Pande I Kadek Andhika Dharma Kezawa'],
        2 => ['judul' => 'Dokumen Asli Super Semar', 'penulis' => 'Muhammad Rassya Arby Putra Laksmana'],
        3 => ['judul' => '20 Fakta G30SPKI', 'penulis' => 'Jevan Jehonathan Aquila'],
    ];

    public function index()
    {
        return view('tokobuku.index', ['daftarBuku' => $this->daftarBuku]);
    }

    public function show($id)
    {
        $buku = $this->daftarBuku[$id] ?? null;
        return view('tokobuku.show', ['buku' => $buku, 'id' => $id]);
    }

}
