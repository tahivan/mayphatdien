<?php

class SM_WidgetImage_Block_Adminhtml_Widget_Option_Upload extends Mage_Adminhtml_Block_Template
{
    /**
     * Prepare chooser element HTML
     *
     * @param Varien_Data_Form_Element_Abstract $element Form Element
     * @return Varien_Data_Form_Element_Abstract
     */
    public function prepareElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $uniqId = Mage::helper('core')->uniqHash($element->getId());
        //brand_admin/upload/index
        $sourceUrl = Mage::getSingleton('adminhtml/url')->getUrl('adminhtml/cms_wysiwyg_images/index/');
        //http://dev.exklusives-schreiben.de/index.php/admin//index/key/8ac63e8d0c5f61eae2ec5f8227fba39e/target_element_id/page_content/?isAjax=true

        $chooser = $this->getLayout()->createBlock('widget/adminhtml_widget_chooser')
            ->setElement($element)
            ->setTranslationHelper($this->getTranslationHelper())
            ->setConfig($this->getConfig())
            ->setFieldsetId($this->getFieldsetId())
            ->setUniqId($uniqId);

        $chooser->setSourceUrl($sourceUrl . 'target_element_id/' . $chooser->getUniqId() . 'label');


        if ($element->getValue()) {
            $chooser->setLabel($element->getValue());
        }

        $element->setData('after_element_html', $chooser->toHtml());
        return $element;
    }

}