<?php

namespace Lulu\Menu\Controller\Adminhtml\Menu;

use Magento\Framework\Exception\NoSuchEntityException;

class Delete extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Lulu_Menu::menu_delete';

    /**
     * @var MenuInterfaceFactory
     */
    private $menuRepository;

    /**
     * Delete constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Lulu\Menu\Api\Data\MenuInterfaceFactory $menuFactory
     * @param \Lulu\Menu\Api\MenuRepositoryInterface $menuRepository
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Lulu\Menu\Api\MenuRepositoryInterface $menuRepository
    ) {
        $this->menuRepository = $menuRepository;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        try {
            $id = $this->getRequest()->getParam('id');
            if ($this->menuRepository->getById($id)->getId()) {
                $this->menuRepository->deleteById($id);
                $this->messageManager->addSuccess(__('Delete sucses'));
                $this->_redirect($this->getUrl('*/*/index'));
            } else {
                throw new NoSuchEntityException('not found id menu');
            }
        } catch (\Exception $e) {
            $this->messageManager->addError(__('Something went wrong'));
            $this->_redirect($this->getUrl('*/*/index'));
        }
    }
}
