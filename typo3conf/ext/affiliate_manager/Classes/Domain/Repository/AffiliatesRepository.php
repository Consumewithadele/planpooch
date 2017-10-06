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

/**
 * The repository for Affiliates
 */
class AffiliatesRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
	
	/**
	 * Gets events following by request
	 *
	 *
	 * @param string $search
	 * @return object
	 */

	public function findKeyword($request, $pid){
		
//echo $request; exit(); die;
		
		ob_start();
		$GLOBALS['TYPO3_DB']->debugOutput = true;
		$GLOBALS['TYPO3_DB']->store_lastBuiltQuery = true;
		
		
	   $query = $this->createQuery();
	   $query->getQuerySettings()->setRespectStoragePage(false);
		
		if($pid > 0) {
			if(isset($request) && $request != NULL) {
				//echo $pid; exit(); die;
				$query->matching($query->logicalAnd(
					$query->like('description', '%'.$request.'%'),
					$query->like('pid', $pid)			
				));	
				   	
	   		$result =  $query->execute();
	   		return $result;
	   
			}
			else {
				return NULL;
	   	}

	   }	
	   else 
	   {
			$query->matching($query->like('description', '%'.$request.'%'));	
	   	$result =  $query->execute();
	   	return $result;
	   
	   }   

		//echo $GLOBALS['TYPO3_DB']->debug_lastBuiltQuery;
		//exit();
	   
	   //return $result;
	   
	   //$query = $this->createQuery();
	    
	    

	    
	}
	
	
	public function getBySourceId($sourceID){
		
		//ob_start();
		
	   if(isset($sourceID) && $sourceID != NULL) {
	   	$query = $this->createQuery();	   	
			$query->matching($query->matching('sourceid', $sourceID));	   	
	   	$result =  $query->execute();
	   }	   
	   else {
			return FALSE;
	   }
	   
		//echo $GLOBALS['TYPO3_DB']->debug_lastBuiltQuery;
		//exit();
	   
	   return $result;
	   
	   //$query = $this->createQuery();
	    
	    

	    
	}
	
	public function updateBySourceId($sourceID, $updateArray){
		
		ob_start();
		$GLOBALS['TYPO3_DB']->debugOutput = true;
		$GLOBALS['TYPO3_DB']->store_lastBuiltQuery = true;
		
	   if(isset($sourceID) && $sourceID != NULL) {
		echo "test";

/*
			$formatted_array[$i]['sourceid'] = $item['sku'];	
			$formatted_array[$i]['currency'] = $item['currency'];
			$formatted_array[$i]['url'] = $item['buy-url'];
			$formatted_array[$i]['name'] = $item['name'];
			$formatted_array[$i]['cost'] = $item['price'];
			$formatted_array[$i]['description'] = $item['description'];
			$formatted_array[$i]['imageurl'] = $item['image-url'];
			
			
			$formatted_array[$i]['affiliatechannel'] = 'CommissionJunction';
			$formatted_array[$i]['pid'] = 18;			
			

			//typo3 items			
			$formatted_array[$counter]['active'] = true;
			$formatted_array[$counter]['tstamp'] = time();
			$formatted_array[$counter]['crdate'] = $formatted_array[$counter]['tstamp'];

*/
			/*unset($updateArray['affiliatechannel']);				   	
			unset($updateArray['pid']);
			unset($updateArray['active']);
			unset($updateArray['tstamp']);
			unset($updateArray['crdate']);
			unset($updateArray['sourceid']);	   	
				*/   	
	   	
			// Create query object
			//$query = $this->createQuery();
			//$query->getQuerySettings()->setIgnoreEnableFields(true);
			//$query->getQuerySettings()->setRespectStoragePage(false);
			//Set plain SQL statement

			//$sql = 'UPDATE tx_affiliatemanager_domain_model_affiliates SET sourceid = ?, currency = ?,
			//url = ?, name = ?, cost = ?, description = ?, imageurl = ? WHERE sourceid = ? ';
			//$query->statement($sql, array($updateArray['sourceid'], $updateArray['currency'], 
			//$updateArray['url'], $updateArray['name'], 
			//$updateArray['cost'], $updateArray['description'], $updateArray['imageurl'], $updateArray['sourceid']));
	
			// Execute query
			$result = $query->execute();
			
			$query = $this->createQuery();
			$query->getQuerySettings()->setIgnoreEnableFields(true);
			$query->getQuerySettings()->setRespectStoragePage(false);
			$query->matching($query->like('sourceid', $sourceID));
			$update = $query->execute();
			
			

			
	   }	   
	   else {
			return FALSE;
	   }
	   
		//echo $GLOBALS['TYPO3_DB']->debug_lastBuiltQuery;
		//exit();
	   
	   return TRUE;
	   
	   //$query = $this->createQuery();
	    
	    

	    
	}
	
	public function countSourceidIgnorePID($sourceID){
		$query = $this->createQuery();
		$query->getQuerySettings()->setIgnoreEnableFields(true);
		$query->getQuerySettings()->setRespectStoragePage(false);
		$result = $query->matching($query->like('sourceid', $sourceID))->count();
		return $result;
	}
	
	public function countSyncSourceidIgnorePID($sourceID){
		$query = $this->createQuery();
		$query->getQuerySettings()->setRespectStoragePage(false);
		$query->getQuerySettings()->setIgnoreEnableFields(true);
		
		$result = $query->matching($query->logicalAnd(
				$query->equals('sourceid', $sourceID),
				$query->equals('sync', '0'))
				)->count();
		return $result;
	}
	
	public function findBySourceidIgnorePID($sourceID){
		$query = $this->createQuery();
		$query->getQuerySettings()->setRespectStoragePage(false);
		$query->getQuerySettings()->setIgnoreEnableFields(true);
		
		$query->matching($query->logicalAnd(
				$query->equals('sourceid', $sourceID),
				$query->equals('sync', 0))
				);
				
		return $query->execute();
	}
	
	
	
	
	public function quickSearchByPid () {
		
		
		
		
	
	}
	
	
	public function quickSearch () {
	
	
	
	
	}
	
	public function searchByPostalCode ($postalCode) {
		$query = $this->createQuery();
		
		$region = substr($postalCode, 0, 2) . '%';
		$option1 = strtoupper($postalCode);
		$option2 = strtolower($postalCode);
		
		$query->matching($query->logicalOr(
					$query->like('postalcode', $postalCode),
					$query->like('postalcode', $region),
					$query->like('postalcode', $option1),
					$query->like('postalcode', $option2)
				)
			);
		
		return $query->execute();
		
		
		
	}
	
	
	
	

    
}