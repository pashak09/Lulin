<?php

namespace Lulu\Menu\Block\Adminhtml\Menu\Button;

use Lulu\Menu\Block\Adminhtml\AbstractElements\Button;

class Back extends Button
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
                'label' => __('Back'),
                'url' => $this->getUrl('lulu/menu/index'),
                'class' => 'back'
            ];
    }
}
