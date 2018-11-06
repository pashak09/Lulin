<?php

namespace Lulu\Menu\Controller\Adminhtml\Menu;

class Edit extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Neklo_News::menu_save';
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;
    /**
     *
     * @var \Magento\Framework\Registry
     */
    private $registry;
    /**
     * @var \Lulu\News\Model\MenuFactory
     */
    private $menuFactory;
    /**
     * @var \Lulu\News\Model\MenuFactory
     */
    private $menuRepository;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Magento\Framework\Registry $registry
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Lulu\Menu\Api\MenuRepositoryInterface $menuRepository,
        \Magento\Framework\Registry $registry
    ) {
        $this->menuRepository = $menuRepository;
        $this->registry = $registry;
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        if ($id) {
            $titleForm = 'Edit Menu';
            $data = $this->menuRepository->getById($id);
            if ($data) {
                $this->registry->register('menu_data', $data);
            } else {
                $this->messageManager->addErrorMessage('Not found');
                return $this->_redirect('lulu/menu/index');
            }
        } else {
            $titleForm = 'Add New Menu';
        }
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend((__($titleForm)));

        return $resultPage;
    }
}
