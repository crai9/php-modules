<?php
	class ModulesSet
	{
		// Public variables to be read from Smarty template
		public $mModules;
		public $mCurrentPage;

		// Class constructor
		public function __construct()
		{
			$this->mCurrentPage = $_SESSION['CurrentPage'];
		}

		public function init()
		{
			if ($this->mCurrentPage == 'Modules')
			{
				$this->mModules = Business::GetModules();
			}
			elseif ($this->mCurrentPage == 'Home')
			{
				$this->mModules = Business::GetRandomModules();
			}
		}
	}
?>
