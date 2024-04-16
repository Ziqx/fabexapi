<?php

namespace Ziqx\FabexApi\Helpers;


class AuthToken{
    function getAuthJWTToken($request, $missingMessage="token_missing", $invalidMessage="token_invalid")
{

    header('Content-Type: application/json');
    $authorization = $request->getHeaderLine('Authorization');

    if ($authorization == null) {
        http_response_code(401);
        echo json_encode([
            'code' => 1,
            'message' => $missingMessage
        ]);
        exit;
    }

    $token = explode(' ', $authorization)[1];


    if ($token == null) {
        http_response_code(401);
        echo json_encode([
            'code' => 1,
            'message' => $invalidMessage
        ]);
        exit;
    }

    return $token;
}
}


?>