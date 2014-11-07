<?php
class Master
{
	// Define the template file for the page contents
	public $mContents;
	public $mSideBar;
	public $currentPage;

	// Class constructor
	public function __construct()
	{
		$this->currentPage = $_SESSION['CurrentPage'];
	}

	// Initialize presentation object
	public function init()
	{
		// Load the database handler
		require_once BUSINESS_DIR . 'database_handler.php';

		// Load Business Tier
		require_once BUSINESS_DIR . 'business.php';


 		if ($this->currentPage == 'Home' || $this->currentPage == 'Modules')
		{
			$this->mContents = 'modules_set.tpl';
			if ($this->currentPage == 'Home')
				$this->mSideBar = 'modules_list.tpl';
			else
				// should probably be categories - implement...
				$this->mSideBar = 'categories_list.tpl';
		}
		else
		{
			$this->mContents = 'not_implemented.tpl';
			$this->mSideBar = 'modules_list.tpl';
		}
	}
}
?>
