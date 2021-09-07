<?php require('httpful.phar'); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="image/x-icon" href="/ping-favicon.png" rel="shortcut icon">
    <title>Credit Bureau</title>
</head>

<body>

    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
        <a class="navbar-brand mb-1" href="/member/">
            <img src="/ping-logo.svg" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-4">
                <li class="nav-item">
                    <a class="nav-link" href="/member/report/">Credit Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/member/score/">Credit Score</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/member/consent/">Consents</a>
                </li>
            </ul>
            <ul class="navbar-nav text-right mt-4">
                <li class="nav-item">
                    <a href="/pa/oidc/logout" class="btn btn-secondary ml-2">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /navigation -->

    <div class="container-fluid" style="height:200px; background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://via.placeholder.com/1600x1024); background-repeat:no-repeat; background-position:center top;">
        <div class="container" style="padding: 80px 0px">
            <h1 class="display-4 text-white text-right">Credit Report</h1>
        </div>
    </div>

<?php

$curl = curl_init();

$url = "https://mdeller-authorize-pingauthorize.ping-devops.com/credit-report";
// $accessToken = "eyJhbGciOiJSUzI1NiIsImtpZCI6ImsxIiwicGkuYXRtIjoiMmNucCJ9.eyJzY29wZSI6Im9wZW5pZCBhZGRyZXNzIGVtYWlsIHBob25lIHByb2ZpbGUiLCJjbGllbnRfaWQiOiJQaW5nQWNjZXNzIiwiVXNlcm5hbWUiOiJhZDU1YTM0YS03NjNmLTM1OGYtOTNmOS1kYTg2ZjllY2Q5ZTQiLCJPcmdOYW1lIjoiUGluZ0lkZW50aXR5IiwiY3VzdG9tZXJOdW1iZXIiOiI5OTlYWDAwMDAwIiwiZXhwIjoxNjMxMDIzNjk2fQ.QTPMWCev9irDM1jeXSJCdGCgOlyjpkfIyBaWWpfbrnQNb2l9xXadmtn0m9CXHRl8U-v3uWPAMPStk_zxHicX8E9yd0VtSJDDKLUFq5DZ2rjuacjdXJMQztBOr8pL4diJREdr1noSTCJoLRyTNP_frpqT_1OU5wvX-CArvBBnabOv_b650Uwv99IHrxpBtc48awp0QaliWQ7qAglXtVy9GjF0fqNpCJSPKGVpYnUZwpBN8_B6lrV3qQPZZQnuRhEMkSk-4WyD0elu_RKkVVGPNMq38YLnb1MZxvkC43-pEkZkh-I0O2qctYLyqHPjCN6RomyspPg7U4IaNOIpK1Lqww";
$accessToken = $_SERVER['HTTP_X_PA_TOKEN'];


$response = \Httpful\Request::get($url)
->addHeader('Authorization', 'Bearer ' . $accessToken)
->sendsJson()
->send();

$jsonData = json_decode($response);

echo "<pre>" . json_encode($jsonData, JSON_PRETTY_PRINT) . "</pre>";

?>

    <!-- footer -->
    <nav class="navbar navbar-light bg-light mt-5">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Terms of Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Privacy</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>