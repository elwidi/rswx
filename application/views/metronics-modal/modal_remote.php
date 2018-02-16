<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Data Pelanggan</h4>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <p><strong>Nama</strong> : <?php echo $costumer->name;?> </p>
            <p><strong>No. Telepon</strong> : <?php echo $costumer->contact1;?> </p>
            <p><strong>Email</strong> : <?php echo $costumer->contact2;?> </p>
            <p><strong>Alamat</strong> : <?php echo $costumer->address;?> </p>
            <p><strong>DOB</strong> : <?php echo $costumer->dob;?> </p>
            <p><strong>Bergabung Sejak</strong> : <?php echo $costumer->created_date;?> </p>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn default" data-dismiss="modal">Close</button>
    <button type="button" class="btn blue">Save changes</button>
</div>