<?php

namespace NorthernLights\EloquentBootstrap;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Model
 * @package NorthernLights\EloquentBootstrap
 *
 * Declare methods (These are dynamically called by Eloquent Model, therefore IDE won't offer any annotations)
 * Illuminate\Database\Eloquent\Model::__callStatic(...)->__call(...)->...
 *
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 */
abstract class Model extends EloquentModel
{
}