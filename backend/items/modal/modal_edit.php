<div class="modal fade bd-example-modal-xl" tabindex="-1" id="modal_edit" role="dialog" data-backdrop="static"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content w3-flat-turquoise">
            <div class="modal-header bg-dark">
                <h5 class="modal-title">แก้ไขสินค้า</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="frmEditStock" id="frmEditStock" method="POST" style="padding:10px;"
                action="javascript:void(0);">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-lg-3 col-12">
                            <label for="recipient-name" class="col-form-label">รหัสสินค้า</label>
                            <input type="text" class="form-control" name="stcode" id="stcode" readonly>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <label class="col-form-label">ชื่อสินค้า</label>
                            <input type="text" class="form-control" name="stname1" id="stname1" required>
                        </div>
                        <div class="form-group col-lg-3 col-12">
                            <label for="recipient-name" class="col-form-label">หน่วย</label>
                            <select class="form-control" name="unit" id="unit" required>
                                <?php 
                                            
                                        	$sql = "SELECT * FROM `unit` where status = 'Y' ";
                                            $query = mysqli_query($conn,$sql);
                                        
                                            while($row = $query->fetch_assoc()) {
                                                echo '<option value="'.$row["unit"].'">'.$row["unit"].'</option>';
                                            }
                                    ?>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                    <div class="form-group col-lg-3 col-12">
                            <label for="recipient-name" class="col-form-label">ประเภทสินค้า</label>
                            <select class="form-control" name="typecode" id="typecode">
                                <option value=""></option>
                                <?php 
                                            
                                        	$sql = "SELECT * FROM `type` where status = 'Y' ";
                                            $query = mysqli_query($conn,$sql);
                                        
                                            while($row = $query->fetch_assoc()) {
                                                echo '<option value="'.$row["typecode"].'">'.$row["typename"].'</option>';
                                            }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-3 col-12">
                            <label for="recipient-name" class="col-form-label">ราคาขาย</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="price" id="price" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">บาท</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-12">
                            <label for="recipient-name" class="col-form-label">สถานะการใช้งาน</label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="Y">เปิดใช้งาน</option>
                                <option value="N">ปิดการใช้งาน</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col text-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                        <button type="submit" id="btnEditSo" form="frmEditStock" class="btn btn-success">แก้ไข</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>