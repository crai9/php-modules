<?php
	class ModuleDetails
	{
		// Public variables to be read from Smarty template
		public $mModule;
		public $mKeywords;
		public $mModuleID;

		// Class constructor
		public function __construct()
		{
			if (isset($_GET['module_id']))
			{
				$this->mModuleID = $_GET['module_id'];
			}
 		}

		public function init()
		{
			$this->mModule = Business::GetModuleDetails($this->mModuleID);
			$this->mKeywords = Business::GetModuleKeywords($this->mModuleID);
		}
	}
?>
