<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * App/Birthday
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthday
 * @property string|null $cell
 * @property string|null $home
 * @property integer $age
 * @property string|null $created_at
 * @property string|null $updated_at
 */


class Birthday extends Model
{
    protected $table = 'birthdays';
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'age'
    ];
}
