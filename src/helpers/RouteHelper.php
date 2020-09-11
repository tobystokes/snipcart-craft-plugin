<?php
/**
 * Snipcart plugin for Craft CMS 3.x
 *
 * @link      https://workingconcept.com
 * @copyright Copyright (c) 2018 Working Concept Inc.
 */

namespace workingconcept\snipcart\helpers;

class RouteHelper
{
    /**
     * Returns an array of control panel routes.
     *
     * @return array
     */
    public static function getCpRoutes(): array
    {
        return [
            'snipcart' => 'snipcart/overview/index',
            'snipcart/orders' => 'snipcart/orders/index',
            'snipcart/order/<orderId>' => 'snipcart/orders/order-detail',
            'snipcart/packingslip/<orderId>' => 'snipcart/orders/order-packingslip',
            'snipcart/customers' => 'snipcart/customers/index',
            'snipcart/customer/<customerId>' => 'snipcart/customers/customer-detail',
            'snipcart/discounts' => 'snipcart/discounts/index',
            'snipcart/discounts/new' => 'snipcart/discounts/new',
            'snipcart/discount/<discountId>' => 'snipcart/discounts/discount-detail',
            'snipcart/abandoned' => 'snipcart/carts/index',
            'snipcart/abandoned/<cartId>' => 'snipcart/carts/detail',
            'snipcart/subscriptions' => 'snipcart/subscriptions/index',
            'snipcart/subscription/<subscriptionId>' => 'snipcart/subscriptions/detail',
        ];
    }
}
