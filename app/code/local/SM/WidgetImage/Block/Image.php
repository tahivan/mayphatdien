<?php

class SM_WidgetImage_Block_Image extends Mage_Core_Block_Abstract implements Mage_Widget_Block_Interface
{

    protected function _toHtml()
    {
        $config = $this->getData();
        $html = "<img src='" . $config['image_3'] . "'>";
        return $html;
    }
}