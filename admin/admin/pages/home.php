<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">HOME</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <?php if ($_SESSION['tipe_user'] == 'admin') : ?>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-book fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <div>Manajemen Sabhara</div>
                            </div>
                        </div>
                    </div>
                    <a href="?module=sabhara">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <div>Manajemen SKCK</div>
                            </div>
                        </div>
                    </div>
                    <a href="?module=skck">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-list fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Manajemen Perijinan</div>
                            </div>
                        </div>
                    </div>
                    <a href="?module=perijinan">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Manajemen SIM</div>
                            </div>
                        </div>
                    </div>
                    <a href="?module=sim">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-th-list fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Manajemen STNK</div>
                            </div>
                        </div>
                    </div>
                    <a href="?module=stnk">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-book fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Manajemen Lapor Diri</div>
                            </div>
                        </div>
                    </div>
                    <a href="?module=laporan_diri">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    <?php else : ?>

        <?= include('_home_super_admin.php') ?>

    <?php endif ?>

    <!-- /.row -->
    <div class="row">

        <!-- /.col-lg-8 -->
        <div class="col-lg-4">

            <ul class="dropdown-menu slidedown">
                <li>
                    <a href="#">
                        <i class="fa fa-refresh fa-fw"></i> Refresh
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-check-circle fa-fw"></i> Available
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-times fa-fw"></i> Busy
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-clock-o fa-fw"></i> Away
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <i class="fa fa-sign-out fa-fw"></i> Sign Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.panel-heading -->

    <!-- /.panel-body -->
    <!-- <div class="panel-footer">
        <div class="input-group">



        </div>
    </div> -->
    <!-- /.panel-footer -->
</div>