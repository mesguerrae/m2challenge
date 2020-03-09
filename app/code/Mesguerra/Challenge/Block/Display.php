<?php
namespace Mesguerra\Challenge\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	protected $_commentsFactory;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Mesguerra\Challenge\Model\CommentsFactory $commentsFactory
	)
	{
		$this->_commentsFactory = $commentsFactory;
		parent::__construct($context);
	}

	public function comments()
	{
		//return __('Hello World');
	}

	public function getCommentsCollection($product_id){
		$comments = $this->_commentsFactory->create();
		return $comments->getCollection()->addAttributeToFilter('product_id',['eq'=>$product_id]);;
	}
}
