 <div class="section">
    <!--DataTables example-->
    <div id="table-datatables">
        <div class="row">
            <div class="col s12 m12">
                <table id="data-table-user" class="responsive-table display" cellspacing="0">
                    <thead>
                        <th>No</th>
                        <th>User</th>
                        <th>Nama</th>
                        <th>Bagian</th>
                        <th>Level</th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    <br>
    <div class="divider"></div> 
</div>


<script type="text/javascript">
    $(document).ready(function(){

        var table = $('#data-table-user').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "<?php echo base_url();?>user/user_dataTable",
                    "type": "POST"
                },
                columnDefs: [
                    {
                        render: function (data, type, row) {
                            return '<p>'+row.no+'</p>';
                        },
                        orderable: false,
                        targets: 0
                    },
                    {
                        render: function (data, type, row) {
                            return '<p>'+row.User+'</p>';
                        },
                        orderable: false,
                        targets: 1
                    },
                    {
                        render: function (data, type, row) {
                            return '<p>'+row.Nama+'</p>';
                        },
                        orderable: false,
                        targets: 2
                    },
                    {
                        render: function (data, type, row) {
                            return '<p>'+row.NamaBagian+'</p>';
                        },
                        orderable: false,
                        targets: 3
                    },
                    {
                        render: function (data, type, row) {
                            return '<p>'+row.Level+'</p>';
                        },
                        orderable: false,
                        targets: 4
                    },

                ],
                order: [0, "asc"],
                columns: [
                    { data: "User" },
                    { data: "Nama" },
                    { data: "Level" },
                    { data: "NamaBagian"},
                    { data: "id"},
                ],
                drawCallback: function ( settings ) {
                }

        });
    });
</script>