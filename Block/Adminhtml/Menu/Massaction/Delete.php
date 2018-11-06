<?php

namespace Lulu\News\Block\Adminhtml\Article\Massaction;

use Lulu\News\Block\Adminhtml\AbstractElements\Massaction\Item;

class Delete extends Item
{
    const ADMIN_RESOURCE = 'Lulu_Menu::article_save';
    const  ACTION = 'delete';
}
