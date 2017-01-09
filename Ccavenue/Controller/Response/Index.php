<?php
namespace Magekmf\Ccavenue\Controller\Response;

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

        print "ccavenue response";
    }
}