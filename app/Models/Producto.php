<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Atributos vinculados a la tabla "producto" de nuestra BD "MR_Tienda".
    use HasFactory;

    protected $table = "producto";
    protected $keyType = "string";
    protected $primaryKey = "cod";
    public $incrementing = false;
    public $timestamps = false;
    public $fillable = ['cod', 'nombre', 'nombre-corto', 'descripcion', 'PVP', 'familia'];

    /*
    function ejemplo()
    {
        $producto = ['cod1', 'nombre 1', 'nombre-corto', 'descripcion', 123, 'Informática'];
        $p = new Producto($producto);
        $p->save();
    }
    */
}
