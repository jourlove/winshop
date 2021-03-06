<?php namespace Jsy\WinShop\Models;

use Model;

/**
 * Product Model
 */
class Product extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'jsy_winshop_products';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'orders' => ['Jsy\WinShop\Models\Order','table' => 'jsy_winshop_order_product','pivot' => ['amount']],
        'posts' => 'Jsy\WinShop\Models\Post',
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = ['photos' => 'System\Models\File'];
}
