<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        New product
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=ADMIN;?>/product">Order list</a></li>
        <li class="active">New product</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/product/add" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Product name</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Product name" value="<?php isset($_SESSION['form_data']['title']) ? h($_SESSION['form_data']['title']) : null; ?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Parent category</label>
                            <?php new \app\widgets\menu\Menu([
                                'tpl' => WWW . '/menu/select.php',
                                'container' => 'select',
                                'cache' => 0,
                                'cacheKey' => 'admin_select',
                                'class' => 'form-control',
                                'attrs' => [
                                    'name' => 'category_id',
                                    'id' => 'category_id',
                                ],
                                'prepend' => '<option>Select a category</option>',
                            ]) ?>
                        </div>

                        <div class="form-group">
                            <label for="keywords">Keywords</label>
                            <input type="text" name="keywords" class="form-control" id="keywords" placeholder="keywords" value="<?php isset($_SESSION['form_data']['keywords']) ? h($_SESSION['form_data']['keywords']) : null; ?>">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="description" value="<?php isset($_SESSION['form_data']['description']) ? h($_SESSION['form_data']['description']) : null; ?>">
                        </div>

                        <div class="form-group has-feedback">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="description" placeholder="price" pattern="^[0-9.]{1,}$" value="<?php isset($_SESSION['form_data']['price']) ? h($_SESSION['form_data']['price']) : null; ?>" required data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="old_price">Price</label>
                            <input type="text" name="old_price" class="form-control" id="description" placeholder="old price" pattern="^[0-9.]{1,}$" value="<?php isset($_SESSION['form_data']['old_price']) ? h($_SESSION['form_data']['old_price']) : null; ?>" data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="content">Content</label>
                            <textarea name="content" id="editor1" cols="80" rows="10"><?php isset($_SESSION['form_data']['old_price']) ? $_SESSION['form_data']['old_price'] : null; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status" checked>Status
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="hit"> Hit
                            </label>
                        </div>

                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
                <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->