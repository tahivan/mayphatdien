<?php

class SM_Customize_Block_Footer_News extends NeoTheme_Blog_Block_Post_List
{

    protected $_newsCollection;

    public function __construct()
    {
        $this->setLimit(2);
    }

    public function getHotNews()
    {
        $this->_newsCollection = Mage::getModel('neotheme_blog/post')
            ->getCollection()
            ->addStoreFilter()
            ->addStatusFilter(NeoTheme_Blog_Model_Post::STATUS_ACTIVE)
            ->addPublishFilter()
            ->setPostOrder()
            ->setPageSize($this->getLimit());

        return $this->_newsCollection;
    }
}