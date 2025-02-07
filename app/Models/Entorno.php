<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entorno
 *
 * @property $id
 * @property $categoria_id
 * @property $nombre
 * @property $musica
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Objeto[] $objetos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entorno extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['categoria_id', 'nombre', 'musica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class, 'categoria_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function objetos()
    {
        return $this->hasMany(\App\Models\Objeto::class, 'id', 'entorno_id');
    }
    
}
