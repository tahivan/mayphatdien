<?php

$installer = $this;

$installer->startSetup();
$installer->removeAttribute('catalog_product', 'allow_show_price');
$installer->addAttribute('catalog_product', 'allow_show_price', array(
        'group' => 'General',
        'type' => 'int',
        'backend' => '',
        'frontend' => '',
        'label' => 'Allow show price on detail page',
        'input' => 'select',
        'class' => '',
        'source'   => 'eav/entity_attribute_source_boolean',
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible' => true,
        'required' => false,
        'user_defined' => false,
        'default' => 1,
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