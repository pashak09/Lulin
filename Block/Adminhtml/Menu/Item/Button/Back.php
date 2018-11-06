<?php

namespace Lulu\Menu\Block\Adminhtml\Menu\Item\Button;

use Lulu\Menu\Block\Adminhtml\AbstractElements\Button;

class Back extends Button
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        $data = $this->getRegistry()->registry('menu_data');
        return [
            'label' => __('Back'),
            'url' => $this->getUrl('lulu/menu/index', ['id' => $data->getMenuId()]),
            'class' => 'back'
        ];
    }
}
