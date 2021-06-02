<?php
namespace EVOMexico\Payment\Controller\Index;

class Response extends \Magento\Framework\App\Action\Action
{
    protected $resultRedirect;

    public function __construct(\Magento\Framework\Controller\ResultFactory $result){
        $this->resultRedirect = $result;
    }

    public function execute()
    {
        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);

        if ($this->getConfigData('ipg_mode') == 'standard') {
            $resultRedirect->setPath('EVOMexico_Payment/Controller/Standard');
        } else {
            $resultRedirect->setPath('EVOMexico_Payment/Controller/Hosted');
        }

        return $resultRedirect;
    }

}
