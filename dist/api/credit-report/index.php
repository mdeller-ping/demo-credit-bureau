<?php
    header('Content-Type: application/json');

    $now = date("mdY");

    $json = new \stdClass();

    $json = json_encode(array(
        "status" => "completed",
        "consumers" => array(
            "USConsumerCreditReport" => array(
                "identifier" => "Individual Report 1",
                "customerNumber" => "999XX00000",
                "consumerReferralCode" => "300",
                "multipleReportIndicator" => false,
                "hitCode" => array(
                    "code" => 1,
                    "description" => "hit"
                ),
                "fileSinceDate" => "09012002",
                "lastActivityDate" => "07072020",
                "reportDate" => $now,
                "subjectName" => array(
                    "firstName" => "SHEMICA",
                    "lastName" => "XXSHJF",
                    "middleName" => "FAYE"
                ),
                "subjectSocialNum" => "666795307",
                "birthDate" => "07281989"
            )
        ),
        "links" => array(
            "identifier" => "Individual Report 1",
            "type" => "GET",
            "href" => "/business/consumer-credit/v1/reports/credit-report/676e3685-87d8-9a08-0404-0e497fce27a6"
        )
     ));

    echo $json;

?>