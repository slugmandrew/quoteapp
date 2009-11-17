<?php
abstract class Tariff extends Doctrine_record
{

	public function setTableDefinition()
	{
		$this->hasColumn('name', 'string', 65);
		// $this->hasColumn('quote_id', 'integer', 4);
	}

	public function setUp()
	{
		$this->actAs('Timestampable');
		
		
		// $this->hasOne('Site', array(
			// 'local' => 'site_id',
			// 'foreign' => 'id'
		// ));
		
		// $this->hasMany('Quote as Quotes', array(
			// 'local' => 'meter_id',
			// 'foreign' => 'quote_id',
			// 'refClass' => 'QuoteMeters'
		// ));
	}

}
?>