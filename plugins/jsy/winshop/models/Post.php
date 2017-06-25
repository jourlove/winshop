<?php namespace Jsy\WinShop\Models;

use Model;

/**
 * Post Model
 */
class Post extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'jsy_winshop_posts';
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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function beforeSave()
    {
        $products_re = array();
        foreach($this->products as $product)
        {
            if (empty($product['product_JAN']))
            {
                continue;
            }
            if (count($products_re))
            {
                $i = 0;
                $len = count($products_re);
                foreach($products_re as $key => $prod)
                {
                    if ($product['product_JAN'] == $prod['product_JAN']) {
                        $products_re[$key]['product_amount'] = $prod['product_amount'] + $product['product_amount'];
                    }
                    else
                    {
                        if ($i == $len - 1) {
                            array_push($products_re,$product);
                        }
                    }
                    $i++;
                }
            }
            else
            {
                array_push($products_re,$product);
            }
        }
        trace_log($this->products);
        trace_log($products_re);
        $this->products = $products_re;
    }

    public function getProductAmountOptions()
    {
        $ret = array();
        for($i=1; $i<100; $i++)
        {
            //array_push($ret,[$i,$i]);
            $ret[$i] = $i;
        }
        return $ret;
    }
}
