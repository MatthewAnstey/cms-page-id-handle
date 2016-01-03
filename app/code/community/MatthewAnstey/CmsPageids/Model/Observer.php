<?php

class MatthewAnstey_CmsPageids_Model_Observer
{
    public function setId($observer)
    {
      
      if ($handle = $observer->getEvent()->getPage()->custom_handle) {

      } else {
        $handle =  'cms_page_' . $observer->getEvent()->getPage()->page_id;
      }
      
      $action = $observer->getEvent()->getController_action();
      $action->getLayout()->getUpdate()
            ->addHandle($handle);
      } 

      public function cmsField($observer)
      {
          $model = Mage::registry('cms_page');
          $form = $observer->getForm();
          $fieldset = $form->addFieldset('matthewanstey_content_fieldset', array('legend'=>Mage::helper('cms')->__('Custom Handle'),'class'=>'fieldset-wide'));
          $fieldset->addField('custom_handle', 'text', array(
              'name'      => 'custom_handle',
              'label'     => Mage::helper('cms')->__('custom handle'),
              'title'     => Mage::helper('cms')->__('Custom Hanlde'),
              'disabled'  => false,
              'value'     => $model->getCustomHandle()
          ));
      
      }
}