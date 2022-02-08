<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/message.css">

    <title>Output</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url() ?>/home">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>/home/output">Output</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>/login/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron p-4">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $this->session->userdata('user_data')['profile_picture'] ?>" class="rounded-circle img-thumbnail">
                <h3>Halo, <?php echo $this->session->userdata('user_data')['full_name'] ?></h3>
            </div>
        </div>
    </div>

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
                                        <tbody id="tbody-ganjil"></tbody>
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
                                        <tbody id="tbody-genap"></tbody>
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
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editKontak" tabindex="-1" aria-labelledby="editKontakLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editKontakLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-edit">
                        <label for="id_kontak" class="form-label">Id</label>
                        <div class="input-group mb-3">
                            <input type="number" name="id_kontak" class="form-control" id="id_kontak" aria-describedby="basic-addon3" readonly>
                        </div>

                        <label for="nomorhp" class="form-label">No Handphone</label>
                        <div class="input-group mb-3">
                            <input type="number" name="nomor_hp" class="form-control" id="nomor_hp" aria-describedby="basic-addon3">
                        </div>

                        <label for="provider" class="form-label">Provider</label>
                        <div class="input-group mb-3">
                            <select name="provider" class="form-select" aria-label="Silahkan pilih provider">
                                <option disabled selected>Silahkan pilih provider</option>
                                <option value="telkom">Telkom</option>
                                <option value="xl">XL</option>
                                <option value="tri">Tri</option>
                                <option value="indosat">Indosat</option>
                                <option value="smartfren">Smartfren</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="update" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
    <audio id="audio" src="<?php echo base_url() ?>public/sound/notification.wav"></audio>

    <script src="<?php echo base_url() ?>public/js/message.js"></script>
    <script src="<?php echo base_url() ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>public/websocket/fancywebsocket.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        //inisialisasi edit kontak modal
        var editKontakModal = new bootstrap.Modal(document.getElementById('editKontak'));

        //notification sound
        function play_notification() {
            var audio = document.getElementById("audio");
            audio.play();
        }

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
                            return '<a href="#" data-id="' + data + '" class="btnEdit badge bg-warning text-decoration-none"><i class="fa fa-edit fa-fw"></i> Edit</a> \n\
                            <a href="#"  data-id="' + data + '" class="btnHapus badge bg-danger text-decoration-none"><i class="fa fa-trash fa-fw"></i> Delete</a>';
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
                            return '<a href="#" data-id="' + data + '" class="btnEdit badge bg-warning text-decoration-none"><i class="fa fa-edit fa-fw"></i> Edit</a> \n\
                            <a href="#" data-id="' + data + '" class="btnHapus badge bg-danger text-decoration-none"><i class="fa fa-trash fa-fw"></i> Delete</a>';
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

            function tableUpdate() {
                tbl_ganjil.ajax.reload();
                tbl_genap.ajax.reload();
            }

            //fungsi button edit
            $('#tbody-ganjil').on('click', '.btnEdit', function() {
                console.log($(this).data('id'));
                let id = $(this).data('id');
                $.ajax({
                    url: '<?php echo base_url(); ?>/api/kontak_find/id/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(result) {
                        console.log(result);
                        $('#id_kontak').val(result.data[0].id_kontak);
                        $('#nomor_hp').val(result.data[0].nomor_hp);
                        $('select[name=provider] option[value="' + result.data[0].provider + '"]').attr('selected', 'selected');
                        editKontakModal.show();
                        console.log()
                    }
                });
            });

            $('#tbody-genap').on('click', '.btnEdit', function() {
                console.log($(this).data('id'));
                let id = $(this).data('id');
                $.ajax({
                    url: '<?php echo base_url(); ?>/api/kontak_find/id/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(result) {
                        console.log(result);
                        $('#id_kontak').val(result.data[0].id_kontak);
                        $('#nomor_hp').val(result.data[0].nomor_hp);
                        $('select[name=provider] option[value="' + result.data[0].provider + '"]').attr('selected', 'selected');
                        editKontakModal.show();
                        console.log()
                    }
                });
            });

            //fungsi button hapus
            $('#tbody-ganjil').on('click', '.btnHapus', function() {
                let id = $(this).data('id');
                swal({
                        title: "Apa kamu yakin?",
                        text: "Sekali menghapus, kamu tidak dapat mengembalikan data tersebut!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: '<?php echo base_url(); ?>/api/kontak_delete',
                                type: 'POST',
                                data: {
                                    'id_kontak': id
                                },
                                dataType: 'json',
                                success: function(result) {
                                    swal("Berhasil!", "Data telah dihapus", "success");
                                    tableUpdate();
                                }
                            });
                        } else {
                            swal("Aksi dibatalkan!");
                        }
                    });
            });

            $('#tbody-genap').on('click', '.btnHapus', function() {
                let id = $(this).data('id');
                swal({
                        title: "Apa kamu yakin?",
                        text: "Sekali menghapus, kamu tidak dapat mengembalikan data tersebut!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: '<?php echo base_url(); ?>/api/kontak_delete',
                                type: 'POST',
                                data: {
                                    'id_kontak': id
                                },
                                dataType: 'json',
                                success: function(result) {
                                    swal("Berhasil!", "Data telah dihapus", "success");
                                    tableUpdate();
                                }
                            });
                        } else {
                            swal("Aksi dibatalkan!");
                        }
                    });
            });

            //tombol update
            $('#update').on('click', function() {
                let form = $('#form-edit')[0];
                $.ajax({
                    url: '<?php echo base_url(); ?>/api/kontak_update',
                    type: 'POST',
                    data: new FormData(form),
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        console.log(result);
                        swal('Berhasil', result.message, 'success');
                        tableUpdate();
                        editKontakModal.hide();
                    }
                });
            });

            //script websocket
            var Server;

            Server = new FancyWebSocket('ws://127.0.0.1:9300');

            //tangkap apakah ada action dr form input
            Server.bind('message', function(payload) {
                switch (payload) {
                    case 'notif_success':
                        dhtmlx.message({
                            'text': "Data berhasil ditambahkan " + new Date().toLocaleString(),
                            'expire': 5000
                        });
                        tableUpdate();
                        play_notification();
                        break;
                    case 'notif_error':
                        dhtmlx.message({
                            'text': "Data gagal ditambahkan " + new Date().toLocaleString(),
                            'expire': 5000,
                            'type': 'error',
                        });
                        tableUpdate();
                        play_notification();
                        break;
                }
            });

            Server.connect();
        });
    </script>
</body>

</html>