<?php

$installer = $this;

$installer->startSetup();

$sql = "ALTER TABLE `neotheme_blog_category` ADD `show_child_category_first` SMALLINT(5) unsigned NOT NULL DEFAULT '0' ";
$installer->run($sql);

$installer->endSetup();