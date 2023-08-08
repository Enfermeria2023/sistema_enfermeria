<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InsumosMedico
 *
 * @property $id
 * @property $nombre
 * @property $description
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property InformePasiente[] $informePasientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InsumosMedico extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'description' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','description','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informePasientes()
    {
        return $this->hasMany('App\Models\InformePasiente', 'id_insumo', 'id');
    }
    

}
