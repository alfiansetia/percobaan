<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'penilaian';

    public function total()
    {
        return intval($this->nilai1) + intval($this->nilai2)
            + intval($this->nilai3) + intval($this->nilai4)
            + intval($this->nilai5) + intval($this->nilai6)
            + intval($this->nilai7) + intval($this->nilai8)
            + intval($this->nilai9) + intval($this->nilai10)
            + intval($this->nilai11) + intval($this->nilai12);
    }
}
