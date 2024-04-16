<?php

namespace Ziqx\FabexApi\Helpers;

class BodyHelper
{
    public function generateBody($data)
    {
        return json_encode($data);
    }
}

?>
