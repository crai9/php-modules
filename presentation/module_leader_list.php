<?php
	class ModuleLeaderList
	{
		// Public variables to be read from Smarty template
		public $mLeaders;
		public $mLeaderModules = array(array());

		// Class constructor
		public function __construct()
		{
			$mLeaderModules;
 		}

		public function init()
		{
			$this->mLeaders = Business::GetModuleLeaders();
			for ($i = 0; $i < count($this->mLeaders); $i++)  
			{
				$this->mLeaderModules[$i] = Business::GetModuleLeaderModules($this->mLeaders[$i]['module_leader']);			
			}
		}
	}
?>
