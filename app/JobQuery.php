<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobQuery extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'job_queries';

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
    protected $fillable = ['title', 'description', 'user_id', 'user_price', 'admin_price', 'status'];

    public function user()
    {
        return $this->BelongsTo('App\User');
    }
    


     public function getColumns(){
           return array_slice( $this->getFillable(), 0, config('crudgenerator.view_columns_number'));
     }
}
