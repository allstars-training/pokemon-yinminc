<?php
/**
 * Created by PhpStorm.
 * User: Yinmin
 * Date: 2017/7/7
 * Time: 下午 03:23
 */

namespace Main\Model;


use Main\Controller\pika\GetController;
use Windwalker\Core\Model\ModelRepository;

class PikaModel extends ModelRepository
{
    /**
     * @param null $age
     * @param null $save
     * @return array
     */
    public function getMembers($age = null, $save = null)
    {

        $file = __DIR__ . '/../resources/member.json';
        $data = file_get_contents($file);
        $members = json_decode($data);
        if ($age || $save)
        {
            foreach ($members as $k => $member)
            {
                if ($member->age < $age)
                {
                    if ($member->save < $save)
                    {
                        unset($members[$k]);
                    } else {
                        echo "no one is match.";
                        exit();
                    }
                } else {
                    if ($member->save < $save) {
                        unset($members[$k]);
                    }
                }
            }
        }
        return $members;
    }

}