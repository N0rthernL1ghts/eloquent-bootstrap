<?php

namespace NorthernLights\EloquentBootstrap;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Model
 * @package NorthernLights\EloquentBootstrap
 *
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 */
abstract class Model extends EloquentModel
{
}