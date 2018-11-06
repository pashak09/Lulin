<?php

namespace Lulu\Menu\Block\Adminhtml\Menu\Item\Button;

use Lulu\Menu\Block\Adminhtml\AbstractElements\Button;

class Save extends Button
{
    const ADMIN_RESOURCE = 'Lulu_Menu::menu_save';

    /**
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        if ($this->isAllowed()) {
            $data = [
                'label' => __('Save'),
                'class' => 'save primary',
                'data_attribute' => [
                    'mage-init' => ['button' => ['event' => 'd']],
                    'form-role' => 'save',

                ],
//                'url' => 'lulu/menu_item/save',
                'sort_order' => 10
            ];
        }
        return $data;
    }
}
