<?php

$installer = $this;

$installer->startSetup();


$sql = "ALTER TABLE `neotheme_blog_post` ADD `image` TEXT NULL AFTER `summary`";
$installer->run($sql);

$sql = "ALTER TABLE `neotheme_blog_category` ADD `view_type` SMALLINT(5) unsigned NOT NULL DEFAULT '0' AFTER `status`";
$installer->run($sql);

$installer->endSetup();