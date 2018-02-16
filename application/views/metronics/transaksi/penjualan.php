<div class="page-content">
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo base_url();?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Pelanggan</span>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-basket-loaded font-dark"></i>
                        <span class="caption-subject bold uppercase">Transaksi</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-9">
                                <form class="form-horizontal validate" id = "pelanggan_baru_form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Kode Barang</label>
                                            <div class="col-md-8">
                                                <select id="goods" name = "kode_barang" class="form-control select2" data-parsley-required = "true" data-parsley-error-message="Silahkan masukkan kode barang">
                                                    <option></option>
                                                    <?php foreach($goods as $key => $value){?>
                                                    <option value="<?php echo $value->kode_barang?>" <?php echo ($value->stock > 0 ? '' : 'disabled="disabled"  ')?>><?php echo $value->kode_barang?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Nama Barang</label>
                                            <div class="col-md-8">
                                                <input type="text" id = "nama_barang" class="form-control" readonly="true" name = "nama_barang">
                                                <input type = "hidden" name = "harga" id = "harga">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Jumlah</label>
                                            <div class="col-md-8">
                                                <input type="number" min = "1" name = "qty" class="form-control" data-parsley-required = "true" data-parsley-error-message="Silahkan masukkan jumlah barang">
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button id="new_add" class="btn sbold green"> Tambah Item
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="shopping_chart">
                        <thead>
                            <tr>
                                <th> Kode </th>
                                <th> Nama </th>
                                <th> Harga </th>
                                <th> Jumlah </th>
                                <th> Total </th>
                                <th><span class = "glyphicon glyphicon-chevron-down"></i></th>
                            </tr>
                        </thead>
                       <tbody>
                       </tbody>
                       <tfoot>
                           <tr>
                                <th colspan = "3">Total</th>
                                <th><div id = "qty_total"></div></th>
                                <th colspan = "2"> <div id = "harga_total"></div> </th>
                            </tr>
                       </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#goods').on("change", function(e) {
            var kode = $(this).val();
            $.ajax({
                url: '<?php echo base_url();?>' + '/transaction/getKodeBarang',
                type : 'POST',
                data : {kode_barang : kode},
                dataType:'json',
                success : function(res) {
                    if(res.status == 'success'){
                        $('#nama_barang').val(res.data.nama_barang);
                        $('#harga').val(res.data.harga);
                    }
                }
            });
        });

        function deleteRow(buttonElement){
            $(buttonElement).parent().parent().parent().remove();
        }
        
        $(document).on("click", ".fa-trash-o", function(){  
            deleteRow(this);
        });
        var qty = 0;
        var total = 0;

        var numGoods=$('#shopping_chart tbody').children().length;

        $("#new_add").click(function(){
            var form = $('#pelanggan_baru_form');
            qty += parseInt($("[name='qty']").val());
            total += parseInt($('#harga').val()) * parseInt($("[name='qty']").val()) ;
            $.ajax({
                url: '<?php echo base_url();?>' + '/transaction/saveTmp',
                type : 'POST',
                data : form.serialize(),
                dataType:'json',
                success : function(res) {
                    addnewBarang();
                    $('#qty_total').html("<p>"+qty+"</p>");
                    $('#harga_total').html("<p>"+total+"</p>");
                }
            });
            return false;
        });

        function addnewBarang(){
            numGoods++;
            var kode_barang = $('#goods').val();
            var nama_barang = $("[name='nama_barang']").val();
            var qty = $("[name='qty']").val();
            var harga = $('#harga').val();
            // console.log(kode_barang);
            // console.log(qty);
            var row='<tr>';
                row+='<td>'+kode_barang+'</td>';
                row+='<td>'+nama_barang+'</td>';
                row+='<td>'+harga+'</td>';
                row+= '<td>'+qty+'</td>'
                row+='<td>'+harga*qty+'</td>';
                row+= '<td><a><i class="fa fa-trash-o"></a></td>';
            if(kode_barang!='' && qty != ''){
                $("#shopping_chart tbody").append(row);   
            } else {
                return false;
            }
        }
    });


</script>