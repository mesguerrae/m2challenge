<?php
namespace Mesguerra\Challenge\Model\ResourceModel\Comments;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'comment_id';
	protected $_eventPrefix = 'mesguerra_challenge_comments_collection';
	protected $_eventObject = 'comments_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Mesguerra\Challenge\Model\Comments', 'Mesguerra\Challenge\Model\ResourceModel\Comments');
	}

}

