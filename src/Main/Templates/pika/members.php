<?php
/**
 * Created by PhpStorm.
 * User: Yinmin
 * Date: 2017/7/7
 * Time: 下午 03:34
 */
/**
 * @var $members array
 */
?>
<h1>Member</h1>

<?php foreach ($members as $member): ?>

  <ul>
      <li><?php echo $member->name; ?></li>
      <li><?php echo $member->age; ?></li>
      <li><?php echo $member->gender; ?></li>
      <li><?php echo $member->save; ?></li>
  </ul>

    <?php endforeach;  ?>
