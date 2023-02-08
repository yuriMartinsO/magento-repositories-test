<?php

namespace Webjump\WorldPet\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Custom extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('pet_kind_table', 'entity_id');
    }
}
