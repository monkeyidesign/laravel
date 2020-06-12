<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <button type="button" class="link-gray no-border no-background" data-toggle="modal" data-target="#cvModalLong">
                                Developed by MR.SAM
                            </button>
                        </li>
                        <li class="breadcrumb-item active text-capitalize">hotel software</li>
                    </ol>
                    @include('docs.cv')
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="m-0 text-dark float-sm-right small">
                        <div class="info">
                            Welcome to
                            <?php
                            $user = auth()->user();
                            echo "<b>{$user->name}</b>";
                            ?>
                        </div>
                    </div>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content-section">
        <div class="content">
            <router-view></router-view>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->
</div>
