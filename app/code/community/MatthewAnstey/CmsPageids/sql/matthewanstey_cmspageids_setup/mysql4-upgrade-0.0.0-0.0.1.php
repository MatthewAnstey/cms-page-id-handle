<?php

$installer = $this;
$installer->startSetup();
 
$installer->run('ALTER TABLE cms_page ADD custom_handle VARCHAR( 255 ) NULL;');

$installer->endSetup();