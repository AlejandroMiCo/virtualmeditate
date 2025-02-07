<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Objeto
 *
 * @property $id
 * @property $nombre
 * @property $entorno_id
 * @property $dimensiones
 * @property $posicion
 * @property $color
 * @property $created_at
 * @property $updated_at
 *
 * @property Entorno $entorno
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Objeto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'entorno_id', 'dimensiones', 'posicion', 'color'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entorno()
    {
        return $this->belongsTo(\App\Models\Entorno::class, 'entorno_id', 'id');
    }
    
}
