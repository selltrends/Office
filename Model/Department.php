<?php

namespace Atopt\Office\Model;

class Department extends \Magento\Framework\Model\AbstractModel
{
	protected function _construct()
	{
		$this->_init('Atopt\Office\Model\ResourceModel\Department');
	}
}