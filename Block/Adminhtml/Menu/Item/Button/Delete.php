<?php

namespace Lulu\Menu\Block\Adminhtml\Menu\Item\Button;

use Lulu\Menu\Block\Adminhtml\AbstractElements\Button;

class Delete extends Button
{
    const ADMIN_RESOURCE = 'Lulu_Menu::menu_delete';

    /**
     * @return array
     */
    public function getButtonData()
    {
        $data = $this->getRegistry()->registry('menu_data');
        $dataButton = [];
        if ($data && $this->isAllowed()) {
            $dataButton = [
                'label' => __('Delete'),
                'class' => 'del',
                'on_click' => 'deleteConfirm(\'' . __(
                    'Are you sure you want to delete the selected menu?'
                ) . '\', \'' . $this->getUrl('*/menu/delete', ['id' => $data->getId()]) . '\')',
                'sort_order' => 20,
            ];
        }

        return $dataButton;
    }
}
