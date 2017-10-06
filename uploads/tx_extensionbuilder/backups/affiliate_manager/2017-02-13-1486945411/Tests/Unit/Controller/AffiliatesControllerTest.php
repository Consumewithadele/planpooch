<?php
namespace Affiliates\AffiliateManager\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Affiliates\AffiliateManager\Controller\AffiliatesController.
 *
 */
class AffiliatesControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Affiliates\AffiliateManager\Controller\AffiliatesController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Affiliates\\AffiliateManager\\Controller\\AffiliatesController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllAffiliatessFromRepositoryAndAssignsThemToView()
	{

		$allAffiliatess = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$affiliatesRepository = $this->getMock('Affiliates\\AffiliateManager\\Domain\\Repository\\AffiliatesRepository', array('findAll'), array(), '', FALSE);
		$affiliatesRepository->expects($this->once())->method('findAll')->will($this->returnValue($allAffiliatess));
		$this->inject($this->subject, 'affiliatesRepository', $affiliatesRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('affiliatess', $allAffiliatess);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenAffiliatesToView()
	{
		$affiliates = new \Affiliates\AffiliateManager\Domain\Model\Affiliates();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('affiliates', $affiliates);

		$this->subject->showAction($affiliates);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenAffiliatesToAffiliatesRepository()
	{
		$affiliates = new \Affiliates\AffiliateManager\Domain\Model\Affiliates();

		$affiliatesRepository = $this->getMock('Affiliates\\AffiliateManager\\Domain\\Repository\\AffiliatesRepository', array('add'), array(), '', FALSE);
		$affiliatesRepository->expects($this->once())->method('add')->with($affiliates);
		$this->inject($this->subject, 'affiliatesRepository', $affiliatesRepository);

		$this->subject->createAction($affiliates);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenAffiliatesToView()
	{
		$affiliates = new \Affiliates\AffiliateManager\Domain\Model\Affiliates();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('affiliates', $affiliates);

		$this->subject->editAction($affiliates);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenAffiliatesInAffiliatesRepository()
	{
		$affiliates = new \Affiliates\AffiliateManager\Domain\Model\Affiliates();

		$affiliatesRepository = $this->getMock('Affiliates\\AffiliateManager\\Domain\\Repository\\AffiliatesRepository', array('update'), array(), '', FALSE);
		$affiliatesRepository->expects($this->once())->method('update')->with($affiliates);
		$this->inject($this->subject, 'affiliatesRepository', $affiliatesRepository);

		$this->subject->updateAction($affiliates);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenAffiliatesFromAffiliatesRepository()
	{
		$affiliates = new \Affiliates\AffiliateManager\Domain\Model\Affiliates();

		$affiliatesRepository = $this->getMock('Affiliates\\AffiliateManager\\Domain\\Repository\\AffiliatesRepository', array('remove'), array(), '', FALSE);
		$affiliatesRepository->expects($this->once())->method('remove')->with($affiliates);
		$this->inject($this->subject, 'affiliatesRepository', $affiliatesRepository);

		$this->subject->deleteAction($affiliates);
	}
}
