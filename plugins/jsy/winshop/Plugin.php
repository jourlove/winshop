<?php namespace Jsy\WinShop;

use Backend;
use System\Classes\PluginBase;

/**
 * WinShop Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'WinShop',
            'description' => 'No description provided yet...',
            'author'      => 'Jsy',
            'icon'        => 'icon-shopping-basket'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Jsy\WinShop\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'jsy.winshop.access_orders' => ['tab' => 'jsy.winshop::lang.plugin.tab', 'label' => 'jsy.winshop::lang.plugin.access_orders'],
            'jsy.winshop.access_products' => ['tab' => 'jsy.winshop::lang.plugin.tab', 'label' => 'jsy.winshop::lang.plugin.access_products'],
        ];

    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'order' => [
                'label'       => 'jsy.winshop::lang.plugin.order',
                'url'         => Backend::url('jsy/winshop/orders'),
                'icon'        => 'icon-shopping-bag',
                'permissions' => ['jsy.winshop.*'],
                'order'       => 400,
                
                'sideMenu' => [
                    'new_order' => [
                        'label'       => '添加订单',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('jsy/winshop/orders/create'),
                    ],
                    'order_list' => [
                        'label'       => '订单一览',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('jsy/winshop/orders'),
                    ]
                ]

            ],
            'post' => [
                'label'       => 'jsy.winshop::lang.plugin.post',
                'url'         => Backend::url('jsy/winshop/posts'),
                'icon'        => 'icon-paper-plane',
                'permissions' => ['jsy.winshop.*'],
                'order'       => 401,
                
                'sideMenu' => [
                    'new_post' => [
                        'label'       => '添加邮单',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('jsy/winshop/posts/create'),
                    ],
                    'post_list' => [
                        'label'       => '邮单一览',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('jsy/winshop/posts'),
                    ]
                ]

            ],
            'warehouse' => [
                'label'       => 'jsy.winshop::lang.plugin.warehouse',
                'url'         => Backend::url('jsy/winshop/warehouses'),
                'icon'        => 'icon-cube',
                'permissions' => ['jsy.winshop.*'],
                'order'       => 402,
                
                'sideMenu' => [
                    'new_warehouse' => [
                        'label'       => '商品入库',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('jsy/winshop/warehouses/create'),
                    ],
                    'warehouse_list' => [
                        'label'       => '入库一览',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('jsy/winshop/warehouses'),
                    ]
                ]

            ],
            'product' => [
                'label'       => 'jsy.winshop::lang.plugin.product',
                'url'         => Backend::url('jsy/winshop/products'),
                'icon'        => 'icon-bitbucket',
                'permissions' => ['jsy.winshop.products'],
                'order'       => 403,
                
                'sideMenu' => [
                    'new_product' => [
                        'label'       => '添加商品',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('jsy/winshop/products/create'),
                    ],
                    'product_list' => [
                        'label'       => '商品一览',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('jsy/winshop/products'),
                    ],
                ]

            ],

        ];
    }
}
