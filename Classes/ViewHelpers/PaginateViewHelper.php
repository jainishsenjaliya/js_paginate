<?php
namespace JS\JsPaginate\ViewHelpers;
 
/***************************************************************
*  Copyright notice
*
*  (c) 2015 Jainish Senjaliya <jainishsenjaliya@gmail.com>
*
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
 * This widget is a copy of the fluid paginate widget. Now it's possible to
 * use arrays with paginate, not only query results.
 *
 * @author     Jainish Senjaliya <jainishsenjaliya@gmail.com>
 * @copyright  2015 Copyright belongs to the respective authors
 * @license    http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
 
class PaginateViewHelper extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetViewHelper {
 
    /**
     * @var \JS\JsPaginate\Controller\PaginateController
     */
    protected $controller;
 
    /**
     * Injection of widget controller
     *
     * @param \JS\JsPaginate\Controller\PaginateController $controller
     * @return void
     */
    public function injectController(\JS\JsPaginate\Controller\PaginateController $controller) {
        $this->controller = $controller;
    }
 
    /**
     * The render method of widget
     *
     * @param mixed $objects \TYPO3\CMS\ExtBase\Persistence\QueryResultInterface,
     *        \TYPO3\CMS\ExtBase\Persistence\ObjectStorage object or array
     * @param string $as
     * @param array $configuration
     * @return string
     */
    public function render($objects, $as, array $configuration = array('itemsPerPage' => 10, 'insertAbove' => FALSE, 'insertBelow' => TRUE)) {
        return $this->initiateSubRequest();
    }
}
 
?>