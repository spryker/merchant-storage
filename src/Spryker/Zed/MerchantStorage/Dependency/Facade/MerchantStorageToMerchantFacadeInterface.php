<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantStorage\Dependency\Facade;

use Generated\Shared\Transfer\MerchantCollectionTransfer;
use Generated\Shared\Transfer\MerchantCriteriaFilterTransfer;

interface MerchantStorageToMerchantFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\MerchantCriteriaFilterTransfer $merchantCriteriaFilterTransfer
     *
     * @return \Generated\Shared\Transfer\MerchantCollectionTransfer
     */
    public function find(MerchantCriteriaFilterTransfer $merchantCriteriaFilterTransfer): MerchantCollectionTransfer;
}
