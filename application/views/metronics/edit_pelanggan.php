<div class="page-content">
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo base_url();?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="<?php echo base_url();?>/master">Pelanggan</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Edit Data Pelanggan</span>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet">
                <div class="portlet-body form">
                    <form method="post" class="form-horizontal validate" id = "pelanggan_baru">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama <span class="required"> * </span></label>
                                <div class="col-md-6">
                                    <input type="text" name = "name" class="form-control" value = "<?php echo $customer->name;?>"data-parsley-required = "true" data-parsley-error-message="Silahkan masukan nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nomor Handphone<span class="required"> * </span></label>
                                <div class="col-md-6">
                                    <input type="text" name = "contact1" class="form-control" value = "<?php echo $customer->contact1;?>" data-parsley-required = "true" data-parsley-error-message="Silahkan masukan nomor hp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input type="email" name = "contact2" value = "<?php echo $customer->contact2;?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Alamat</label>
                                <div class="col-md-6">
                                    <textarea rows="3" cols="5" name="address" class="form-control" placeholder="Enter your address here"><?php echo $customer->address;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Tanggal Lahir</label>
                                <div class="col-md-6">
                                    <div class="input-icon">
                                        <i class="fa fa-calendar"></i>
                                        <input name = "dob" value = "<?php echo date('d M Y', strtotime($customer->dob));?>" class="form-control form-control-inline input-medium date-picker" data-date-format="dd M yyyy" size="16" type="text" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class ="form-actions">
                            <div class = "row">
                                <div class = "col-md-8"></div>
                                <div class = "col-md-3">
                                    <button type="submit" name = "submit_btn" value = "true" class="btn green" id =  "btn_submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>