<?php

namespace MgtWizards\ImageClean\Model\ResourceModel\Image;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('MgtWizards\ImageClean\Model\Image', 'MgtWizards\ImageClean\Model\ResourceModel\Image');
        // $this->_map['fields']['page_id'] = 'main_table.page_id';
    }
}
