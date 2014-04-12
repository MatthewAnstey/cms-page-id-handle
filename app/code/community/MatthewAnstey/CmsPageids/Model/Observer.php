<?php

class MatthewAnstey_CmsPageids_Model_Observer
{
    public function setId($observer)
    {
      $pageId =  $observer->getEvent()->getPage()->page_id;
      $action = $observer->getEvent()->getController_action();
      $action->getLayout()->getUpdate()
            ->addHandle('cms_page_' . $pageId);
      }  
}