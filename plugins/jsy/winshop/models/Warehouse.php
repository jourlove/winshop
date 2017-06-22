<?php namespace Jsy\WinShop\Models;

use Model;

/**
 * Warehouse Model
 */
class Warehouse extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'jsy_winshop_warehouses';

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
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
