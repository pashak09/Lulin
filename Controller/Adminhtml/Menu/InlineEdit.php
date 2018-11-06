<?php

namespace Lulu\Menu\Controller\Adminhtml\Menu;

class InlineEdit extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Lulu_Menu::menu_save';
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;
    /**
     * @var \Magento\Framework\Registry
     */
    private $registry;
    /**
     * @var \Lulu\Menu\Api\Data\MenuInterfaceFactory
     */
    private $menuFactory;
    /**
     * @var \Lulu\Menu\Api\MenuRepositoryInterface
     */
    private $menuRepository;
    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    private $jsonFactory;

    /**
     * InlineEdit constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Lulu\Menu\Api\Data\MenuInterfaceFactory $menuFactory
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
     * @param \Lulu\Menu\Api\MenuRepositoryInterface $menuRepository
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Lulu\Menu\Api\Data\MenuInterfaceFactory $menuFactory,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory,
        \Lulu\Menu\Api\MenuRepositoryInterface $menuRepository
    ) {
        $this->menuRepository = $menuRepository;
        $this->menuFactory = $menuFactory;
        $this->registry = $registry;
        $this->resultPageFactory = $resultPageFactory;
        $this->jsonFactory = $jsonFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $postData = current($this->_request->getParam('items', [])) ?? false;
        $infoArray = [
            'messages' => ['Your values has beeen submitted successfully.'],
            'error' => false
        ];
        if (isset($postData['title']) && strlen($postData['title']) >= 3 &&
            isset($postData['id']) && is_numeric($postData['id']) &&
            $this->_request->getParam('isAjax') && isset($postData['title']) &&
            $this->menuRepository->getById($postData['id'])) {
            $menuRepository = $this->menuFactory->create();
            $menuRepository->setData($postData);
            $this->menuRepository->save($menuRepository);
        } else {
            $infoArray['messages'] = ['Something went wrong.'];
            $infoArray['error'] = true;
        }

        return $this->jsonFactory->create()->setData($infoArray);
    }
}
