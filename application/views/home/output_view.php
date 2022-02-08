<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Output</title>
</head>

<body>
    <h1>Hello, <?php echo $this->session->userdata('user_data')['full_name'] ?></h1>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Output</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Ganjil
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table-ganjil" class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center" width="50px">#</th>
                                                <th scope="col">Nomor Handphone</th>
                                                <th scope="col">Provider</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th scope="col" class="text-center" width="50px">#</th>
                                                <th scope="col">Nomor Handphone</th>
                                                <th scope="col">Provider</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Genap
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table-genap" class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center" width="50px">#</th>
                                                <th scope="col">Nomor Handphone</th>
                                                <th scope="col">Provider</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-center">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">2</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/message.css">
    <script src="<?php echo base_url() ?>public/js/message.js"></script>
    <script src="<?php echo base_url() ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>public/websocket/fancywebsocket.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        //script datatables
        $(document).ready(function() {
            let tbl_ganjil = $('#table-ganjil').DataTable({
                "processing": true,
                "autoWidth": false,
                "ajax": {
                    "url": "<?php echo base_url() ?>/api/kontak_ganjil",
                    "type": "GET"
                },
                "order": [
                    [1, 'asc']
                ],
                "columns": [{
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {
                        "data": "nomor_hp"
                    },
                    {
                        "data": "provider"
                    },
                    {
                        "data": "id_kontak",
                        "sClass": "text-center",
                        "orderable": false,
                        "mRender": function(data) {
                            return '<a href="javascript:btnEdit(' + data + ');" class="badge bg-warning text-decoration-none"><i class="fa fa-edit fa-fw"></i> Edit</a> \n\
                            <a href="javascript:hapus(' + data + ');" class="badge bg-danger text-decoration-none"><i class="fa fa-trash fa-fw"></i> Delete</a>';
                        }
                    }
                ],
            });
            tbl_ganjil.on('order.dt search.dt', function() {
                tbl_ganjil.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();

            let tbl_genap = $('#table-genap').DataTable({
                "processing": true,
                "autoWidth": false,
                "ajax": {
                    "url": "<?php echo base_url() ?>/api/kontak_genap",
                    "type": "GET"
                },
                "order": [
                    [1, 'asc']
                ],
                "columns": [{
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {
                        "data": "nomor_hp"
                    },
                    {
                        "data": "provider"
                    },
                    {
                        "data": "id_kontak",
                        "sClass": "text-center",
                        "orderable": false,
                        "mRender": function(data) {
                            return '<a href="javascript:btnEdit(' + data + ');" class="badge bg-warning text-decoration-none"><i class="fa fa-edit fa-fw"></i> Edit</a> \n\
                            <a href="javascript:hapus(' + data + ');" class="badge bg-danger text-decoration-none"><i class="fa fa-trash fa-fw"></i> Delete</a>';
                        }
                    }
                ],
            });
            tbl_genap.on('order.dt search.dt', function() {
                tbl_genap.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
        });
        </script>
        <script>
        //script web-socket
        var Server;

        Server = new FancyWebSocket('ws://127.0.0.1:9300');

        //tangkap apakah ada action dr client manapun
        Server.bind('message', function(payload) {
            switch (payload) {
                case 'tobingmsg':
                    dhtmlx.message({
                        'text': "From other at " + new Date().toLocaleString(),
                        'expire': -1
                    });
                    break;
                case 'tobingerror':
                    dhtmlx.message({
                        'text': "From other at " + new Date().toLocaleString(),
                        'expire': -1,
                        'type': 'error',
                    });
                    break;
            }
        });

        Server.connect();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>