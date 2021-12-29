<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'Product';
    public $timestamps = true;
}
class Account extends Model
{
    protected $table = 'Account';
    public $timestamps = true;
}
class Order extends Model
{
    protected $table = 'Order';
    public $timestamps = true;
}
class OrderDetail extends Model
{
    protected $table = 'Product';
    public $timestamps = true;
}
class ProductDetail extends Model
{
    protected $table = 'ProductDetail';
    public $timestamps = true;
}
class Size extends Model
{
    protected $table = 'Size';
    public $timestamps = true;
}
class Color extends Model
{
    protected $table = 'Color';
    public $timestamps = true;
}
class Category extends Model
{
    protected $table = 'Category';
    public $timestamps = true;
}
class Producer extends Model
{
    protected $table = 'Producer';
    public $timestamps = true;
}