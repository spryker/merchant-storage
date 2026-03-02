<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantStorage\Persistence;

use Generated\Shared\Transfer\MerchantStorageTransfer;
use Generated\Shared\Transfer\StoreTransfer;

interface MerchantStorageEntityManagerInterface
{
    public function saveMerchantStorage(MerchantStorageTransfer $merchantStorageTransfer, StoreTransfer $storeTransfer): MerchantStorageTransfer;

    public function deleteMerchantStorage(int $idMerchant, string $storeName): void;
}
