<?php
	class CategoriesList
	{
		public $mCategories;
		public $mSearchString;
		public $mCurrentPage;

		// Class constructor
		public function __construct()
		{
			$this->mCurrentPage = $_SESSION['CurrentPage'];
			// Retrieve search string from query string or posted form
			if ($this->mCurrentPage == 'Search' || $this->mCurrentPage == 'Filter')
			{
			    if (isset ($_GET['searchText']))
			       $this->mSearchString = $_GET['searchText'];
			    elseif (isset ($_POST['searchText']))
			       $this->mSearchString = trim($_POST['searchText']);
			}
 		}

		public function init()
		{
			if (isset ($this->mSearchString))
			{
				$this->mCategories = Business::GetSearchResultCategories($this->mSearchString);
			}
			else
			{
				
				$this->mCategories = Business::GetCategories();
			}
		}
	}
?>
