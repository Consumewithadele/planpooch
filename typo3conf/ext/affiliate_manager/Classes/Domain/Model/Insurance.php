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
 * Insurance
 */
class Insurance extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{


    /**
     * 
     *
     * @var string
     */
    protected $petname = '';
    
    
    /**
     * 
     *
     * @var string
     */
    protected $gender = '';
    
    /**
     * 
     *
     * @var string
     */
    protected $petyears = '';
    
    /**
     * 
     *
     * @var string
     */
    protected $petmonths = '';

    /**
     * 
     *
     * @var string
     */
    protected $petsize = '';

    /**
     * 
     *
     * @var boolean
     */
    protected $crossbreed = NULL;

    /**
     * 
     *
     * @var boolean
     */
    protected $chipped = NULL;

    /**
     * Cost
     *
     * @var float
     */
    protected $cost = 0.0;
    /**
     * 
     *
     * @var boolean
     */
    protected $free = NULL;

    /**
     * 
     *
     * @var boolean
     */
    protected $neutered = NULL;
    
    
    
		

    public function getPetname()
    {
        return $this->petname;
    }
    public function setPetname($petname)
    {
        $this->petname = $petname;
    }
    
    
    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    
    
    
    public function getPetyears()
    {
        return $this->petyears;
    }
    public function setPetyears($petyears)
    {
        $this->petyears = $petyears;
    }
    
    
    public function getPetmonths()
    {
        return $this->petmonths;
    }
    public function setPetmonths($petmonths)
    {
        $this->petmonths = $petmonths;
    }
    
    
    public function getPetsize()
    {
        return $this->petsize;
    }
    public function setPetsize($petsize)
    {
        $this->petsize = $petsize;
    }
    
    public function getCrossbreed()
    {
        return $this->crossbreed;
    }
    public function setCrossbreed($crossbreed)
    {
        $this->crossbreed = $crossbreed;
    }    
    
    public function getChipped()
    {
        return $this->chipped;
    }
    public function setChipped($chipped)
    {
        $this->chipped = $chipped;
    }
    
    public function getCost()
    {
        return $this->cost;
    }
    public function setCost($cost)
    {
        $this->cost = $cost;
    } 
    
    public function getFree()
    {
        return $this->free;
    }
    public function setFree($free)
    {
        $this->free = $free;
    }

    public function getNeutered()
    {
        return $this->neutered;
    }
    public function setNeutered($neutered)
    {
        $this->neutered = $neutered;
    }















}