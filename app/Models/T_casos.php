<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class T_casos
 * @package App\Models
 * @version February 5, 2021, 5:28 pm UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property string $fecha
 * @property integer $c_profesional_id
 * @property integer $t_usuario_id
 * @property integer $c_estado_id
 */
class T_casos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 't_casos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'fecha',
        'c_profesional_id',
        't_usuario_id',
        'c_estado_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'fecha' => 'string',
        'c_profesional_id' => 'integer',
        't_usuario_id' => 'integer',
        'c_estado_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'fecha' => 'required',
        'c_profesional_id' => 'required',
        't_usuario_id' => 'required',
        'c_estado_id' => 'required'
    ];

    
}
