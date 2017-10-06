<?php
namespace Affiliates\AffiliateManager\Controller;

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
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $affiliates = $this->affiliatesRepository->findAll();
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

}