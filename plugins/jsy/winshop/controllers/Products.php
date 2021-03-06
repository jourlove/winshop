<?php namespace Jsy\WinShop\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use GuzzleHttp\Client;
use Validator;

/**
 * Products Back-end Controller
 */
class Products extends Controller
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

        BackendMenu::setContext('Jsy.WinShop', 'product', 'product_list');

    }

    public function onProductGet()
    {

        $v = Validator::make(input(), array(
            'jan' => 'required|numeric',
        ));

        if ($v->fails()) {
            return ['Name' => "", 'Description' => ""];
        }

        $client = new Client();
        $res = $client->request('GET', 'http://shopping.yahooapis.jp/ShoppingWebService/V1/json/itemSearch', [
            'query' => [
                'appid' => 'dj0zaiZpPTdxQmNNT3JyemtmMyZzPWNvbnN1bWVyc2VjcmV0Jng9OGM-',
                'jan' => input('jan'),
                'hits' => 1,
            ]
        ]);
        $res_arr = json_decode( $res->getBody(), true);
        $product = $res_arr['ResultSet'][0]['Result'][0];
        return $product;
    }


}
