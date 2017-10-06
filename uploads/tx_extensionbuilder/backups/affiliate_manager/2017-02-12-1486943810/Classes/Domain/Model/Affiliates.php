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
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * url
     *
     * @var string
     */
    protected $url = '';
    
    /**
     * logo
     *
     * @var string
     */
    protected $logo = '';
    
    /**
     * sourceid
     *
     * @var string
     */
    protected $sourceid = '';
    
    /**
     * active
     *
     * @var bool
     */
    protected $active = false;
    
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
     * Returns the logo
     *
     * @return string logo
     */
    public function getLogo()
    {
        return $this->logo;
    }
    
    /**
     * Sets the logo
     *
     * @param string $logo
     * @return void
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
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

}