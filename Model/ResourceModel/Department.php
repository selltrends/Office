<?php

namespace Atopt\Office\Model\ResourceModel;

class Department extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	protected function _construct()
	{
		$this->_init('atopt_office_department', 'entity_id');
	}
}