<?php
namespace Mesguerra\Challenge\Model;
class Comments extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'mesguerra_challenge_comments';

	protected $_cacheTag = 'mesguerra_challenge_comments';

	protected $_eventPrefix = 'mesguerra_challenge_comments';

	protected function _construct()
	{
		$this->_init('Mesguerra\Challenge\ResourceModel\Comments');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
