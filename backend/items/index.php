<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../');
    exit;
}
include_once('../conn.php');
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ข้อมูลสินค้า</title>

    <?php 
    include_once('css.php');
    include_once('../../config.php');
    include_once('../import_css.php');
    include_once ROOT_CSS . '/func.php'; 
    ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo PATH; ?>/backend/img/logo_fb.png" alt="AdminLTELogo"
                width="80">
        </div>

        <?php include_once ROOT_CSS . '/menu_head.php'; ?>

        <?php include_once ROOT_CSS . '/menu_left.php'; ?>



        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <span class="m-0"><i class="nav-icon fas fa-paste"></i> ข้อมูลสินค้า</span>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <form data-ajax="false" target="_blank" method="post">
                                <div data-role="fieldcontain">

                                    <div class="btn" id="btnAddSO"  aria-label="Basic example">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_add"><i class="fa fa-qrcode" aria-hidden="true"></i> เพิ่มรหัสสินค้า</button>
                                        <button type="button" id="btnRefresh" class="btn btn-info"><i class="fas fa-sync-alt"aria-hidden="true"></i> Refresh</button>
                                    </div>
                                    <div class="btn-group" id="btnBack" style="display:none;"
                                        aria-label="Basic example">
                                        <button type="button" class="btn btn-success"><i class="fa fa fa-tags"
                                                aria-hidden="true"></i>
                                            ย้อนกลับ</button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <table name="tableStock" id="tableStock"
                                class="table table-striped table-valign-middle table-bordered table-hovers text-nowarp">
                                <thead class="sticky-top table-defalut bg-dark">
                                    <tr>
                                        <th width="20%">รหัสสินค้า</th>
                                        <th width="40%">ชื่อสินค้า</th>
                                        <th width="20%">ประเภทสินค้า</th>
                                        <th width="20%">สถานะการใช้งาน</th>
                                    </tr>
                                </thead>
                                <tbody class="text-nowrap" style="background:#ECF2FF;">

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        <?php 
        include_once('modal/modal_add.php');
        ?>
        <?php 
        include_once('modal/modal_edit.php');
        ?>

    </div>

    <?php
    include_once ROOT_CSS . '/import_js.php';
    

    include_once('js.php'); 
    ?>

</body>

</html>