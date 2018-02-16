<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Data Pelanggan</h4>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <table class = "table table-borderless">
                <tr>
                    <td>
                        <strong>Nama</strong>
                    </td>
                    <td>
                        : <?php echo $costumer->name;?>
                    </td>                
                </tr>
                <tr>
                    <td>
                        <strong>No. Telepon</strong>
                    </td>
                    <td>
                        : <?php echo $costumer->contact1;?>
                    </td>                
                </tr>
                <tr>
                    <td>
                        <strong>Email</strong>
                    </td>
                    <td>
                        : <?php echo $costumer->contact2;?>
                    </td>                
                </tr>
                <tr>
                    <td>
                        <strong>Alamat</strong>
                    </td>
                    <td>
                        : <?php echo $costumer->address;?>
                    </td>                
                </tr>
                <tr>
                    <td>
                        <strong>DOB</strong>
                    </td>
                    <td>
                        : <?php echo $costumer->dob;?>
                    </td>                
                </tr>
                <tr>
                    <td>
                        <strong>Bergabung Sejak</strong>
                    </td>
                    <td>
                        : <?php echo $costumer->created_date;?>
                    </td>                
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn default" data-dismiss="modal">Close</button>
</div>