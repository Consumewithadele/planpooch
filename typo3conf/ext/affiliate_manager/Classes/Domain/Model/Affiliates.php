<?php
namespace Affiliates\AffiliateManager\Domain\Model;

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
 * Affiliates
 */
class Affiliates extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * sourceid
     *
     * @var string
     */
    protected $sourceid = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
	
    
    /**
     * retailer
     *
     * @var string
     */
    protected $retailer = '';
    
    /**
     * imageurl
     *
     * @var string
     */
    protected $imageurl = '';
    
    /**
     * url
     *
     * @var string
     */
    protected $url = '';
	/* new database as per natasha updates */
    /**
     * pet_number
     *
     * @var string
     */
    protected $pet_number = '';
	
    /**
     * Cost
     *
     * @var float
     */
    protected $cost = 0.0;
	
	

	  /**
     * inscost
     *
     * @var float
     */
    protected $inscost = 0.0;
    /**
     * inscycle
     *
     * @var int
     */
    protected $inscycle = 1;
	
	
    /**
     * prevcost
     *
     * @var float
     */
    protected $prevcost = 0.0;
	
    /**
     * address
     *
     * @var string
     */
    protected $address = '';
	
	
    /**
     * currency
     *
     * @var string
     */
    protected $currency = '';	
	
	
    /**
     * businesshours
     *
     * @var string
     */
    protected $businesshours = '';
	
    /**
     * phonenumber
     *
     * @var string
     */
    protected $phonenumber = '';
	
    /**
     * rating
     *
     * @var string
     */
    protected $rating = '';
    /* end */
	
	
    /**
     * active
     *
     * @var bool
     */
    protected $active = false;
    
    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * category
     *
     * @var string
     */
    protected $category = '';
	
    /**
     * affiliatechannel
     *
     * @var string
     */
    protected $affiliatechannel = '';
    
	
    /**
     * sync
     *
     * @var bool
     */
    protected $sync = false;
    
    
	/* NEW */    
    
    /**
     * insurancecoverage
     *
     * @var string
     */
    protected $insurancecoverage = '';
    
    /**
     * insurancefees
     *
     * @var string
     */
    protected $insurancefees = '';
    
    
    /**
     * insurancelost
     *
     * @var string
     */
    protected $insurancelost = '';

    /**
     * insurancefeesexcess
     *
     * @var string
     */
    protected $insurancefeesexcess = '';

    /**
     * postalcode
     *
     * @var string
     */
    protected $postalcode = '';

    /**
     * insurancedeath
     *
     * @var string
     */
    protected $insurancedeath = '';



    public function getInsurancecoverage()
    {
        return $this->insurancecoverage;
    }
    public function setInsurancecoverage($insurancecoverage)
    {
        $this->insurancecoverage = $insurancecoverage;
    }


    public function getInsurancefees()
    {
        return $this->insurancefees;
    }
    public function setInsurancefees($insurancefees)
    {
        $this->insurancefees = $insurancefees;
    }



    public function getInsurancedeath()
    {
        return $this->insurancedeath;
    }
    public function setInsurancedeath($insurancedeath)
    {
        $this->insurancedeath = $insurancedeath;
    }
    


    public function getInsurancelost()
    {
        return $this->insurancelost;
    }
    public function setInsurancelost($insurancelost)
    {
        $this->insurancelost = $insurancelost;
    }
    

    public function getInsurancefeesexcess()
    {
        return $this->insurancefeesexcess;
    }
    public function setInsurancefeesexcess($insurancefeesexcess)
    {
        $this->insurancefeesexcess = $insurancefeesexcess;
    }


    public function getPostalcode()
    {
        return $this->postalcode;
    }
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
    }

	/*END NEW*/	
	

	
	
	
    public function getInscost()
    {
        return $this->inscost;
    }
    public function setInscost($inscost)
    {
        $this->inscost = $inscost;
    }
	
	
    public function getInscycle()
    {
        return $this->inscycle;
    }
    public function setInscycle($inscycle)
    {
        $this->inscycle = $inscycle;
    }
	
	
	
	
	
	
    public function getRetailer()
    {
        return $this->retailer;
    }
    public function setRetailer($retailer)
    {
        $this->retailer = $retailer;
    }
	
    public function getPrevcost()
    {
        return $this->prevcost;
    }
    public function setPrevcost($prevcost)
    {
        $this->prevcost = $prevcost;
    }
	

	
    public function getSync()
    {
        return $this->sync;
    }
    public function setSync($sync)
    {
        $this->sync = $sync;
    }

    public function getAffiliatechannel()
    {
        return $this->affiliatechannel;
    }
    public function setAffiliatechannel($affiliatechannel)
    {
        $this->affiliatechannel = $affiliatechannel;
    }
	

    public function getPetnumber()
    {
        return $this->petnumber;
    }
    public function setPetnumber($petnumber)
    {
        $this->petnumber = $petnumber;
    }
	

    public function getCost()
    {
        return $this->cost;
    }
    public function setCost($cost)
    {
        $this->cost = $cost;
    }
	

    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
	
	
    public function getBusinesshours()
    {
        return $this->businesshours;
    }
    public function setBusinesshours($businesshours)
    {
        $this->businesshours = $businesshours;
    }

    public function getPhonenumber()
    {
        return $this->phonenumber;
    }
    public function setPhonenumber($phonenumber)
    {
        $this->phone_number = $phonenumber;
    }
	
    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }
	
	
	
	
    /**
     * Returns the description
     *
     * @return string description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the url
     *
     * @return string url
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Sets the url
     *
     * @param string $url
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


    /**
     * Returns the currency
     *
     * @return string currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    
    /**
     * Sets the currency
     *
     * @param string $currency
     * @return void
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

	
	
    /**
     * Returns the imageurl
     *
     * @return string imageurl
     */
    public function getImageurl()
    {
        return $this->imageurl;
    }
    
    /**
     * Sets the imageurl
     *
     * @param string $imageurl
     * @return void
     */
    public function setImageurl($imageurl)
    {
        $this->imageurl = $imageurl;
    }
    
    /**
     * Returns the sourceid
     *
     * @return string $sourceid
     */
    public function getSourceid()
    {
        return $this->sourceid;
    }
    
    /**
     * Sets the sourceid
     *
     * @param string $sourceid
     * @return void
     */
    public function setSourceid($sourceid)
    {
        $this->sourceid = $sourceid;
    }
    
    /**
     * Returns the active
     *
     * @return bool $active
     */
    public function getActive()
    {
        return $this->active;
    }
    
    /**
     * Sets the active
     *
     * @param bool $active
     * @return void
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
    
    /**
     * Returns the boolean state of active
     *
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the category
     *
     * @return string $category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * Sets the category
     *
     * @param string $category
     * @return void
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

}