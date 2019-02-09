<?php
/**
 * P.One PHP Framework
 * Very simple PHP framework
 *
 * PHP version 7.2.0
 *
 * @category Application
 * @package  App
 * @author   Felipe Rodrigues <fessrodrigues@outlook.com>
 * @license  MIT 
 * @version  GIT: 0.1.0
 * @link     http://example.domain
 */
namespace App;

defined('ROOT') or
    die('This script is not directly accesible.');

/**
 * Class Controller
 *
 * Base to use by others "Controller classes".
 *
 * @category Class
 * @package  App
 * @author   Felipe Rodrigues <fessrodrigues@outlook.com>
 * @license  MIT 
 * @version  Release: v0.1.0-alpha.0
 * @link     http://example.domain
 */
class Controller
{
    /** 
     * Constructor
     * 
     * @return void
     */
    public function __construct()
    {        
        $this->view = new View();
    }
}
