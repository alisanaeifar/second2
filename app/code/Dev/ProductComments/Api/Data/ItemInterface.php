<?php

namespace Dev\ProductComments\Api\Data;

interface ItemInterface
{
    /**
     * @return string
     */
    public function getComment();
    /**
     * @return string|null
     */
}
