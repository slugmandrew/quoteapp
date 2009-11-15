<?php
class Site extends Doctrine_Record
{

	public function setTableDefinition()
	{
		$this->hasColumn('name', 'string', 65, array('unique' => 'true'));
		$this->hasColumn('street', 'string', 255);
		$this->hasColumn('city', 'string', 65);
		$this->hasColumn('county', 'string', 65);
		$this->hasColumn('zip', 'string', 8);
		$this->hasColumn('account_id', 'integer', 4);
		
	}

 	public function setUp()
	{
		$this->setTableName('site');
		$this->actAs('Timestampable');
		
		
		
		$this->hasOne('Account', array(
			'local' => 'account_id',
			'foreign' => 'id'
		)); 
		
		$this->hasMany('Mpan as Mpans', array(
			'local' => 'id',
			'foreign' => 'mpan_id'
		));
		
		$this->hasMany('Mpr as Mprs', array(
			'local' => 'id',
			'foreign' => 'mpr_id'
		));

	}
	
 
}
?>