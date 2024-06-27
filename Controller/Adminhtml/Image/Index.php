<?php

namespace MgtWizards\ImageClean\Controller\Adminhtml\Image;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{

    protected $resultPageFactory;

    /**
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action.
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('MgtWizards_ImageClean::image');
        $resultPage->addBreadcrumb(__('MgtWizards'), __('MgtWizards'));
        $resultPage->addBreadcrumb(__('Manage item'), __('Manage unused product images'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage unused product images'));

        return $resultPage;
    }
}
