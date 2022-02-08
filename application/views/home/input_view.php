<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <h1>Hello, <?php echo $this->session->userdata('user_data')['full_name'] ?></h1>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Data No Handphone
            </div>
            <div class="card-body">

                <label for="nomorhp" class="form-label">No Handphone</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nomorhp" aria-describedby="basic-addon3">
                </div>

                <label for="provider" class="form-label">Provider</label>
                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option disabled selected>Silahkan pilih provider</option>
                        <option value="telkom">Telkom</option>
                        <option value="xl">XL</option>
                        <option value="tri">Tri</option>
                        <option value="indosat">Indosat</option>
                        <option value="smartfren">Smartfren</option>
                    </select>
                </div>
                <a href="#" class="btn btn-success">Save</a>
                <a href="#" class="btn btn-primary">Auto</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>