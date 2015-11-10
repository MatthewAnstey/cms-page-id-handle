<?php

$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();
 
$installer->run('ALTER TABLE cms_page ADD custom_handle VARCHAR( 255 ) NULL; ');
 
$installer->endSetup();