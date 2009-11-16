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
		
	}
	


}
