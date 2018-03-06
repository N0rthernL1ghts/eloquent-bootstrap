<?php

namespace NorthernLights\EloquentBootstrap;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Model
 * @package NorthernLights\EloquentBootstrap
 *
 * Declare methods (These are dynamically called by Eloquent Model, therefore IDE won't offer any annotations)
 * Illuminate\Database\Eloquent\Model::__callStatic(...)->__call(...)->...
 *
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder whereKey($id)
 * @method static Builder whereKeyNot($id)
 * @method static Builder orWhere($column, $operator = null, $value = null)
 * @method static Collection fromQuery($query, $bindings = [])
 * @method static EloquentModel|Collection|Builder[]|Builder|null find($id, $columns = ['*'])
 * @method static Collection findMany($ids, $columns = ['*'])
 * @method static Collection findOrFail($id, $columns = ['*'])
 * @method static EloquentModel findOrNew($id, $columns = ['*'])
 * @method static Collection|EloquentModel[] get($columns = ['*'])
 */
abstract class Model extends EloquentModel
{
}