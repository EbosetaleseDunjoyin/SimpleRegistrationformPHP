<?php
require_once 'register.php'

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Naxum Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="bg-dark  ">
    <main>
        <div class="container my-5 ">
            <div class="row">
                <h3 class="text-center text-light">Registration</h3>
            </div>
            <div class="row">
                <h4 class="text-center text-light"> <?php echo $statusMsg ?> </h4>
            </div>
            <div class="row my-5">
                <div class="form-data">
                    <form method="post" enctype="multipart/form-data">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" placeholder="name" required>
                            <label>Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="birthdate" placeholder="Birthdate" required>
                            <label>Birthdate</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="input your address" name="address" style="height: 100px" required></textarea>
                            <label>Address</label>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="credit_card" placeholder="Credit" required>
                                    <label>Credit card number</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-floating mb-3">
                                    <input type="month" class="form-control" name="expiration" placeholder="Expiration-Date" required>
                                    <label>Expiration-Date (mm/yy)</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="cvv" max='4' placeholder="cvv" required>
                                    <label>CVV (4-digits)</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label text-light">Profile Picture</label>
                            <input class="form-control" type="file" id="formFile" accept="image/*" name="image">
                        </div>

                        <button type="submit" class=" btn btn-primary  btn-lg" name="submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>