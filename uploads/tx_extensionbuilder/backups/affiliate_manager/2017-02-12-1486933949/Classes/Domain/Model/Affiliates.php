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
     * affdesc
     *
     * @var string
     */
    protected $affdesc = '';
    
    /**
     * link
     *
     * @var string
     */
    protected $link = '';
    
    /**
     * imgurl
     *
     * @var string
     */
    protected $imgurl = '';
    
    /**
     * Returns the affdesc
     *
     * @return string $affdesc
     */
    public function getAffdesc()
    {
        return $this->affdesc;
    }
    
    /**
     * Sets the affdesc
     *
     * @param string $affdesc
     * @return void
     */
    public function setAffdesc($affdesc)
    {
        $this->affdesc = $affdesc;
    }
    
    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }
    
    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }
    
    /**
     * Returns the imgurl
     *
     * @return string $imgurl
     */
    public function getImgurl()
    {
        return $this->imgurl;
    }
    
    /**
     * Sets the imgurl
     *
     * @param string $imgurl
     * @return void
     */
    public function setImgurl($imgurl)
    {
        $this->imgurl = $imgurl;
    }

}