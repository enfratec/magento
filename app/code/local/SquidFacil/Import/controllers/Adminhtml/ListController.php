<?php

class SquidFacil_Import_Adminhtml_ListController extends Mage_Adminhtml_Controller_Action {
    
    protected function _initAction() {
        $this->loadLayout()
                ->_setActiveMenu('import/list')
                ->_addBreadcrumb(Mage::helper('adminhtml')->__('Items Manager'), Mage::helper('adminhtml')->__('Item Manager'));

        return $this;
    }

    public function indexAction() {
        $email = Mage::getStoreConfig('squidfacil/squidfacil_group/squidfacil_email',Mage::app()->getStore());
        $token = Mage::getStoreConfig('squidfacil/squidfacil_group/squidfacil_token',Mage::app()->getStore());
        if(is_null($email) || is_null($token)){
            $this->_redirect('adminhtml/system_config/edit/section/squidfacil');
        }
        $this->_initAction()
                ->renderLayout();
    }

    public function massImportAction() {
        $sku = $this->getRequest()->getParam('sku');

        $this->loadLayout();
        $this->_setActiveMenu('import/import');
        $this->_addContent($this->getLayout()->createBlock('import/adminhtml_import'));
        $this->renderLayout();
    }

    public function massStatusAction() {
        /*
        $importIds = $this->getRequest()->getParam('import');
        if (!is_array($importIds)) {
            Mage::getSingleton('adminhtml/session')->addError($this->__('Please select item(s)'));
        } else {
            try {
                foreach ($importIds as $importId) {
                    $import = Mage::getSingleton('import/import')
                            ->load($importId)
                            ->setStatus($this->getRequest()->getParam('status'))
                            ->setIsMassupdate(true)
                            ->save();
                }
                $this->_getSession()->addSuccess(
                        $this->__('Total of %d record(s) were successfully updated', count($importIds))
                );
            } catch (Exception $e) {
                $this->_getSession()->addError($e->getMessage());
            }
        }
         * 
         */
        $this->_getSession()->addError("Not yet implemented");
        $this->_redirect('*/*/index');
    }

}