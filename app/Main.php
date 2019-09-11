<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mains';

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
    protected $fillable = ['test'];

    


     public function getColumns(){
           return array_slice( $this->getFillable(), 0, config('crudgenerator.view_columns_number'));
     }
}
