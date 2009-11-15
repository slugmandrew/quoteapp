<?php
class Account extends Doctrine_Record
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
		
		$this->hasMany('Site as Sites', array(
			'local' => 'id',
			'foreign' => 'account_id'
		));
		
	}
	
	public function create()
	{

		if ($this->_submit_validate() === FALSE)
		{
			$this->index();
			return;
		}
		
		$a = new User();
		$a->name = $this->input->post('name');
		$a->save();


		$this->load->view('submit_success');

	}

	private function _submit_validate()
	{

		// validation rules
		$this->form_validation->set_rules('name', 'Name',
			'required|alpha_numeric|min_length[3]|max_length[40]|unique[Account.name]');

		return $this->form_validation->run();

	}

}
