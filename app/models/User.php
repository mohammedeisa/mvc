<?php
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 4/25/2018
 * Time: 12:50 AM
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $fillable= ['username','email'];
}