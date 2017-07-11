<?php
/**
 * Created by PhpStorm.
 * User: Yinmin
 * Date: 2017/7/11
 * Time: 下午 12:20
 */

$this->extend('_global.html')
?>

<?php $this->block('content') ?>


<div class="container">
    <h1>todo</h1>
<form action="<?php echo $router->route('task'); ?>" method="post" class="form-horizintal">
    <div class="form-group">
        <label for="">title</label>
        <input type="text" name="title" value="">
    </div>
    <div class="form-group">
        <label for="">Content</label>
        <br />
        <textarea name="content" row="7" cols="50"></textarea>
    </div>
</form>
</div>
<?php $this->endblock(); ?>