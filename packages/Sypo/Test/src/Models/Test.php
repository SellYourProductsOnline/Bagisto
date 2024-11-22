<?php

namespace Sypo\Test\Models;

use Illuminate\Database\Eloquent\Model;
use Sypo\Test\Contracts\Test as TestContract;

class Test extends Model implements TestContract
{
    protected $fillable = [
        'name'
    ];
}