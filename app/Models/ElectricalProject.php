<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ElectricalProject
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $mt_cableado
 * @property $ciudad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ElectricalProject extends Model
{
    
    static $rules = [
		'nombre' => 'required|string',
		'descripcion' => 'required|string',
		'mt_cableado' => 'required|string',
		'ciudad' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','mt_cableado','ciudad'];



}
