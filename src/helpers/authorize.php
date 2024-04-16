<?php


namespace Ziqx\FabexApi\Helpers;


class AuthorizeAPI
{

    public static function authorizeAPIKey($request, $secret, $messages=[])
    {
        $missingMessage = isset($messages['missing']) ? $messages['missing'] : 'api_missing';
        $invalidMessage = isset($messages['invalid']) ? $messages['invalid'] : 'api_invalid';
        $validMessage = isset($messages['valid']) ? $messages['valid'] : 'api_valid';
        
        $headerkey = $request->header('X-API-KEY');
        header('Content-Type: application/json');

        if (!$headerkey) {
            http_response_code(401);
            echo json_encode([
                'code' => 1,
                'message' => $missingMessage
            ]);
            exit;
        }

        $apiKey = str_replace('X-Api-Key: ', '', $headerkey);


        if ($apiKey !== $secret) {
            http_response_code(401);
            echo json_encode([
                'code' => 1,
                'message' => $invalidMessage
            ]);
            exit;
        }

        return [
            'code' => 0,
            'message' => $validMessage
        ];
    }
}
