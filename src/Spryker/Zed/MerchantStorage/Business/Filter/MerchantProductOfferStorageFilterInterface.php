<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantStorage\Business\Filter;

use Generated\Shared\Transfer\ProductOfferCollectionTransfer;

interface MerchantProductOfferStorageFilterInterface
{
    public function filterProductOfferStorages(ProductOfferCollectionTransfer $productOfferCollectionTransfer): ProductOfferCollectionTransfer;
}
