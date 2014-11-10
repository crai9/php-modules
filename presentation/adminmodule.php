<?php
class AdminModule
{
	public $mModule;
	public $mModuleID;
	public $mErrorMessage;
	public $mLeaders;
	public $mModules;
	public $mModuleTitle;
	public $mLeader;
	public $mImage;
	public $mCategory;
	public $mDescription;
	public $mLoggedIn;
	public $mUpdateButtonDisplay;
	public $mAddButtonDisplay=TRUE;

	// Class constructor
	public function __construct()
	{
		// Load the database handler
		require_once BUSINESS_DIR . 'database_handler.php';

		// Load Business Tier
		require_once BUSINESS_DIR . 'business.php';

		$this->mAction = 'None';
		if (isset ($_GET['Page']) && ($_GET['Page'] == 'Logout'))
		{
			unset($_SESSION['admin_logged']);
			header('Location: moduleadmin.php');
			exit();
		}
		elseif (isset ($_POST['submit_add']))
		{
			$this->mAction = 'AddModule';
			$this->mAddButtonDisplay = TRUE;
			$this->mUpdateButtonDisplay = FALSE;
		}
		elseif (isset ($_POST['submit_edit']))
		{
			$this->mAction = 'EditModule';
			$this->mAddButtonDisplay = TRUE;
			$this->mUpdateButtonDisplay = FALSE;
		}
		elseif (isset ($_POST['submit_select_leader']))
		{
			$this->mAction = 'SelectLeader';
			$this->mAddButtonDisplay = TRUE;
			$this->mUpdateButtonDisplay = FALSE;
		}
		elseif (isset ($_POST['submit_select_module']))
		{
			$this->mAction = 'SelectModule';
			$this->mUpdateButtonDisplay = TRUE;
			$this->mAddButtonDisplay = FALSE;
		}
		if (isset ($_SESSION['admin_logged']))
		{
			$this->mLoggedIn = TRUE;
		}
	}

	public function init()
	{
		$this->mLeaders = Business::GetModuleLeaders(); // to populate Select Artist drop down list

		if ($this->mAction == 'AddModule' || $this->mAction == 'EditModule')	// Add or Update request
		{
			$this->mModuleID = $_POST['module_id'];
			$this->mModuleTitle = $_POST['new_module_title'];
			$this->mLeader = $_POST['new_leader'];
			$this->mImage = $_POST['new_image'];
			$this->mDescription = $_POST['new_description'];
			$this->mCategory = $_POST['new_category'];

			if ($this->mModuleTitle == null)
				$this->mErrorMessage = 'Module title required';

			if ($this->mLeader == null)
				$this->mErrorMessage = 'Leader required';

			if ($this->mErrorMessage == null)
			{
				if ($this->mAction == 'AddModule')
				{
					// Complete this line with a call to a Collection class method
					Business::AddModule($this->mModuleTitle, $this->mLeader, $this->mDescription, $this->mImage, $this->mCategory);
				}
				else
				{
					// Complete this line with a call to a Collection class method
				}
				header('Location: moduleadmin.php');
			}
		}
		elseif ($this->mAction == 'SelectLeader') 	// Artist Selected - populate Select Album drop down list with Artist Albums
		{
			 $this->mLeader = $_POST['leaders'];
			 $this->mModuleID = '';
			 $this->mModuleTitle = '[module title]';
			 $this->mImage = '[image]';
			 $this->mDescription = '[description]';
			 $this->mCategory = '[category]';
			// Complete this line with a call to a Collection class method GetArtistAlbums
			 $this->mAlbums = Business::GetModuleLeaderModules($this->mLeader);
		}	
		elseif ($this->mAction == 'SelectModule')
		{
			// Insert the code to call a Collection class method and populate the attributes required to populate the Update form
		}
		else
		{
			$this->mModuleID= '';
			$this->mModuleTitle = '[module title]';
			$this->mLeader = '[leader]';
			$this->mImage = '[image]';
			$this->mDescription = '[description]';
			$this->mCategory = '[category]';
		}
	}
}

?>