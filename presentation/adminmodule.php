<?php
class AdminModule
{
	public $mAlbum;
	public $mYear;
	public $mAlbumID;
	public $mErrorMessage;
	public $mArtists;
	public $mAlbums;
	public $mAlbumTitle;
	public $mArtist;
	public $mReleaseDate;
	public $mImage;
	public $mDateBought;
	public $mCategory;
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
		elseif (isset ($_POST['submit_select_artist']))
		{
			$this->mAction = 'SelectLeader';
			$this->mAddButtonDisplay = TRUE;
			$this->mUpdateButtonDisplay = FALSE;
		}
		elseif (isset ($_POST['submit_select_album']))
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
	}
}

?>