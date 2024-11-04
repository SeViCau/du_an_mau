<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?? 'Dashboard' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/css/sb-client.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/font/css/all.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/css/nav.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template-->

</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <?php require_once PATH_VIEW . "layouts/partials/header.php" ;?>
        <!-- End Header -->
        <div class="container">
            <!-- Banner -->
            <?php require_once PATH_VIEW . $view . '.php' ;?>
            <!-- End Banner -->

            
        </div>
        <!-- Footer -->
        <?php require_once PATH_VIEW . "layouts/partials/footer.php" ;?>
        <!--  End Footer -->
    </div>
</body>
<script src="<?= BASE_URL ?>assets/client/js/style.js"></script>
<script src="<?= BASE_URL ?>assets/client/js/jquery.min.js"></script>
<script src="<?= BASE_URL ?>assets/client/js/thuvien.js"></script>
</html>