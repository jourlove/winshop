<?php namespace Jsy\WinShop\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Validator;
use Jsy\WinShop\Models\Product;

/**
 * Posts Back-end Controller
 */
class Posts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        $this->addCss('/plugins/jsy/winshop/assets/css/winshop.css');
        BackendMenu::setContext('Jsy.WinShop', 'post', 'post_list');
    }

    public function onGetProductInfo()
    {
        $v = Validator::make(input(), array(
            'jan' => 'required|numeric',
        ));

        if ($v->fails()) {
            return ['Name' => "", 'Price' => ""];
        }

        $product = Product::where('jan', input('jan'))->first();

        if ($product)
        {
            return ['Name' => $product->name, 'Price' => $product->price];
        } 
        else
        {
            return ['Name' => "", 'Price' => ""];
        }
    } 
    
}
