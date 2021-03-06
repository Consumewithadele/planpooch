<?php
namespace Affiliates\AffiliateManager\Controller;
use Exception;


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
* WidgetsController
*/


use Affiliates\AffiliateManager\Domain\Model\Categories;
use Affiliates\AffiliateManager\Domain\Model\Insurance;
use Affiliates\AffiliateManager\Domain\Model\Favorites;
use Affiliates\AffiliateManager\Domain\Model\Affiliates;
use TYPO3\CMS\Core\Utility\GeneralUtility as Utility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Domain\Model\FrontendUser;


class WidgetsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

	/**
	* affiliatesRepository
	*
	* @var \Affiliates\AffiliateManager\Domain\Repository\AffiliatesRepository
	* @inject
	*/
	protected $affiliatesRepository = NULL;
	
	

	/**
	* feuserRepository
	*
	* @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository
	* @inject
	*/
	protected $feuserRepository = NULL;
	

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
	
	
	/**
	* favoritesRepository
	*
	* @var \Affiliates\AffiliateManager\Domain\Repository\FavoritesRepository
	* @inject
	*/
	protected $favoritesRepository = NULL;

	/**
	* @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
	* @inject
	*/
	protected $persistenceManager;
	
	
	public function editprofileAction() 
	{
		if($GLOBALS['TSFE']->fe_user->user) {
			
			$userUid = $GLOBALS['TSFE']->fe_user->user['uid'];
			$user = $this->feuserRepository->findByUid($userUid);

			$this->view->assign('data', array('logged_in' => 1, 'user' => $user));		
		} else {
			$this->view->assign('data', array('logged_in' => 0));		
		}
	
	
	}
	
	public function userfavAction() 
	{
		if($GLOBALS['TSFE']->fe_user->user) {
			$userUid = $GLOBALS['TSFE']->fe_user->user['uid'];
			$user = $this->feuserRepository->findByUid($userUid);
			//\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($user);
			

			$favCount = $this->favoritesRepository->countAllUserFavorites($userUid);
						

			$this->view->assign('data', array('logged_in' => 1, 'user' => $user, 'favCount' => $favCount));		
		} else {
			$this->view->assign('data', array('logged_in' => 0));		
		}
	
	
	}

	public function addfavAction() 
	{
    // try to always validate the incoming arguments
    if (!$this->request->hasArgument('uid') || intval($this->request->getArgument('uid')) == 0) {
        header('HTTP/1.1 400 Bad Request');
        return json_encode(array('error'=> 'Bad request'));
    }
    
    	// Collect the UIDs
   	$userUid = $GLOBALS['TSFE']->fe_user->user['uid'];
		$affiliateUid = intval($this->request->getArgument('uid'));

		if($this->favoritesRepository->countUserFavorites($affiliateUid, $userUid) == 0) {

				$this->objectManager = Utility::makeInstance(ObjectManager::class);		
				$newFavorite = $this->objectManager->get(Favorites::class);

				$user = $this->feuserRepository->findByUid($userUid);
				$affiliate = $this->affiliatesRepository->findByUid($affiliateUid);
				
				$newFavorite->setUser($user);
				$newFavorite->setAffiliate($affiliate);
				
				$this->favoritesRepository->add($newFavorite);
				
				return json_encode(TRUE);

		
		} else {
			$this->objectManager = Utility::makeInstance(ObjectManager::class);		
			$removeFavorite = $this->objectManager->get(Favorites::class);
			$removeFavorite = $this->favoritesRepository->findByUserAndAffiliate($affiliateUid, $userUid);
			
			foreach($removeFavorite as $myObject) {
				$this->favoritesRepository->remove($myObject);
			}

			return json_encode(FALSE);

		}

	}
	
	
	public function favviewAction() 
	{
		//this is more or less just a redirect and needs to be defined in the typoscript.
		$uriBuilder = $this->uriBuilder;
		$uri = $uriBuilder->setTargetPageUid(54)->build();
		$this->redirectToUri($uri, 0, 404);

	}

	public function favviewshowAction () {
		$userUid = $GLOBALS['TSFE']->fe_user->user['uid'];
		
		$userFavorites = $this->favoritesRepository->findByUser($userUid);
		$count = 0;
		
		foreach ($userFavorites as $value) {
			$myFavAffiliates[$count] = $this->affiliatesRepository->findByUid($value->getAffiliate());
			$count++;
		}



		$this->view->assign('data', $myFavAffiliates);
		
		
	
	}


  	
}