<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Clearing cache
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Clearing cache</li>
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
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Category Cache</td>
                                <td>Menu categories on the site. Cached for 1 hour</td>
                                <td><a class="delete" href="<?=ADMIN;?>/cache/delete?key=category"><i class="fa fa-fw fa-close text-danger"></i></a></td>
                            </tr>
                            <tr>
                                <td>Filter Cache</td>
                                <td>Cache filters and filter groups. Cached for 1 hour</td>
                                <td><a class="delete" href="<?=ADMIN;?>/cache/delete?key=filter"><i class="fa fa-fw fa-close text-danger"></i></a></td>
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