<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;

use ZPHP\Core\Config;

use ZPHP\Protocol\Request;

use ZPHP\View;

use Common;

class Code extends \Ctrl\Admin implements IController
{

    public function _before()
    {
        parent::_before();
        return true;
    }

    public function _after()
    {
        //
    }

    public function highlight()
    {
        return [];
        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/code/highlight.php');
        $view->display();
    }

    public function diff()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/code/diff.php');
        $view->display();
    }

    public function compare()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/code/compare.php');
        $view->display();
    }

    /**
     * @param  int
     * @param  array
     * @return [type]
     */
    public function aa(int $a,array $b)
    {
        return false;
    }

}

