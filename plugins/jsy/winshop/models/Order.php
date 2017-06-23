<?php namespace Jsy\WinShop\Models;

use Model;

/**
 * Order Model
 */
class Order extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'jsy_winshop_orders';
    protected $jsonable = ['products']; 

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
    public $belongsTo = [
        'user' => 'Rainlab\User\Models\User',
    ];
    public $belongsToMany = [
        'products' => ['Jsy\WinShop\Models\Product','table' => 'jsy_winshop_order_product','pivot' => ['amount']],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}
