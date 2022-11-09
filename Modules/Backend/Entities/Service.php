<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    protected $fillable = ['name','details'];
    

}
