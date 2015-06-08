<?php

$installer = $this;

$installer->startSetup();



$sql = "ALTER TABLE `neotheme_blog_category` ADD `parent` VARCHAR (255) NULL AFTER `view_type`";
$installer->run($sql);

$sql = "ALTER TABLE `neotheme_blog_category` ADD `image` TEXT NULL AFTER `parent`";
$installer->run($sql);

$installer->endSetup();