<?php
class QuoteMeters extends Doctrine_record
{

	public function setTableDefinition()
	{
		// $this->hasColumn('quote_id', 'integer', 4);
		// $this->hasColumn('meter_id', 'integer', 4);
		$this->hasColumn('quote_id', 'integer', 4, array('primary' => true));
		$this->hasColumn('meter_id', 'integer', 4, array('primary' => true));
	}

	// public function setUp()
	// {
		// $this->actAs('Timestampable');
		
		// $this->hasOne('Meter', array(
			// 'local' => 'site_id',
			// 'foreign' => 'id'
		// ));
		
		// $this->hasMany('Quote as Quotes', array(
			// 'local' => 'id',
			// 'foreign' => 'quote_id',
			// 'refClass' => 'quoteGroup'
		// ));
	// }

}
?>