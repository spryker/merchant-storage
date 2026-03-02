<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantStorage\Persistence;

use Generated\Shared\Transfer\MerchantStorageTransfer;
use Generated\Shared\Transfer\StoreTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \Spryker\Zed\MerchantStorage\Persistence\MerchantStoragePersistenceFactory getFactory()
 */
class MerchantStorageEntityManager extends AbstractEntityManager implements MerchantStorageEntityManagerInterface
{
    public function saveMerchantStorage(MerchantStorageTransfer $merchantStorageTransfer, StoreTransfer $storeTransfer): MerchantStorageTransfer
    {
        $merchantStorageEntity = $this->getFactory()
            ->createMerchantStorageQuery()
            ->filterByIdMerchant($merchantStorageTransfer->getIdMerchant())
            ->filterByStore($storeTransfer->getName())
            ->findOneOrCreate();

        $merchantStorageEntity->setData($merchantStorageTransfer->toArray());
        $merchantStorageEntity->setStore($storeTransfer->getName());
        $merchantStorageEntity->save();

        return $this->getFactory()
            ->createMerchantStorageMapper()
            ->mapMerchantStorageEntityToMerchantStorageTransfer($merchantStorageEntity, new MerchantStorageTransfer());
    }

    public function deleteMerchantStorage(int $idMerchant, string $storeName): void
    {
        /** @var \Propel\Runtime\Collection\ObjectCollection $merchantStorageCollection */
        $merchantStorageCollection = $this->getFactory()
            ->createMerchantStorageQuery()
            ->filterByIdMerchant($idMerchant)
            ->filterByStore($storeName)
            ->find();

        $merchantStorageCollection->delete();
    }
}
