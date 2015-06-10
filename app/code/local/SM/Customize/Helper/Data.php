<?php

/**
 * Created by PhpStorm.
 * User: VanThai
 * Date: 6/9/2015
 * Time: 1:18 AM
 */
class SM_Customize_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getCheckoutUrl()
    {
        return $this->_getUrl('checkout/');
    }

    public function getBlogUrl()
    {
        return $this->_getUrl('blog/');
    }
}