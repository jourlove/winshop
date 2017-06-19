<?php namespace Jsy\WinShop\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use GuzzleHttp\Client;

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

        BackendMenu::setContext('Jsy.WinShop', 'winshop', 'products');

    }

    public function onProductGet()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://shopping.yahooapis.jp/ShoppingWebService/V1/json/itemSearch', [
            'query' => [
                'appid' => 'dj0zaiZpPTdxQmNNT3JyemtmMyZzPWNvbnN1bWVyc2VjcmV0Jng9OGM-',
                'jan' => input('jan'),
            ]
        ]);
        $res_arr = json_decode( $res->getBody(), true);
        $product = $res_arr['ResultSet'][0]['Result'][0];
        return $product;
    }
}
