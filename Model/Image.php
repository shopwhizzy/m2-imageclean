<?php

namespace MgtWizards\ImageClean\Model;

class Image extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('MgtWizards\ImageClean\Model\ResourceModel\Image');
    }
}
