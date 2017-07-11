<?php
/**
 * Created by PhpStorm.
 * User: Yinmin
 * Date: 2017/7/11
 * Time: 下午 01:00
 */

namespace Todo\Controller\Task;


use Windwalker\Core\Controller\AbstractController;
use Windwalker\Filesystem\Folder;

class SaveController extends AbstractController
{
    protected function doExecute()
    {
        // TODO: Implement doExecute() method.
        // post 擋住別人輸入資料影響資料庫
        $title = $this->input->post->getString('title');
        $content = $this->input->post->getString('content');



//        $flower = $this->router->getMatched->getExtra('flower');


        $data = json_encode([
            'title' => $title,
            'content' => $content
        ]);
        $id = md5(uniqid());
        $file = WINDWALKER_TEMP . '/todo/' . $id . '.json';

        if (!is_dir(dirname($file)))
        {
            Folder::create(dirname($file));
        }

        echo file_put_contents($file, $data);
        $this->addMessage('Save Success', 'success');
        $this->setRedirect($this->router->route('task'));
        return true;
        //        show($title, $content);
//        exit(' @Checkpoint');
    }
}