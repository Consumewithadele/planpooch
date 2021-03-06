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
* AffiliatesController
*/

use Affiliates\AffiliateManager\Domain\Model\Categories;
use Affiliates\AffiliateManager\Domain\Model\Discounts;

use TYPO3\CMS\Core\Utility\GeneralUtility as Utility;
use TYPO3\CMS\Extbase\Object\ObjectManager;


class AffiliatesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

	/**
	* affiliatesRepository
	*
	* @var \Affiliates\AffiliateManager\Domain\Repository\AffiliatesRepository
	* @inject
	*/
	protected $affiliatesRepository = NULL;
	
	
	/**
	* affiliatesRepository
	*
	* @var \Affiliates\AffiliateManager\Domain\Repository\DiscountsRepository
	* @inject
	*/
	protected $discountsRepository = NULL;
	
	
	/**
	* categoriesRepository
	*
	* @var \Affiliates\AffiliateManager\Domain\Repository\CategoriesRepository
	* @inject
	*/
	protected $categoriesRepository = NULL;
	
	
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

		
		if ($this->request->hasArgument('query')) {
			//$this->createQuery();
			//$query			
			
			$search = $this->request->getArgument('query');
      	$affiliates = $this->itemRepository->findKeyword($search);
    	
      	//$search = $this->request->getArgument('query');
     		//$items = $this->itemRepository->findKeyword($keyword);
    	
    	}


		$this->view->assign('affiliates', $affiliates);
		
  }
  
	  
	  /**
	  * list discounts
	  * @return void
	  *
	  */
	  public function listdiscountsAction() {
		$discounts = $this->discountsRepository->findAll();
		$count = $discounts->count();
		$discounts = $discounts->toArray();
		
		$this->objectManager = Utility::makeInstance(ObjectManager::class);		
		$placeholderDiscounts = $this->objectManager->get(Discounts::class);
		$placeholderDiscounts->setTitle("Placeholder");
		
		
		if($count % 3 == 0) {
			//echo "test";exit();die;
		} else if ($count % 3 == 1) {
			//echo "test2";exit();die;
			array_push($discounts, $placeholderDiscounts);
			array_push($discounts, $placeholderDiscounts);
		} else {
			//echo "test3";exit();die;
			//array_push($discounts, $placeholderDiscounts);
			array_push($discounts, $placeholderDiscounts);
		}
		
		
		$this->view->assign('discounts', $discounts);
	  
	  }
  
  
    
	/**
	* action list
	*
	* @return void
	*/
	public function listAction()
	{
		if ($this->request->hasArgument('query')) {
      	$search = $this->request->getArgument('query');
		}
		
		//echo $search; exit();
		
			
		if(isset($search)) {
			
			//potential debugging
			//$GLOBALS['TYPO3_DB']->debugOutput = true;
			//$GLOBALS['TYPO3_DB']->store_lastBuiltQuery = true;
			
			//query from repository
      	$affiliates = $this->affiliatesRepository->findKeyword($search);
      	
			/*      	
      	\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($affiliates);
        	
        	
        	//more potential debugging
    		echo "<BR>";		
    		echo $GLOBALS['TYPO3_DB']->debug_lastBuiltQuery;
    		exit();
      	*/	
    	} else {
			$affiliates = $this->affiliatesRepository->findAll();
			
			/*
			\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($affiliates);			
			
			
        	//more potential debugging
    		echo "<BR>";		
    		echo $GLOBALS['TYPO3_DB']->debug_lastBuiltQuery;
    		exit();
      	*/		
			
			// set default image if no Image_url image is provided
			/*foreach($affiliates as $affiliate) {
				if($affiliate->getImageurl() == NULL || strlen($affiliate->getImageurl()) < 2) {
					$affiliate->setImageurl("http://ded01.stormat.ca/~justin/typo/typo3conf/ext/affiliate_manager/Resources/Public/Images/image-placeholder.jpg");
				}
			}*/
    	
    	}
    	
    	if($affiliates === 4) {
			echo "Error 4";
			exit();    	
    	}
    	
    	if($affiliates === FALSE) {
			echo "No Results Found.";
			exit();    	
		  	  	
    	}

    	
    	
    	

    	
		$this->view->assign('affiliates', $affiliates);
		
		
	}
    
	/**
	* action show
	*
	* @param \Affiliates\AffiliateManager\Domain\Model\Affiliates $affiliates
	* @return void
	*/
	public function showAction(\Affiliates\AffiliateManager\Domain\Model\Affiliates $affiliates)
	{
		// set default image if no logo image is provided
		foreach($affiliates as $affiliate) {
			if($affiliate->getImageurl() !== NULL && strlen($affiliate->getImageurl()) < 2) {
				$affiliate->setImageurl("http://ded01.stormat.ca/~justin/typo/typo3conf/ext/affiliate_manager/Resources/Public/Images/image-placeholder.jpg");
			}
		}
		
		
		$this->view->assign('affiliates', $affiliates);
	}
    
	/**
	* action edit
	*
	* @param \Affiliates\AffiliateManager\Domain\Model\Affiliates $affiliates
	* @ignorevalidation $affiliates
	* @return void
	*/
	public function editAction(\Affiliates\AffiliateManager\Domain\Model\Affiliates $affiliates)
	{
		$this->view->assign('affiliates', $affiliates);
	}
    
	/**
	* action update
	*
	* @param \Affiliates\AffiliateManager\Domain\Model\Affiliates $affiliates
	* @return void
	*/
	public function updateAction(\Affiliates\AffiliateManager\Domain\Model\Affiliates $affiliates)
	{
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->affiliatesRepository->update($affiliates);
		$this->redirect('list');
	}
    
	/**
	* action delete
	*
	* @param \Affiliates\AffiliateManager\Domain\Model\Affiliates $affiliates
	* @return void
	*/
	public function deleteAction(\Affiliates\AffiliateManager\Domain\Model\Affiliates $affiliates)
	{
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->affiliatesRepository->remove($affiliates);
		$this->redirect('list');
	}
    
	/**
	* action new
	*
	* @return void
	*/
	public function newAction()
	{
        
	}
    
	/**
	* action create
	*
	* @param \Affiliates\AffiliateManager\Domain\Model\Affiliates $newAffiliates
	* @return void
	*/
	public function createAction(\Affiliates\AffiliateManager\Domain\Model\Affiliates $newAffiliates)
	{
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->affiliatesRepository->add($newAffiliates);
		$this->redirect('list');
	}
    
	/**
	* @param $method
	* @param $url
	* @param $data
	*/
	public function syncAction()
	{
		//wipes current table.
		
		//$repository->removeAll();
      
		//debugging enabled
		$GLOBALS['TYPO3_DB']->debugOutput = true;
		$GLOBALS['TYPO3_DB']->store_lastBuiltQuery = true;
		
		
		// trade_doubler private info 
		$trade_doubler_token = 'ED1E0EE4B3FC4C45D73B11B64741E1AEC51D871B';
		$trade_doubler_feedID = '10988';
		$url = 'http://api.tradedoubler.com/1.0/productsUnlimited;fid=' . $trade_doubler_feedID . ';?token=' . $trade_doubler_token;
		$affiliates = $this->callapiAction('GET', $url);
		//format to php array
		$result = json_decode($affiliates, true);
		// Get the data we need.
		$counter = 0;
		
		foreach ($result['products'] as $item) {
			$formatted_array[$counter]['name'] = $item['name'];
			$formatted_array[$counter]['description'] = $item['description'];
			$formatted_array[$counter]['url'] = $item['offers'][0]['productUrl'];
			$formatted_array[$counter]['imageurl'] = $item['offers'][0]['programLogo'];
			$formatted_array[$counter]['sourceid'] = $item['offers'][0]['id'];
			$formatted_array[$counter]['category'] = 'Holidays';
			
			
					
			$formatted_array[$counter]['active'] = true;
			$formatted_array[$counter]['tstamp'] = time();
			$formatted_array[$counter]['crdate'] = $formatted_array[$counter]['tstamp'];
			$counter++;
		}
		for ($i = 0; $i < 10; $i++) {
			if(!$this->affiliatesRepository->countByRegId($formatted_array[$i]['sourceid'])) {
				$result = $GLOBALS['TYPO3_DB']->exec_INSERTquery('tx_affiliatemanager_domain_model_affiliates', $formatted_array[$i]);
			}
			
		}
		
		

		$this->addFlashMessage('Sync has been completed', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->redirect('list');
	}
	
	
	/**
	* AffiliateWindow
	*
	*
	*/
	
	public function affiliatewindowAction()
	{
		$time_start = microtime(true); 

		// datafeed url
		// http://datafeed.api.productserve.com/datafeed/download/apikey/0d5dccc87ac4678c746a5760c9385302/language/en/fid/2940,5483,10813,11161,13561,14359,15073/columns/aw_deep_link,product_name,aw_product_id,merchant_product_id,merchant_image_url,description,merchant_category,search_price,merchant_name,merchant_id,category_name,category_id,aw_image_url,currency,store_price,delivery_cost,merchant_deep_link,language,last_updated,display_price,data_feed_id/format/csv/delimiter/%2C/compression/gzip/
		$f = file_put_contents("my-zip.zip", fopen("http://datafeed.api.productserve.com/datafeed/download/apikey/0d5dccc87ac4678c746a5760c9385302/language/en/fid/2940,5483,10813,11161,13561,14359,15073/columns/aw_deep_link,product_name,aw_product_id,merchant_product_id,merchant_image_url,description,merchant_category,search_price,merchant_name,merchant_id,category_name,category_id,aw_image_url,currency,merchant_deep_link,last_updated,display_price,data_feed_id/format/csv/delimiter/%2C/compression/zip/", 'r'), LOCK_EX);
		if(FALSE === $f)
			die("Couldn't write to file.");

		$zip = new ZipArchive;
		$res = $zip->open('my-zip.zip');
		if ($res === TRUE) {
			
		  $fullpath =  PATH_site . 'uploads/';
		  $zip->extractTo($fullpath);
		  $zip->close();

		  //initialize items
		  $counter = 0;
		  $formatted_array = array();
					  
			if(($handle = fopen($fullpath . 'datafeed_311613.csv', 'r')) !== false)
			{
				// get the first row, which contains the column-titles (if necessary)
				$header = fgetcsv($handle);

				// loop through the file line-by-line
				while(($item = fgetcsv($handle)) !== false)
				{
					// map the array
				  	$item = array_combine($header, $item);

					$formatted_array[$counter]['name'] = $item['product_name'];
					$formatted_array[$counter]['description'] = $item['description'];
					$formatted_array[$counter]['url'] = $item['aw_deep_link']; // done
					$formatted_array[$counter]['imageurl'] = $item['aw_image_url'];
					$formatted_array[$counter]['sourceid'] = $item['aw_product_id'];
					//$formatted_array[$counter]['category'] = 'Food';
					$formatted_array[$counter]['currency'] = $item['currency'];
					$formatted_array[$counter]['cost'] = $item['search_price'];

					$formatted_array[$counter]['affiliatechannel'] = 'AffiliateWindow';
					
					$formatted_array[$counter]['pid'] = 18;

					$formatted_array[$counter]['active'] = true;
					$formatted_array[$counter]['tstamp'] = time();
					$formatted_array[$counter]['crdate'] = $formatted_array[$counter]['tstamp'];
					
					
					unset($item);
					$counter++;
				}
				fclose($handle);

				$stats = $this->syncAffiliateArray($formatted_array);
				unset($formatted_array);
				
				//performance				
				$time_end = microtime(true);

				//dividing with 60 will give the execution time in minutes other wise seconds
				$execution_time = ($time_end - $time_start)/60;

				$this->addFlashMessage("Successfully synced " . $stats['items'] . " items. New Products: " . $stats['new_items'] . ", Updated Products: " . $stats['updated'] . " , Ignored Products: " . $stats['ignored'] . " This script took: " . $execution_time . " mins to complete." , '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
				$this->redirect('list');

			} else {
				$this->addFlashMessage('Fhandle is FALSE. Could not find csv file on server.', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
				$this->redirect('list');
			}
			
		} else {
			$this->addFlashMessage('Unable to find Affiliate Resource', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
			$this->redirect('list');
		}

	}
	
	
	public function webgainsAction()
	{
		$time_start = microtime(true);
		
		$f = file_put_contents("webgainsSync.zip", fopen("http://www.webgains.com/affiliates/datafeed.html?action=download&campaign=208848&feeds=2889,637,7453,7015&categories=1310,1326,1329,1335,1328,1332,1331,1330,6213,6212,1336,1333,1334,8266,8267,8263,1338,1339,1337,1340,6260,1342&fields=extended&fieldIds=category_id,category_name,category_path,deeplink,description,image_url,last_updated,merchant_category,price,product_id,product_name,program_id,program_name,additionalproductdetails,best_sellers,brand,currency,delivery_cost,delivery_period,facilities,image_thumbnail_url,image_url,in_stock,language,manufacturer,promotion_details,related_product_ids,short_description&format=csv&separator=comma&zipformat=zip&stripNewlines=0&apikey=08cc21bf2b6b5ad6bea4221d8cbf54e4", 'r'), LOCK_EX);
		
		if(FALSE === $f)
			die("Couldn't write to file.");
		
		$zip = new ZipArchive;
		$res = $zip->open('webgainsSync.zip');
		
		if ($res === TRUE) {
		  $fullpath =  PATH_site . 'uploads/';

		  $zip->extractTo($fullpath);
		  $zip->close();
		  
			//initialize items
		  $counter = 0;
		  $formatted_array = array();
					  
			if(($handle = fopen($fullpath . '208848-28e0c99345a3659a20dfefd0ec5dfeb4.csv', 'r')) !== false)
			{
				// get the first row, which contains the column-titles (if necessary)
				$header = fgetcsv($handle);

				// loop through the file line-by-line
				while(($item = fgetcsv($handle)) !== false)
				{
					// map the array
				  	$item = array_combine($header, $item);

					$formatted_array[$counter]['name'] = $item['product_name'];
					$formatted_array[$counter]['description'] = $item['description'];
					$formatted_array[$counter]['url'] = $item['aw_deep_link']; // done
					$formatted_array[$counter]['imageurl'] = $item['aw_image_url'];
					$formatted_array[$counter]['sourceid'] = $item['aw_product_id'];
					//$formatted_array[$counter]['category'] = 'Food';
					$formatted_array[$counter]['currency'] = $item['currency'];
					$formatted_array[$counter]['cost'] = $item['search_price'];
		
					$formatted_array[$counter]['affiliatechannel'] = 'WebGains';
					$formatted_array[$counter]['pid'] = 18;
			
			
					$formatted_array[$counter]['active'] = true;
					$formatted_array[$counter]['tstamp'] = time();
					$formatted_array[$counter]['crdate'] = $formatted_array[$counter]['tstamp'];
					$counter++;
					
					
					unset($item);
					$counter++;
				}
				fclose($handle);

				$stats = $this->syncAffiliateArray($formatted_array);
				unset($formatted_array);
				
				//performance				
				$time_end = microtime(true);

				//dividing with 60 will give the execution time in minutes other wise seconds
				$execution_time = ($time_end - $time_start)/60;
				// end performance
				
				$this->addFlashMessage("Successfully synced " . $stats['items'] . " items. New Products: " . $stats['new_items'] . ", Updated Products: " . $stats['updated'] . " , Ignored Products: " . $stats['ignored'] . " This script took: " . $execution_time . " mins to complete." , '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
				$this->redirect('list');

			} else {
				$this->addFlashMessage('Fhandle is FALSE. Could not find csv file on server.', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
				$this->redirect('list');
			}

		} else {
			$this->addFlashMessage('Unable to find Affiliate Resource', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
			$this->redirect('list');
		}
		
		
	}
	
	/**
	* Comission Junction
	*/
	public function comissionjunctionAction()
	{
		$GLOBALS['TYPO3_DB']->debugOutput = true;
		$GLOBALS['TYPO3_DB']->store_lastBuiltQuery = true;
		//$GLOBALS['TYPO3_DB']->debugOutput = 2;
		//$GLOBALS['TYPO3_DB']->explainOutput = true;
		
		try {
			$api_key = "00945a024641919442dd288d47622c2f76c8017305040f93508445d6edf22e9dedf8263621b6fc3618ec38d01fb757a03ded5e81ce55766f54f5a5c9db0f621949/40630071b5ab95899fab26064159a4100da673614dede4a621829e520fb6a3dc22ee19af7221b4d89385b70e0ca879979f7fedfc4e57ee83db5176f6061ede31";
			//$url = "https://product-search.api.cj.com/v2/product-search?website-id=8256447&advertiser-ids=joined";
			$url = "https://product-search.api.cj.com/v2/product-search?website-id=8256447&advertiser-ids=4131376,849260";
			$ch = $this->getCurl();
      
    		//set authorization and URL  
			curl_setopt_array($ch, array(
         	CURLOPT_URL  => $url,
         	CURLOPT_HTTPHEADER => array(
         	    'Accept: application/xml',
         	    'Authorization: ' . $api_key,
         )));
      	
        $body = curl_exec($ch);
        $errno = curl_errno($ch);

        if ($errno !== 0) {
            throw new Exception(sprintf("Error connecting to CommissionJunction: [%s] %s", $errno, curl_error($ch)), $errno);
        }
        
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($http_status >= 400) {
            throw new Exception(sprintf("CommissionJunction Error [%s] %s", $http_status, strip_tags($body)), $http_status);
        }

        $body = preg_replace("/'/", "&#39;", $body);
        $body = preg_replace("/&#11/", "&amp;#11", $body);
		
		}
		catch (Exception $e) {
			echo "!! ERROR: {$e->getMessage()}";
		}
		
		$data = json_decode(json_encode((array)simplexml_load_string($body)), true);
		
		//initialize		
		$counter = 0;
		$formatted_array = array();
		foreach($data['products']['product'] as $item) {

			$formatted_array[$counter]['sourceid'] = $item['sku'];	
			$formatted_array[$counter]['currency'] = $item['currency'];
			$formatted_array[$counter]['url'] = $item['buy-url'];
			$formatted_array[$counter]['name'] = $item['name'];
			$formatted_array[$counter]['cost'] = $item['price'];
			$formatted_array[$counter]['description'] = $item['description'];
			$formatted_array[$counter]['imageurl'] = $item['image-url'];

			$formatted_array[$counter]['affiliatechannel'] = 'CommissionJunction';
			$formatted_array[$counter]['pid'] = 18;			

			//typo3 items			
			$formatted_array[$counter]['active'] = true;
			$formatted_array[$counter]['tstamp'] = time();
			$formatted_array[$counter]['crdate'] = $formatted_array[$counter]['tstamp'];			
			$counter++;	

		}
		
		$stats = $this->syncAffiliateArray($formatted_array);
		unset($formatted_array);
				
		//performance				
		$time_end = microtime(true);

		//dividing with 60 will give the execution time in minutes other wise seconds
		$execution_time = ($time_end - $time_start)/60;
		// end performance
				
		$this->addFlashMessage("Successfully synced " . $stats['items'] . " items. New Products: " . $stats['new_items'] . ", Updated Products: " . $stats['updated'] . " , Ignored Products: " . $stats['ignored'] . " This script took: " . $execution_time . " to complete." , '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->redirect('list');
		
	} // ends comission junction sync

	 
	 
	/**
	* Rakuten
	*
	*
	*/
	public function rakutenAction()
	{
		try {
			$token_basic = 'Basic UXhOWFRXeF9MVXBmdU44MGNKRlFBY0Nid1pNYTp3WFJna01BWjJUV1NVOG1VaG1SQ0JZcXRDNUVh';

			$token = $this->apiToken($token_basic);
			$api_key = 'Bearer ' . $token->access_token;
			
			//$api_key = "00945a024641919442dd288d47622c2f76c8017305040f93508445d6edf22e9dedf8263621b6fc3618ec38d01fb757a03ded5e81ce55766f54f5a5c9db0f621949/40630071b5ab95899fab26064159a4100da673614dede4a621829e520fb6a3dc22ee19af7221b4d89385b70e0ca879979f7fedfc4e57ee83db5176f6061ede31";
			//$url = "https://product-search.api.cj.com/v2/product-search?website-id=8256447&advertiser-ids=joined";
			$url = "https://api.rakutenmarketing.com/productsearch/1.0";
			
			$parameters = ['max'=>10];	
			$url .= "?" . http_build_query($parameters);

			$ch = $this->getCurl();
      
    		//set authorization and URL  
			curl_setopt_array($ch, array(
         	CURLOPT_URL  => $url,
         	CURLOPT_HTTPHEADER => array(
         	    'Accept: application/xml',
         	    'Authorization: ' . $api_key,
         )));
      	
        $body = curl_exec($ch);
        $errno = curl_errno($ch);

        if ($errno !== 0) {
            throw new Exception(sprintf("Error connecting to Rakuten: [%s] %s", $errno, curl_error($ch)), $errno);
        }
        
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($http_status >= 400) {
            throw new Exception(sprintf("Rakuten Error [%s] %s", $http_status, strip_tags($body)), $http_status);
        }

        $body = preg_replace("/'/", "&#39;", $body);
        $body = preg_replace("/&#11/", "&amp;#11", $body);
		
		}
		catch (Exception $e) {
			echo "!! ERROR: {$e->getMessage()}";exit();die;
		}
		
		$data = json_decode(json_encode((array)simplexml_load_string($body)), true);

		//map array
		$counter = 0;
		$formatted_array = array();
		foreach($data['products']['product'] as $item) {
			$formatted_array[$counter]['sourceid'] = $item['ad-id'];	
			$formatted_array[$counter]['currency'] = $item['currency'];
			$formatted_array[$counter]['url'] = $item['buy-url'];
			$formatted_array[$counter]['name'] = $item['name'];
			$formatted_array[$counter]['cost'] = $item['price'];
			$formatted_array[$counter]['description'] = $item['description'];
			$formatted_array[$counter]['imageurl'] = $item['image-url'];

			$formatted_array[$counter]['affiliatechannel'] = 'CommissionJunction';
			$formatted_array[$counter]['pid'] = 18;			

			//typo3 items			
			$formatted_array[$counter]['active'] = true;
			$formatted_array[$counter]['tstamp'] = time();
			$formatted_array[$counter]['crdate'] = $formatted_array[$counter]['tstamp'];			
			$counter++;	
		}

		if(count($formatted_array) > 1) {
			$stats = $this->syncAffiliateArray($formatted_array);
			unset($formatted_array);
		
			//performance				
			$time_end = microtime(true);
			//dividing with 60 will give the execution time in minutes other wise seconds
			$execution_time = ($time_end - $time_start)/60;
			// end performance
			
			$this->addFlashMessage("Successfully synced " . $stats['items'] . " items. New Products: " . $stats['new_items'] . ", Updated Products: " . $stats['updated'] . " , Ignored Products: " . $stats['ignored'] . " This script took: " . $execution_time . " to complete." , '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
			$this->redirect('list');
			
		} else {
			$this->addFlashMessage('Successfully connected to Rakuten but there are no products to sync.', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
			$this->redirect('list');
		}

	
	}
	
	
	public function getCurl() {
		$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => 2,
			CURLOPT_FOLLOWLOCATION => false,
			CURLOPT_MAXREDIRS      => 1,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_CONNECTTIMEOUT => 10,
			CURLOPT_TIMEOUT        => 30,
		));
			 
		return $curl;
	}	
	
    
	/**
	* @param $method
	* @param $url
	* @param $data
	*/
	public function callapiAction($method, $url, $data = false)
	{
		$curl = curl_init();
		switch ($method) {
				case 'POST':    curl_setopt($curl, CURLOPT_POST, 1);
					if ($data) {
						curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
					}
					break;
				case 'PUT':    curl_setopt($curl, CURLOPT_PUT, 1);
					break;
				default:    if ($data) {
						$url = sprintf('%s?%s', $url, http_build_query($data));
					}
		}
		// Optional Authentication:
		/*curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($curl, CURLOPT_USERPWD, "username:password");*/
        
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($curl);
		curl_close($curl);
		return $result;
	}
	
	// Sync Affiliate Array
	public function syncAffiliateArray($formatted_array) {
		
		// Initialize counters
		$updateCount = 0;
		$insertedCount=0;
		$totalCount = count($formatted_array);		

		//insert but must also check to see if item already exists
		for ($i = 0; $i < $totalCount; $i++) {
				
			$count = $this->affiliatesRepository->countSourceidIgnorePID($formatted_array[$i]['sourceid']);
		
			if($count < 1) {
				$result = $GLOBALS['TYPO3_DB']->exec_INSERTquery('tx_affiliatemanager_domain_model_affiliates', $formatted_array[$i]);
				$insertedCount++;
			} else {
			
			$count = 0;
			$count = $this->affiliatesRepository->countSyncSourceidIgnorePID($formatted_array[$i]['sourceid']);
			//echo "Sync is enabled and our count is... " . $count;
			//echo '<br />';
			//echo $GLOBALS['TYPO3_DB']->debug_lastBuiltQuery;
			
			if ($count > 0)	
				//echo "Updating.... " .$formatted_array[$i]['sourceid'] . "<BR>";				
				$results = $this->affiliatesRepository->findBySourceidIgnorePID($formatted_array[$i]['sourceid']);
				
				if(isset($results['0'])) {
				
					$results['0']->setImageurl($formatted_array[$i]['imageurl']);
					$results['0']->setName($formatted_array[$i]['name']);
					
					// only update if current cost is less than new cost
					if($results['0']->getCost() < $formatted_array[$i]['cost']) {
						$results['0']->setPrevcost($results['0']->getCost());
					}
					
					$results['0']->setCost($formatted_array[$i]['cost']);
					$results['0']->setUrl($formatted_array[$i]['url']);
					$results['0']->setCurrency($formatted_array[$i]['currency']);
					$results['0']->setDescription($formatted_array[$i]['description']);
					
					$this->affiliatesRepository->update($results[0]);
					$updateCount++;
					
					//unset($item);
					unset($results);
					unset($count);
					//echo $GLOBALS['TYPO3_DB']->debug_lastBuiltQuery;
				}
			}
		}

		$ignored = $i-$updateCount-$insertedCount;
		
		return array('items' => $i, 'new_items' => ($i-$updateCount-$ignored), 'updated' => $updateCount, 'ignored' => ($ignored));
	}
	
	
	function apiToken($bearer) {
        //$data = array("grant_type" => "password", "username" => "Nat_Pooch",'password'=>'Planpooch16','scope'=>'3375132');
        //$data_string = json_encode($data);                                                                                   
		
        $ch = curl_init('https://api.rakutenmarketing.com/token');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=password&username=Nat_Pooch&password=Planpooch16&scope=3375132");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                              
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Accept: */*',
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: '.$bearer,
            ));  

        $body = curl_exec($ch);
        $errno = curl_errno($ch);

        if ($errno !== 0) {
            throw new Exception(sprintf("Error connecting to Rakuten Token : [%s] %s", $errno, curl_error($ch)), $errno);
        }

        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		
        if ($http_status >= 400) {

            throw new Exception(sprintf("Rakuten Error Token  [%s] %s", $http_status, strip_tags($body)), $http_status);

        }
		
        return json_decode($body);
    }
    
    
  	/* Categories */
    
    
    function showcategoriesAction () {
		$categories = $this->categoriesRepository->findAll();
		
		//print_r($categories);exit();die;
    	
    	$this->view->assign('categories', $categories);
    
    
    }
    
    
    	/**
	* action update
	*
	* @param \Affiliates\AffiliateManager\Domain\Model\Categories $updateCategories
	* @return void
	*/
    function updatecategoriesAction (\Affiliates\AffiliateManager\Domain\Model\Categories $updateCategories) {
		$this->categoriesRepository->update($updateCategories);
		$this->redirect('showcategories');
    	
    }
    
    
    	/**
	* action delete
	*
	* @param \Affiliates\AffiliateManager\Domain\Model\Categories $deleteCategories
	* @return void
	*/
    function deletecategoriesAction (\Affiliates\AffiliateManager\Domain\Model\Categories $deleteCategories) {
		$this->categoriesRepository->remove($deleteCategories);
		$this->redirect('showcategories');
    	
    }
    
    
    function addnewcategoriesAction () {
		
    	
    	
    }
    
    





	/**
	* action create
	*
	* @param \Affiliates\AffiliateManager\Domain\Model\Categories $newCategories
	* @return void
	*/
	public function processaddnewcategoriesAction(\Affiliates\AffiliateManager\Domain\Model\Categories $newCategories)
	{
		//$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->categoriesRepository->add($newCategories);
		$this->redirect('showcategories');
	}










	
	
	

}