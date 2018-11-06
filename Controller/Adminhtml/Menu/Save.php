<?php

namespace Lulu\Menu\Controller\Adminhtml\Menu;

class Save extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Lulu_Menu::menu_save';
    /**
     * @var \Lulu\Menu\Api\MenuRepositoryInterface
     */
    private $menuRepository;

    /**
     * @var \Lulu\Menu\Api\Data\MenuInterfaceFactory
     */
    private $menuFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Lulu\Menu\Api\Data\MenuInterfaceFactory $menuFactory,
        \Lulu\Menu\Api\MenuRepositoryInterface $menuRepository
    ) {
        $this->menuFactory = $menuFactory;
        $this->menuRepository = $menuRepository;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     * @throws \Exception
     */
    public function execute()
    {
        $postData = $this->_request->getParams();
        if (isset($postData['id']) && $this->menuRepository->getById($postData['id'])) {
            //валидация формы
            $menuRepository = $this->menuFactory->create();
            $menuRepository->setData($postData);
            $this->menuRepository->save($menuRepository);
            $this->messageManager->addSuccess(__('Your values has beeen submitted successfully.'));
            return $this->_redirect($this->getUrl('/*/index'));
        } else {
            $this->messageManager->addSuccess(__('Something went wrong.'));
        }
        return $this->_redirect($this->getUrl('/*/index'));
    }
}
