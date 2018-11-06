<?php

namespace Lulu\Menu\ResourceModel\Menu;

class Item extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    const CACHE_TAG = 'menu_item_data';

    public function _construct()
    {
        $this->_init('lulu_menu_item', 'id');
    }
}
