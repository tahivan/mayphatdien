<?php

$installer = $this;

$installer->startSetup();
$installer->removeAttribute('catalog_product', 'pdf_download_url');
$installer->addAttribute('catalog_product', 'pdf_download_url', array(
        'group' => 'General',
        'type' => 'varchar',
        'backend' => '',
        'frontend' => '',
        'label' => 'Url to download file',
        'input' => 'text',
        'class' => '',
        'source' => '',
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible' => true,
        'required' => false,
        'user_defined' => false,
        'default' => '',
        'searchable' => false,
        'filterable' => false,
        'comparable' => false,
        'visible_on_front' => true,
        'visible_in_advanced_search' => false,
        'unique' => false,
        'used_in_product_listing' => true
    )
);
$installer->endSetup();