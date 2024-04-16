<?php

namespace Ziqx\FabexApi\Helpers;

class BodyHelper
{
    public static function generateBody($data)
    {
        return json_encode($data);
    }
}

?>
