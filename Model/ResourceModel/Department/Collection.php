<?php

namespace Atopt\Office\Model\ResourceModel\Department;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected function _construct()
	{
		$this->_init(
				'Atopt\Office\Model\Department',
				'Atopt\Office\Model\ResourceModel\Department'
		);
	}
}