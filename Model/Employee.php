<?php

namespace Atopt\Office\Model;

class Employee extends \Magento\Framework\Model\AbstractModel
{
	const ENTITY = 'atopt_office_employee';
	
	public function _construct()
	{
		$this->_init('Atopt\Office\Model\ResourceModel\Employee');
	}
}