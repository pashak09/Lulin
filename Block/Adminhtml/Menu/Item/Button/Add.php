<?php

namespace Lulu\Menu\Block\Adminhtml\Menu\Item\Button;

use Lulu\Menu\Block\Adminhtml\AbstractElements\Button;

class Add extends Button
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
                'label' => __('Add Menu Item'),
                'class' => 'save primary',
                'data_attribute' => [
                    'mage-init' => ['button' => ['event' => 'save']],
                    'form-role' => 'save',
                ],
                'url' => $this->getUrl('*/menu/item/action')
            ];
        }
        return $data;
    }
}
