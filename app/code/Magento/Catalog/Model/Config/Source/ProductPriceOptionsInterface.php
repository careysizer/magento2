<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Catalog\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Interface ProductPriceOptionsInterface
 */
interface ProductPriceOptionsInterface extends OptionSourceInterface
{
    /**#@+
     * Values
     */
    const VALUE_FIXED = 'fixed';
    const VALUE_PERCENT = 'percent';
    /**#@-*/
}
