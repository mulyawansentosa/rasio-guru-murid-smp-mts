<?php

namespace Bantenprov\RasioGMSmpMts\Models\Bantenprov\RasioGMSmpMts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RasioGMSmpMts extends Model
{

    protected $table = 'rasio-guru-murid-smp-mtss';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\RasioGMSmpMts\Models\Bantenprov\RasioGMSmpMts\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\RasioGMSmpMts\Models\Bantenprov\RasioGMSmpMts\Regency','id','regency_id');
    }

}

