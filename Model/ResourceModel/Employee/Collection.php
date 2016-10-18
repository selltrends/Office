<?php

namespace Atopt\Office\Model\ResourceModel\Employee;

class Collection extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
{
	protected function _construct()
	{
		$this->_init('Atopt\Office\Model\Employee', 'Atopt\Office\Model\ResourceModel\Employee');	
	}
}