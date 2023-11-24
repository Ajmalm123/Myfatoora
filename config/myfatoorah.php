<?php

return [
    /**
     * API Token Key (string)
     * Accepted value:
     * Live Token: https://myfatoorah.readme.io/docs/live-token
     * Test Token: https://myfatoorah.readme.io/docs/test-token
     */
    'api_key' => 'oOWVQI3Fwkaa7SwjpAnCsBZa2kHTmW5DxFenWTuwgteEiklVe-vBJkrKGibj_EX38Lgy6Mb_IcILFKS9QemO-gJnCm1QpGeK01PHrwqTXikWXtkGqpg0LpXhEPmg4yEbrI8GCmqOmKlBOZalYwZCSUQiAnaGxLIaxBnGxYlTDaMNWDB0Bikv8iSS1c6untEbdglsDz1woOXLtYLzS24WHHAPfksu9P3gu9W3c3p88BvH0OXsmojp4TC225LGl_h6xAVBHyBBR2uyXjcVfI4wczwtRglxYPVVxmENkeoIKbCe8QPGW4Lb1-EPjiCVgdn7GJ6CarGE9XfbwBL3D0TVplerrcJVEuZ1hRM33wXkGfEaqUvACAUK_HDrZIgO-O7z7Cl2y3w7CI1HW50DJrsr6uslNta4o-xDlXrPnnNFO_Ew60wyQYTYAuZyJQbQM-fWhVmVUL1FduMPDwZxh9frjIKfYmSnhYYfKvHCuAquIi-PNmRdTM4daz-baTKTailPUob8BcHe8HmPPnOSgOcsmTI_kx2vAB4GUpZTy98m7m05fB929vvM38j07DVrVJycpJZTmXJPd9L4JzwLqUH4spudsdXCEv4-k1apFBUa4LdYi0mUR4O9eNhORDAvg-QR_8q9McgOC699UsXBMPNcy5VtiqTEPgLyxQ-R6UEDhRXux5KQkUR1WKj3KAO9tNJJqu3hMj9xiDlek0DCaKRKUtQ8v0g',
    /**
     * Test Mode (boolean)
     * Accepted value: true for the test mode or false for the live mode
     */
    'test_mode' => false,
    /**
     * Country ISO Code (string)
     * Accepted value: KWT, SAU, ARE, QAT, BHR, OMN, JOD, or EGY.
     */
    'country_iso' => 'SAU',
    /**
     * Save card (boolean)
     * Accepted value: true if you want to enable save card options.
     * You should contact your account manager to enable this feature in your MyFatoorah account as well.
     */
    'save_card' => true,
    /**
     * Webhook secret key (string)
     * Enable webhook on your MyFatoorah account setting then paste the secret key here.
     * The webhook link is: https://{example.com}/myfatoorah/webhook
     */
    'webhook_secret_key' => '',
    /**
     * Register Apple Pay (boolean)
     * Set it to true to show the Apple Pay on the checkout page.
     * First, verify your domain with Apple Pay before you set it to true.
     * You can either follow the steps here: https://docs.myfatoorah.com/docs/apple-pay#verify-your-domain-with-apple-pay or contact the MyFatoorah support team (tech@myfatoorah.com).
     */
    'register_apple_pay' => true
];
