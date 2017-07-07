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
     * @return array
     */
    public function getMembers($age = null)
    {
        $file = __DIR__ . '/../resources/member.json';
        $data = file_get_contents($file);
        $members = json_decode($data);

        if ($age) {
            foreach ($members as $k => $member) {
                if ($member->age < $age) {
                    unset($members[$k]);
                }
            }
        }
        return $members;
    }



}