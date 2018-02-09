<?php
/**
 * Copyright © 2015 Vihadigitalcom. All rights reserved.
 */

namespace Vihadigitalcom\ShopByBrand\Controller\Adminhtml\Items;

class Edit extends \Vihadigitalcom\ShopByBrand\Controller\Adminhtml\Items
{

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create('Vihadigitalcom\ShopByBrand\Model\Items');

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This item no longer exists.'));
                $this->_redirect('vihadigitalcom_shopbybrand/*');
                return;
            }
        }
        // set entered data if was error when we do save
        $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }
        $this->_coreRegistry->register('current_vihadigitalcom_shopbybrand_items', $model);
        $this->_initAction();
        $this->_view->getLayout()->getBlock('items_items_edit');
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('vihadigitalcom::base');
        $this->_view->renderLayout();
    }
}
