<?php

namespace Affiliates\AffiliateManager\ViewHelpers;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 LEARNTUBE! GbR ­ Contact: borulkosergey@icloud.com
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

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * FavoriteViewHelper
 *
 * @author     Justin Marshall <justin.ag.marshall@gmail.com>
 * (c) Justin Marshall
 */
class FavoriteViewHelper extends AbstractViewHelper
{
	/**
	* favoritesRepository
	*
	* @var \Affiliates\AffiliateManager\Domain\Repository\FavoritesRepository
	* @inject
	*/
	protected $favoritesRepository = NULL;

    /**
     * Decides if user has accepted the course invitation or not
     *
     * @param int $affiliateUid
     * 
     * @return bool
     */
    public function render($affiliateUid)
    {
    	$userUid = $GLOBALS['TSFE']->fe_user->user['uid'];
    	
    	$count = $this->favoritesRepository->countUserFavorites($affiliateUid, $userUid);
    	
    	
    	
    	if($count > 0) {
			return TRUE;    	
    	} else {
			return FALSE;    	
    	}

    }
}