<?php
/**
 * Created by PhpStorm.
 * User: Yinmin
 * Date: 2017/7/11
 * Time: 下午 12:20
 */


?>
@extends('_global.html')
@section('content')


<div class="container">
    <h1>todo</h1>
<form action="<?php echo $router->route('task'); ?>" method="post"  class="form-horizintal">
    <div class="form-group">
        <label for="">title</label>
        <input type="text" class="form-control" name="title" required value="">
    </div>
    <div class="form-group">
        <label for="">Content</label>
        <br />
        <textarea name="content" class="form-control" row="7" cols="50"></textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-lg">Save</button>
</form>
</div>
@stop