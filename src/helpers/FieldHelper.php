<?php
/**
 * Snipcart plugin for Craft CMS 3.x
 *
 * @link      https://workingconcept.com
 * @copyright Copyright (c) 2018 Working Concept Inc.
 */

namespace workingconcept\snipcart\helpers;

use workingconcept\snipcart\fields\ProductDetails;

/**
 * Model utility methods.
 */
class FieldHelper
{
    /**
     * Returns product info for the provided Element regardless of the
     * field handle.
     *
     * @param \craft\base\Element $element
     * @return ProductDetails|null
     */
    public static function getProductInfo($element)
    {
        $fieldLayout = $element->getFieldLayout();
        $fields = $fieldLayout->getFields();

        foreach ($fields as $field)
        {
            if ($field instanceof ProductDetails)
            {
                return $element->{$field->handle};
            }
        }

        return null;
    }

    /**
     * Returns the field handle for the Element's Product Details field,
     * if it exists.
     *
     * @param \craft\base\Element $element
     * @return ProductDetails|null
     */
    public static function getProductInfoFieldHandle($element)
    {
        $fieldLayout = $element->getFieldLayout();
        $fields = $fieldLayout->getFields();

        foreach ($fields as $field)
        {
            if ($field instanceof ProductDetails)
            {
                return $field->handle;
            }
        }

        return null;
    }


}