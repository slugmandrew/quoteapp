<?php
class Quote extends Doctrine_Record
{

	public function setTableDefinition()
	{
		$this->hasColumn('name', 'string', 65);
		$this->hasColumn('user_id', 'integer', 4);
		
	}
	
	public function setUp()
	{
		$this->actAs('Timestampable');
		
		
		$this->hasOne('User', array(
			'local' => 'user_id',
			'foreign' => 'id'
		));
		
		// $this->hasMany('Meter as Meters', array(
			// 'local' => 'quote_id',
			// 'foreign' => 'meter_id',
			// 'refClass' => 'QuoteMeters'
		// ));
		
		$this->hasMany('Mpan as Mpans', array(
			'local' => 'quote_id',
			'foreign' => 'meter_id',
			'refClass' => 'QuoteMeters'
		));
		
		$this->hasMany('Mpr as Mprs', array(
			'local' => 'quote_id',
			'foreign' => 'meter_id',
			'refClass' => 'QuoteMeter'
		));
		
		$this->hasMany('Tariff as Tariffs', array(
			'local' => 'quote_id',
			'foreign' => 'tariff_id',
			'refClass' => 'QuoteTariff'
		));
	}
	


}
