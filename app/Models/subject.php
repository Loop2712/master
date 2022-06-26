<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subjects';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_sub', 'sub_name', 'professor', 'day', 'time_start', 'time_end', 'sub_room_id'];

    
}
