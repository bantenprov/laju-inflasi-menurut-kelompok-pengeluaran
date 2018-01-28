<?php

namespace Bantenprov\LajuInflasiPengeluaran\Models\Bantenprov\LajuInflasiPengeluaran;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LajuInflasiPengeluaran extends Model
{

    protected $table = 'laju_inflasi_pengeluarans';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\LajuInflasiPengeluaran\Models\Bantenprov\LajuInflasiPengeluaran\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\LajuInflasiPengeluaran\Models\Bantenprov\LajuInflasiPengeluaran\Regency','id','regency_id');
    }

}

