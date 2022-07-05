<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class ProductCategory extends Model
{
    use HasFactory, InteractsWithMedia;
    protected $table='product-categories';
}
