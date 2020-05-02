<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sushi
 *
 * @property string name
 * @property float price
 * @property string image
 *
 * @package App
 */
class Sushi extends Model
{
    protected $table = 'sushies';
}
