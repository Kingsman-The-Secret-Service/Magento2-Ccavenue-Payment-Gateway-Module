<?php
namespace Magekmf\Ccavenue\Controller\Request;

use \Magento\Framework\App\Action\Context;
use Magekmf\Ccavenue\Model\Ccavenue;


class Index extends \Magento\Framework\App\Action\Action 
{
	public function __construct(
	    Context $context,
	   	Ccavenue $model
		) 
	{
	    $this->model = $model;

	    parent::__construct($context);
	}
    /**
     * @override
     * @see \Magento\Framework\App\Action\Action::execute()
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute() {

    	// print_r($this->generateUrl());
    	// die;
        return $this->resultRedirectFactory->create()->setUrl($this->generateUrl());
    }

    public function generateUrl(){

        $baseUrl = "https://secure.ccavenue.com/transaction/transaction.do";
        $queryData = [
            'command' => 'initiateTransaction',
            'encRequest' => $this->model->getEncryptedData(),
            'access_code' => $this->model->getAccessCode()
        ];

        return $baseUrl.'?'. http_build_query($queryData);
    }
}