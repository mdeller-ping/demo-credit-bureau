<?php
    header('Content-Type: application/json');

    $now = date("mdY");

    $json = new \stdClass();

    // $json = json_encode(array(
    //     "id" => 5,
    //     "username" => "jsmith",
    //     "description" => "Has a registered ID number of '123-45-6789'.",
    //     "secrets" => array(
    //         "description" => "Has an SSN of '987-65-4321'."
    //     )
    // ));

    $json = json_encode(array(
        "status" => "completed",
        "consumers" => array(
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
            "subjectSocialNum" => "666-79-5307",
            "birthDate" => "07281989",
            "fraudVictimIndicator" => array(
                "code" => "V",
                "description" => "Fraud Victim Initial Alert"
            ),
            "addresses" => array(
                array(
                    "addressType" => "current",
                    "houseNumber" => "7249",
                    "streetName" => "PAJJ ZAFW",
                    "streetType" => "LN",
                    "cityName" => "HUMBLE",
                    "stateAbbr" => "TX",
                    "zipCode" => "77396",
                    "dateFirstReported" => "12002018",
                    "addressLine1" => "7249 PAJJ ZAFW LN"
                ),
                array(
                    "addressType" => "former",
                    "houseNumber" => "3981",
                    "streetName" => "OVNYH",
                    "streetType" => "RD",
                    "cityName" => "HOUSTON",
                    "stateAbbr" => "TX",
                    "zipCode" => "77053",
                    "dateFirstReported" => "12002018",
                    "addressLine1" => "7249 PAJJ ZAFW LN"                    
                )
            ),
            "employments" => array(
                array(
                    "identifier" => "current",
                    "occupation" => "HFIP JFICFY",
                    "employer" => "IAX"
                )
            ),
            "bankruptcies" => array(
                array(
                    "type" => "I",
                    "filer" => "I",
                    "industryCode" => "VF",
                    "currentIntentOrDispositionCode" => array(
                        "code" => "k",
                        "description" => "DISMSD/CLSD CH13"
                    )
                )
            ),
            "trades" => array(
                array(
                    "accountNumber" => "41479992245654",
                    "monthsReviewd" => 18,
                    "customerName" => "HOUSTON FINANCE"
                ),
                array(
                    "accountNumber" => "6879456442616",
                    "monthsReviewd" => 5,
                    "customerName" => "BANK OF WELLS"
                ),
                array(
                    "accountNumber" => "795465462448",
                    "monthsReviewd" => 24,
                    "customerName" => "WESTERN SHAMROCK"
                ),
                array(
                    "accountNumber" => "468798795462624",
                    "monthsReviewd" => 18,
                    "customerName" => "TOWN FUEL"
                )
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