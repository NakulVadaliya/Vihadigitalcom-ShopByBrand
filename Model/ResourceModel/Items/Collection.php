<?php
/**
 * Copyright © 2015 Vihadigitalcom. All rights reserved.
 */

namespace Vihadigitalcom\ShopByBrand\Model\ResourceModel\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Vihadigitalcom\ShopByBrand\Model\Items', 'Vihadigitalcom\ShopByBrand\Model\ResourceModel\Items');
    }
}
