<?php

namespace Atopt\Office\Model\ResourceModel;

class Employee extends \Magento\Eav\Model\Entity\AbstractEntity
{
	protected function _construct()
	{
		$this->_read = 'atopt_office_employee_read';
		$this->_write = 'atopt_office_employee_write';
	}
	
	public function getEntityType()
	{
		if (empty($this->_type)){
			$this->setType(\Atopt\Office\Model\Employee::ENTITY);
		}
	}
}