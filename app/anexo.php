<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anexo extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'funcionario', 'estamento', 'box','sector','anexo',
  ];
}
