<?php
namespace Affiliates\AffiliateManager\Domain\Repository;

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

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * The repository for Favorites
 */
class FavoritesRepository extends Repository
{

    /**
     * Retrieves all the Invitation for the passed course and user
     *
     * @param int $uid
     * @param int $userUid
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
	public function countUserFavorites($uid, $userUid){
		$query = $this->createQuery();
		$query->getQuerySettings()->setIgnoreEnableFields(true);
		$query->getQuerySettings()->setRespectStoragePage(false);
		
		$result = $query->matching($query->logicalAnd(
				$query->equals('user', $userUid),
				$query->equals('affiliate', $uid))
		)->count();
		
		
				
				
		return $result;
	}
	
	
	
	
	public function countAllUserFavorites($userUid){
		$query = $this->createQuery();
		$query->getQuerySettings()->setIgnoreEnableFields(true);
		$query->getQuerySettings()->setRespectStoragePage(false);
		
		$count = $query->matching($query->equals('user', $userUid))->count();

		return $count;
	}



    /**
     * Retrieves all the Invitation for the passed course and user
     *
     * @param int $uid
     * @param int $userUid
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
	public function findByUserAndAffiliate($uid, $userUid){
		$query = $this->createQuery();
		$query->getQuerySettings()->setIgnoreEnableFields(true);
		$query->getQuerySettings()->setRespectStoragePage(false);
		
		$result = $query->matching($query->logicalAnd(
				$query->equals('user', $userUid),
				$query->equals('affiliate', $uid))
		)->execute();
		
		
				
				
		return $result;
	}	
	


}