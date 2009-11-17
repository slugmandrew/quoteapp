<?php
class ElecTariff extends Tariff
{

	// public function setTableDefinition()
	// {
		// $this->hasColumn('number', 'string', 65);
		// $this->hasColumn('site_id', 'integer', 4);
	// }

	public function setUp()
	{
		
		
		$this->hasMany('Quote as Quotes', array(
			'local' => 'tariff_id',
			'foreign' => 'quote_id',
			'refClass' => 'QuoteTariff'
		));
	}

	
}
?>