<?php
namespace Affiliates\AffiliateManager\Controller;
use Exception;
use ZipArchive;

/***************************************************************
*
*  Copyright notice
*
*  (c) 2017
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
* SearchController
*/


use Affiliates\AffiliateManager\Domain\Model\Categories;
use Affiliates\AffiliateManager\Domain\Model\Insurance;
use TYPO3\CMS\Core\Utility\GeneralUtility as Utility;
use TYPO3\CMS\Extbase\Object\ObjectManager;


class SearchController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

	/**
	* affiliatesRepository
	*
	* @var \Affiliates\AffiliateManager\Domain\Repository\AffiliatesRepository
	* @inject
	*/
	protected $affiliatesRepository = NULL;
	
	
	/**
	* categoriesRepository
	*
	* @var \Affiliates\AffiliateManager\Domain\Repository\CategoriesRepository
	* @inject
	*/
	protected $categoriesRepository = NULL;
	
	/**
	* insuranceRepository
	*
	* @var \Affiliates\AffiliateManager\Domain\Repository\InsuranceRepository
	* @inject
	*/
	protected $insuranceRepository = NULL;
	
	
	//persistence manager is used to perform some database actions such as update within the sync actions	
	
	
	/**
	* @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
	* @inject
	*/
	protected $persistenceManager;
	
	
	/**
	* action search
	*
	* @return void
	*/
	public function searchAction()
	{
		
		
		

		
  	}
  	
	/**
	* action insurance
	*
	* @return void
	*/
	public function insuranceAction()
	{
		
		
		

		
  	}
  	

	/**
	* action dining
	*
	* @return void
	*/
	public function diningAction()
	{
		
		
		

		
  	}

	/**
	* action vets
	*
	* @return void
	*/
	public function vetsAction()
	{
		
		
		

		
  	}
  	
  	
	/**
	* action insurance
	*
	* @return void
	*/
	public function groomersAction()
	{
		
		
		

		
  	}
  	
	/**
	* action holidays
	*
	* @return void
	*/
	public function holidaysAction()
	{
		
		
		

		
  	}

/** SEARCH FUNCTIONS START HERE **/

	/**
	* action searchinsurance
	*
	* @param \Affiliates\AffiliateManager\Domain\Model\Insurance $insurance
	* @return void
	*/
	public function searchInsuranceAction(\Affiliates\AffiliateManager\Domain\Model\Insurance $insurance)
	{
		$this->insuranceRepository->add($insurance);
		$results = $this->affiliatesRepository->findAll();
		
		
		foreach($results as $key => $result) { 		
			$inscost = $result->getInscost();
			$cycle = $result->getInscycle();
		
			if(isset($cycle) && isset($inscost)) {				
				$total[$key] = $inscost * $cycle;
			} else {
				$total[$key] = "Calc Error";			
			}


  		}
  		
			$this->view->assign('data', array('partial' => 'Insurance', 'results' => $results, 'totals' => $total));
  		
  	}
  	

	/**
	* action dining
	*
	* @return void
	*/
	public function searchDiningAction()
	{
		$arguments = $this->request->getArguments();
		$postalcode = $arguments['searchFields']['postalCode'];
		$results = $this->searchByPostalCode($postalcode);
		$this->view->assign('data', array('partial' => 'Dining', 'results' => $results, 'postalcode' => $postalcode));
		
  	}

	/**
	* action vets
	*
	* @return void
	*/
	public function searchVetsAction()
	{
		$arguments = $this->request->getArguments();
		$postalcode = $arguments['searchFields']['postalCode'];
		$results = $this->searchByPostalCode($postalcode);
		$this->view->assign('data', array('partial' => 'Vets', 'results' => $results, 'postalcode' => $postalcode));
  	}
  	
  	
	/**
	* action insurance
	*
	* @return void
	*/
	public function searchGroomersAction()
	{
		$arguments = $this->request->getArguments();
		$postalcode = $arguments['searchFields']['postalCode'];
		$results = $this->searchByPostalCode($postalcode);
		
		
		
		$this->view->assign('data', array('partial' => 'Groomers', 'results' => $results, 'postalcode' => $postalcode));
  	}
  	
	/**
	* action holidays
	*
	* @return void
	*/
	public function searchHolidaysAction()
	{
		$arguments = $this->request->getArguments();
		$postalcode = $arguments['searchFields']['postalCode'];
		$results = $this->searchByPostalCode($postalcode);
		$this->view->assign('data', array('partial' => 'Hotels', 'results' => $results, 'postalcode' => $postalcode));
  	}
  	
  	
  	private function searchByPostalCode($postalCode){ 

		$results = $this->affiliatesRepository->searchByPostalCode($postalCode);	
		return $results;


	}
	


	/**
	* action quicksearch
	* generates the quick search
	*
	* @return void
	*/
	public function quicksearchAction () 
	{
		$categories = $this->categoriesRepository->findAll();		
		$this->view->assign('categories', $categories);

	}
	
	
	/**
	* action quicksearch
	* generates the quick search
	*
	* @return void
	*/
	public function processquicksearchAction () {
		
		$search = $this->request->getArguments();
		/*print_r($search);
		echo "<BR><BR>";
		print_r($_POST);
		exit();die;*/
		$myConfig['name'] = 'paul';
		$myConfig['address'] = 'Main street';
		$GLOBALS['TSFE']->fe_user->setKey('ses', 'myData', $search);
		
		
		$uriBuilder = $this->uriBuilder;
		$uri = $uriBuilder->setTargetPageUid(52)->build();
		$this->redirectToUri($uri, 0, 404);
		
		
		
		// retrieve using: $myData = $GLOBALS['TSFE']->fe_user->getKey('ses', 'myData');
		
		//$myData = $GLOBALS['TSFE']->fe_user->getKey('ses', 'myData');
		
		//print_r($myData); exit(); die;
		
		if ($this->request->hasArgument('query')) {
			//$this->createQuery();
			//$query			
			
			
      	$affiliates = $this->itemRepository->findKeyword($search);
    	
      	//$search = $this->request->getArgument('query');
     		//$items = $this->itemRepository->findKeyword($keyword);
    	
    	}


		$this->view->assign('affiliates', $affiliates);
		

	
	}
	
	public function showresultsAction() 
	{
		$myData = $GLOBALS['TSFE']->fe_user->getKey('ses', 'myData');

		
		if($myData['category'] != 0){
			
			//echo $myData['category']; exit(); die;
			$category = $this->categoriesRepository->findByUid($myData['category']);
			$categoryStorageID = $category->getCategorystoragepid();
		} else {
			$categoryStorageID = 0;
		}
		
		//\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($category);exit();die;


		$GLOBALS['TSFE']->fe_user->setKey('ses', 'myData', 0);
		$results = $this->affiliatesRepository->findKeyword($myData['text'], $categoryStorageID);
		$this->view->assign('data', array('category' => $category, 'results' => $results));
	
	
	}
  	





}