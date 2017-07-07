<?php
/**
 * Created by PhpStorm.
 * User: Yinmin
 * Date: 2017/7/7
 * Time: 下午 02:39
 */

namespace Main\Controller\pika;


use Main\Model\PikaModel;
use Windwalker\Core\Controller\AbstractController;

class GetController extends AbstractController
{

    /**
     * The main execution process.
     *
     * @return  mixed
     */
    protected function doExecute()
    {
        // 輸入資料時需要注意過濾的狀況
//        $name = $this->input->getString('name');
          $age = $this->input->getInt('age');
//        $gender = $this->input->get('gender');
//
//        $save = $this->input->getFloat('save');
        // TODO: Implement doExecute() method.

        $view = $this->getView( 'Pika');
        /** @var PikaModel $model */
        $model = $this->getModel('Pika');
        $members = $model->getMembers($age);
//      $members = $model->getMembers($save);

        $view->set('members',$members);


//        $view->set('name', $name);
//        $view->set('age', $age);
//        $view->set('gender', $gender);
//        $view->set('save', $save);
        return $view->setLayout('members')->render();
    }
}