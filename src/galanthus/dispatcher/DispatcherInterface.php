<?php
/**
 * Galanthus Framework © 2012
 * Copyright © 2012 Sasquatch <Joan-Alexander Grigorov>
 *                              http://bgscripts.com
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License v3
 * that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @category   Galanthus
 * @package    Galanthus Controller
 * @copyright  Copyright (c) 2012 Sasquatch, Elegance Team
 */

namespace galanthus\dispatcher;

/**
 * Dispatcher interface
 * 
 * @author     Joan-Alexander Grigorov http://bgscripts.com
 * @category   Galanthus
 * @package    Galanthus Controller
 * @copyright  Copyright (c) 2012 Sasquatch, Elegance Team
 */
interface DispatcherInterface
{
    
    /**
     * Default root controller
     * 
     * The root(index) controller is the first controller
     * to be dispatched
     * 
     * @var string
     */
    const DEFAULT_ROOT_CONTROLLER = 'app\controllers\Root';
    
    /**
     * Get the request object
     * 
     * @return \galanthus\dispatcher\RequestInterface
     */
    public function getRequest();
    
    /**
     * Get the response object
     * 
     * @return \galanthus\dispatcher\ResponseInterface
     */
    public function getResponse();
    
    /**
     * Dispatch controllers
     * 
     * @param string $rootController
     * @return DispatcherInterface
     */
    public function dispatch($rootController = self::DEFAULT_ROOT_CONTROLLER);
    
    /**
     * Output the response
     * 
     * @return string
     */
    public function output();
    
}