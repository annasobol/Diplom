<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Order №<?=$order['id'];?>
        <?php if(!$order['status']): ?>
            <a href="<?=ADMIN;?>/order/change?id=<?=$order['id'];?>&status=1" class="btn btn-success btn-xs">To approve</a>
        <?php else: ?>
            <a href="<?=ADMIN;?>/order/change?id=<?=$order['id'];?>&status=0" class="btn btn-default btn-xs">Return for revision</a>
        <?php endif; ?>
        <a href="<?=ADMIN;?>/order/delete?id=<?=$order['id'];?>" class="btn btn-danger btn-xs delete">Delete</a>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=ADMIN;?>/order">Order list</a></li>
        <li class="active">Order №<?=$order['id'];?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>Order №</td>
                                <td><?=$order['id'];?></td>
                            </tr>
                            <tr>
                                <td>Date of creation</td>
                                <td><?=$order['date'];?></td>
                            </tr>
                            <tr>
                                <td>Date of creation</td>
                                <td><?=$order['update_at'];?></td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td><?=count($order_products);?></td>
                            </tr>
                            <tr>
                                <td>Sum</td>
                                <td><?=$order['sum'];?> <?=$order['currency'];?></td>
                            </tr>
                            <tr>
                                <td>User name</td>
                                <td><?=$order['name'];?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td><?=$order['status'] ? 'Is completed' : 'New';?></td>
                            </tr>
                            <tr>
                                <td>Comment</td>
                                <td><?=$order['note'];?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <h3>Details</h3>
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $qty = 0; foreach($order_products as $product): ?>
                                <tr>
                                    <td><?=$product->id;?></td>
                                    <td><?=$product->title;?></td>
                                    <td><?=$product->qty; $qty += $product->qty?></td>
                                    <td><?=$product->price;?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr class="active">
                                <td colspan="2">
                                    <b>Total:</b>
                                </td>
                                <td><b><?=$qty;?></b></td>
                                <td><b><?=$order['sum'];?> <?=$order['currency'];?></b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->