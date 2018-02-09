<?php
/**
 * Copyright © 2015 Vihadigitalcom. All rights reserved.
 */

namespace Vihadigitalcom\ShopByBrand\Controller\Adminhtml\Items;

class Index extends \Vihadigitalcom\ShopByBrand\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('vihadigitalcom::base');
        $resultPage->getConfig()->getTitle()->prepend(__('Vihadigitalcom ShopByBrand'));
        $resultPage->addBreadcrumb(__('Vihadigitalcom'), __('Vihadigitalcom'));
        $resultPage->addBreadcrumb(__('Items'), __('ShopByBrand'));
        return $resultPage;
    }
}
