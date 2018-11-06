<?php

namespace Lulu\Menu\ResourceModel\Menu\Item;

use Lulu\Menu\Model\Menu\Item\Column as DataModel;
use Lulu\Menu\ResourceModel\Menu\Item\Column as ResourseModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    public function _construct()
    {
        $this->_init(DataModel::class, ResourseModel::class);
    }
}
