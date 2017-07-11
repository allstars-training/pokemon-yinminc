<?php
/**
 * Created by PhpStorm.
 * User: Yinmin
 * Date: 2017/7/11
 * Time: 下午 12:08
 */

namespace Todo\Controller\Task;


use Windwalker\Core\Controller\AbstractController;

class GetController extends AbstractController
{
    protected function doExecute()
    {
        // TODO: Implement doExecute() method.
        $view = $this->getView('task');
        return $view->render();
    }
}