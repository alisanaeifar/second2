<?php

namespace Dev\ProductComments\Api;

interface ItemRepositoryInterface
{
    /**
     * @return \Dev\ProductComments\Api\Data\ItemInterface[]
     */
    public function getList();
}
