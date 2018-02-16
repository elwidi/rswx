<div class="page-content">
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo base_url();?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Kode Barang</span>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="fa fa-cubes font-dark"></i>
                        <span class="caption-subject bold uppercase"> Data Barang</span>
                    </div>
                    <!-- <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                        </div>
                    </div> -->
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button id="new_add" class="btn sbold green"> Add New
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <!--<li class = "action--view">
                                            <a href="testremotemodal" data-target="#test" data-toggle="modal">
                                            <i class="fa fa-file-pdf-o"></i> Test </a>
                                        </li>!-->
                                        <!-- <li>
                                            <a href="javascript:;" class= "disabled">
                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                        </li> -->
                                        <li>
                                            <a href="<?php echo base_url();?>master/pelangganExcel" target = "_blank">
                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="customer">
                        <thead>
                            <tr>
                                <th> Kode Barang </th>
                                <th> Nama Barang </th>
                                <th> Harga </th>
                                <th><i class = "icon-list "></i></th>
                            </tr>
                        </thead>
                       <tbody></tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>

<div class="modal fade" id="add_new" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Data  Barang Baru</h4>
            </div>
            <div class="modal-body"> 
                <div class="portlet">
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form method="post" class="form-horizontal validate" id = "pelanggan_baru">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Jenis Barang <span class="required"> * </span></label>
                                    <div class="col-md-8">
                                        <select id="goods" name = "jenis_barang" class="form-control select2" data-parsley-required = "true" data-parsley-error-message="Silahkan masukkan Jenis Barang">
                                                    <option></option>
                                                    <?php foreach($jenis as $key => $value){?>
                                                    <option value="<?php echo $value->kode_jenis?>"><?php echo $value->jenis_barang?></option>
                                                    <?php }?>
                                                </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-md-4 control-label">Kode Barang <span class="required"> * </span></label>
                                    <div class="col-md-8">
                                        <input type="text" name = "kode_barang" class="form-control" data-parsley-required = "true" data-parsley-error-message="Silahkan masukan kode barang">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Nama Barang<span class="required"> * </span></label>
                                    <div class="col-md-8">
                                        <input type="text" name = "nama_barang" class="form-control" data-parsley-required = "true" data-parsley-error-message="Silahkan masukan nomor hp">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Harga Satuan</label>
                                    <div class="col-md-8">
                                        <input type="text" name = "harga_satuan" class="form-control">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="submit" name = "submit_btn" value = "true" class="btn green" id =  "btn_submit">Save</button>
            </div>
            </form>
            <!-- END FORM-->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="view" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php base_url();?>/themes/metronics/assets/global/img/loading-spinner-grey.gif" alt="" class="loading">
                <span> &nbsp;&nbsp;Loading... </span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php base_url();?>/themes/metronics/assets/global/img/loading-spinner-grey.gif" alt="" class="loading">
                <span> &nbsp;&nbsp;Loading... </span>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#new_add').click(function(){
            $('#add_new').modal('show');
        });

        //datatables
        $('#customer').dataTable({
            processing: true,
            serverSide: true,
            ajax: {
                "url": "<?php echo base_url();?>master/kode_barang_dt",
                "type": "POST"
            },
            columnDefs: [
                {
                    render: function (data, type, row) {
                        return '<p>'+row.kode_barang+'</p>';
                    },
                    orderable: false,
                    targets: 0
                },
                {
                    render: function (data, type, row) {
                        return '<p>'+row.nama_barang+'</p>';
                    },
                    orderable: false,
                    targets: 1
                },
                {
                    render: function (data, type, row) {
                        return '<p>'+row.harga+'</p>';
                    },
                    orderable: false,
                    targets: 2
                },
                {
                    render: function (data, type, row) {
                        return '<div class="btn-group pull-right"><button class="btn green btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sort-down"></i></button>'+
                            '<ul class="dropdown-menu pull-right"><li><a href="<?php echo base_url();?>master/edit_pelanggan/'+row.id+'"><i class="fa fa-pencil"></i> Edit </a></li>'+
                            '<li><a href="<?php echo base_url();?>master/view_pelanggan/'+row.id+'" data-target="#view" data-toggle="modal"><i class="fa fa-eye"></i> View </a></li>'+
                            '<li><a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a></li></ul></div>';
                    },
                    orderable: false,
                    targets: 3
                },

            ],
            order: [0, "asc"],
            columns: [
                { data: "kode_barang" },
                { data: "nama_barang" },
                { data: "harga" },
                { data: "id"},
            ],
            drawCallback: function ( settings ) {
            }

        });
        
        var message = '<?php echo $this->session->flashdata('message')?>';
        if(message != '') {
            toastr.success(message, 'Berhasil', {timeOut: 5000});
        }
    });
</script>