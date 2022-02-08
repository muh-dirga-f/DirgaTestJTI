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
    <h1>Hello, <?php echo $this->session->userdata('user_data')['full_name'] ?></h1>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Data No Handphone</h4>
            </div>
            <div class="card-body">

                <form id="form-input">
                    <label for="nomorhp" class="form-label">No Handphone</label>
                    <div class="input-group mb-3">
                        <input type="number" name="nomor_hp" class="form-control" id="nomorhp" aria-describedby="basic-addon3">
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
                    <input type="button" id="btnSave" class="btn btn-success" value="Save" />
                    <input type="button" class="btn btn-primary" value="Auto" />
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
        var Server;

        Server = new FancyWebSocket('ws://127.0.0.1:9300');
        Server.connect();

        //fungsi tombol save
        $('#btnSave').on('click', function() {
            let form = $('#form-input')[0];
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>/api/kontak_simpan",
                data: new FormData(form),
                processData: false,
                contentType: false,
                success: function(result) {
                    console.log(result);
                    if (result.status == 'success') {
                        swal("Berhasil!", "Data berhasil disimpan", "success");
                        Server.send('message', 'notif_success');
                    } else {
                        swal("Error!", "Data gagal disimpan", "error");
                        Server.send('message', 'notif_success');
                    }
                }
            });
        });
    </script>
</body>

</html>