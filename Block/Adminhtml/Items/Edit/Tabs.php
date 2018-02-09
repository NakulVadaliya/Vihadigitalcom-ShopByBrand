<?php
/**
 * Copyright © 2015 Vihadigitalcom. All rights reserved.
 */
namespace Vihadigitalcom\ShopByBrand\Block\Adminhtml\Items\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('vihadigitalcom_shopbybrand_items_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Item'));
    }
}
