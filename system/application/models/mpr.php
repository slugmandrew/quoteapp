<?php
class Mpr extends Doctrine_Record
{

	public function setTableDefinition()
	{
		$this->hasColumn('number', 'string', 65);
		$this->hasColumn('site_id', 'integer', 4);
	}

	public function setUp()
	{
		$this->actAs('Timestampable');
		
		
		$this->hasOne('Site', array(
			'local' => 'site_id',
			'foreign' => 'id'
		));
		
		
		
	}

}
