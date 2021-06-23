<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $nim;
    public $nama;
    public $jurusan;

    public function __construct($nim, $nama, $jurusan){
        $this->nim =$nim;
        $this->nim =$nama;
        $this->nim =$jurusan;
           
    }
    use HasFactory;
}
