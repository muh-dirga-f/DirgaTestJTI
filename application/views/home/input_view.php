<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/message.css">

    <title>Home</title>
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
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>/home/output">Output</a>
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
                <h4 class="text-center">Data No Handphone</h4>
            </div>
            <div class="card-body">

                <form id="form-input">
                    <label for="nomor_hp" class="form-label">No Handphone</label>
                    <div class="input-group mb-3">
                        <input type="number" name="nomor_hp" class="form-control" id="nomor_hp" aria-describedby="basic-addon3" max="12">
                    </div>

                    <label for="provider" class="form-label">Provider</label>
                    <div class="input-group mb-3">
                        <select name="provider" class="form-select" aria-label="Silahkan pilih provider">
                            <option disabled selected id="opt-def">Silahkan pilih provider</option>
                            <option value="telkom">Telkom</option>
                            <option value="xl">XL</option>
                            <option value="axis">Axis</option>
                            <option value="tri">Tri</option>
                            <option value="indosat">Indosat</option>
                            <option value="smartfren">Smartfren</option>
                        </select>
                    </div>
                    <input type="button" id="btnSave" class="btn btn-success" value="Save" />
                    <input type="button" id="btnAuto" class="btn btn-primary" value="Auto" />
                </form>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url() ?>public/js/message.js"></script>
    <script src="<?php echo base_url() ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>public/websocket/fancywebsocket.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        //limit input maxlength 12
        $('#nomor_hp').keypress(function(e) {
            if (this.value.length == 12) {
                e.preventDefault();
            }
        });
        $(document).ready(function() {
            var Server;

            Server = new FancyWebSocket('ws://127.0.0.1:9300');
            Server.connect();

            //fungsi tombol save
            $('#btnSave').on('click', function() {
                let form = $('#form-input')[0];
                //validasi inputan
                if (form.nomor_hp.value == '') {
                    swal('Oops...', 'Nomor handphone tidak boleh kosong!', 'error');
                } else if (form.provider.value == 'Silahkan pilih provider') {
                    swal('Oops...', 'Silahkan pilih provider!', 'error');
                } else {
                    //kirim data ke server
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>/api/kontak_simpan",
                        data: new FormData(form),
                        processData: false,
                        contentType: false,
                        success: function(result) {
                            if (result.status == true) {
                                swal("Berhasil!", result.message, "success");
                                Server.send('message', 'notif_success');
                                $('#nomor_hp').val('');
                                $('select[name=provider] #opt-def').prop('selected', 'selected');
                            } else {
                                swal("Error!", "Data gagal disimpan", "error");
                                Server.send('message', 'notif_error');
                            }
                        }
                    });
                }
            });

            //fungsi tombol auto
            $('#btnAuto').on('click', function() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo base_url(); ?>/api/auto",
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        const angka_random = Math.floor(Math.random() * 50);
                        let hasil = response.data[angka_random];
                        console.log(hasil);
                        $('#nomor_hp').val(hasil.nomor_hp);
                        $('select[name=provider] option[value="' + hasil.provider + '"]').prop('selected', 'selected');
                        $('#btnAuto').prop('disabled', true);
                        setTimeout(function() {
                            $('#btnAuto').prop('disabled', false);
                        }, 2000);
                    }
                });
            });
        });
    </script>
</body>

</html>