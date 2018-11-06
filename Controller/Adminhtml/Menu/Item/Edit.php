<?php

namespace Lulu\Menu\Controller\Adminhtml\Menu\Item;

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
    private $itemRepositoryt;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Magento\Framework\Registry $registry
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Lulu\Menu\Api\Menu\ItemRepositoryInterface $itemRepository,
        \Magento\Framework\Registry $registry
    ) {
        $this->itemRepositoryt = $itemRepository;
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
        if ($id && $data = $this->itemRepositoryt->getById($id)) {
            $titleForm = "Edit Item \"Menu {$data->getTitle()}\"";
            $this->registry->register('menu_data', $data);
        } else {
            $this->messageManager->addErrorMessage('Not found');
            return $this->_redirect('lulu/menu');
        }
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend((__($titleForm)));
        return $resultPage;
    }
}
