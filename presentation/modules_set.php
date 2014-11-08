<?php
	class ModulesSet
	{
		// Public variables to be read from Smarty template
		public $mModules;
		public $mCurrentPage;
		public $mPage = 1;
		public $mrTotalPages;
		public $mLinkToNextPage;
		public $mLinkToPreviousPage;
		public $mModuleListPages = array();
		public $mCategory;
		public $mSearchString;

		// Class constructor
		public function __construct()
		{
			$this->mCurrentPage = $_SESSION['CurrentPage'];
			// Get Page number from query string casting it to int
			if (isset ($_GET['Page']))
			{
			   $this->mPage = (int)$_GET['Page'];
			}
		}

		public function init()
		{
			// //page select
			// if ($this->mCurrentPage == 'Modules')
			// {
			// 	$this->mModules = Business::GetModules();
			// }
			// elseif ($this->mCurrentPage == 'Home')
			// {
			// 	$this->mModules = Business::GetRandomModules();
			// }
			// //end page select

			//start copy pasta

			if ($this->mCurrentPage == 'Modules' || $this->mCurrentPage == 'Filter' || $this->mCurrentPage == 'Search')
			{
				if ($this->mCurrentPage == 'Modules')
				{
					$this->mModules = Business::GetModulesInCollection($this->mPage, $this->mrTotalPages);
					$basicURL = '?op=' . $_SESSION['CurrentPage'];
				}
			    elseif ($this->mCurrentPage == 'Filter')
			    {
				    if (isset ($this->mSearchString))
				    {
					   $this->mModules = Business::GetModulesByCategorySearch($this->mSearchString, $this->mCategory, $this->mPage, $this->mrTotalPages);
				 	   $basicURL = '?op=' . $_SESSION['CurrentPage'] . '&category=' . $this->mCategory . '&searchText=' . $this->mSearchString;
				    }
				    else
				    {
					   $this->mModules = Business::GetModulesByCategory($this->mCategory, $this->mPage, $this->mrTotalPages);
					   $basicURL = '?op=' . $this->mCurrentPage . '&category=' . $this->mCategory;
				    }
			    }
			    elseif ($this->mCurrentPage == 'Search')
				{
				   $this->mModules = Business::Search($this->mSearchString, $this->mPage, $this->mrTotalPages);
				   $basicURL = '?op=' . $this->mCurrentPage . '&searchText=' . $this->mSearchString;
				}
			}
			elseif ($this->mCurrentPage == 'Home')
			{
				$this->mModules = Business::GetRandomModules();
			}

			//end copy pasta

			/* If there are subpages of modules, display navigation controls */
			if ($this->mrTotalPages > 1)
			{
			   // Build the Next link
			   if ($this->mPage < $this->mrTotalPages)
			   {
			      $nextPage = $this->mPage + 1;
			      $this->mLinkToNextPage =
			             $basicURL. '&Page=' . $nextPage;
			   }

			   // Build the Previous link
			   if ($this->mPage > 1)
			   {
			      $prevPage = $this->mPage - 1;
			      $this->mLinkToPreviousPage =
			             $basicURL. '&Page=' . $prevPage;
			   }

			   // Build the pages links
			   for ($i = 1; $i <= $this->mrTotalPages; $i++)
			      $this->mModuleListPages[] = $basicURL. '&Page=' . $i;
			}
		}
	}
?>
