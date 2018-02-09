<?php
/**
 * Copyright © 2015 Vihadigitalcom. All rights reserved.
 */

namespace Vihadigitalcom\ShopByBrand\Model\ResourceModel;

class Items extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('vihadigitalcom_shopbybrand_items', 'id');
    }
}
