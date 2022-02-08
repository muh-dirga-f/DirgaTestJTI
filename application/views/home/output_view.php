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
                Output
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ganjil</th>
                                <th scope="col">Genap</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/message.css">
    <script src="<?php echo base_url() ?>public/js/message.js"></script>
    <script src="<?php echo base_url() ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>public/websocket/fancywebsocket.js"></script>
    <script>
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