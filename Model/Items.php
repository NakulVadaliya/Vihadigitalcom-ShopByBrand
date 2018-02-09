<?php
/**
 * Copyright © 2015 Vihadigitalcom. All rights reserved.
 */

namespace Vihadigitalcom\ShopByBrand\Model;

class Items extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Vihadigitalcom\ShopByBrand\Model\ResourceModel\Items');
    }
}
