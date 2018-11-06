<?php

namespace Lulu\Menu\ResourceModel;

use Lulu\Menu\Model\Menu as DataModel;
use Lulu\Menu\ResourceModel\Menu as ResourseModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = DataModel::MENU_ID;

    public function _construct()
    {
        $this->_init(DataModel::class, ResourseModel::class);
    }
}
