<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table="barang"; // Eloquent akan membuat model Barang menyimpan record di tabel barang
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable. *
     * @var array
     */
    protected $fillable = [
        'id',
        'kode_barang',
        'nama_barang',
        'gambar',
        'jumlah_barang',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
