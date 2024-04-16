<?php


namespace Ziqx\FabexApi\Helpers;


class AuthorizeAPI
{

    public function authorizeAPIKey($request, $secret)
    {
        $headerkey = $request->header('X-API-KEY');
        header('Content-Type: application/json');

        if (!$headerkey) {
            http_response_code(401);
            echo json_encode([
                'code' => 1,
                'message' => 'key_api_missing'
            ]);
            exit;
        }

        $apiKey = str_replace('X-Api-Key: ', '', $headerkey);


        if ($apiKey !== $secret) {
            http_response_code(401);
            echo json_encode([
                'code' => 1,
                'message' => 'key_api_invalid'
            ]);
            exit;
        }

        return [
            'code' => 0,
            'message' => 'key_api_valid'
        ];
    }
}
