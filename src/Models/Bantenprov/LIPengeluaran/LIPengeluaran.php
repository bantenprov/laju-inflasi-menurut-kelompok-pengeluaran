<?php

namespace Bantenprov\LIPengeluaran\Models\Bantenprov\LIPengeluaran;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LIPengeluaran extends Model
{

    protected $table = 'li_pengeluarans';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\LIPengeluaran\Models\Bantenprov\LIPengeluaran\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\LIPengeluaran\Models\Bantenprov\LIPengeluaran\Regency','id','regency_id');
    }

}

