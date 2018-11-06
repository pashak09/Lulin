<?php

namespace Lulu\Menu\ResourceModel\Menu;

use Lulu\Menu\Model\Menu\Item as DataModel;
use Lulu\Menu\ResourceModel\Menu\Item as ResourseModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = DataModel::ITEM_ID;

    public function _construct()
    {
        $this->_init(DataModel::class, ResourseModel::class);
    }
}
