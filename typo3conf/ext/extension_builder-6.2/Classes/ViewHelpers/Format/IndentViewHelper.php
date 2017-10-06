<?php
namespace EBT\ExtensionBuilder\ViewHelpers\Format;

/*                                                                        *
 * This script belongs to the TYPO3 package "Extension Builder".                  *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Indentation ViewHelper
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @scope prototype
 */
class IndentViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 *
	 * @param int $indentation
	 * @param string $type
	 * @return bool TRUE or FALSE
	 */
	public function render($indentation) {
		$outputToIndent = $this->renderChildren();
		$lineArray = explode(chr(10), $outputToIndent);
		$indentString = '';
		for ($i = 0; $i < $indentation; $i++) {
			$indentString .= '	';
		}
		return implode(chr(10) . $indentString, $lineArray);
	}

}