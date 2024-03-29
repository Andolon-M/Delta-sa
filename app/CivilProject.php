<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CivilProject
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $mt_cuadrado
 * @property $ciudad
 * @property $ruta_fotos
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CivilProject extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => '',
    'mt_cuadrado' => '',
    'ciudad' =>'required',
		
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','mt_cuadrado','ciudad','ruta_fotos'];



}
