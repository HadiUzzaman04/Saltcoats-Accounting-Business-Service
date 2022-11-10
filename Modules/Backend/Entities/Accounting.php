<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Accounting extends Model
{
    use HasFactory;
    protected $table = 'accountings';

    protected $fillable = ['question','answer'];
    

}
