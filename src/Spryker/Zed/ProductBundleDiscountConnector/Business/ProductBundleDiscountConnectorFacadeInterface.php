<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductBundleDiscountConnector\Business;

use Generated\Shared\Transfer\ClauseTransfer;
use Generated\Shared\Transfer\QuoteTransfer;

interface ProductBundleDiscountConnectorFacadeInterface
{
    /**
     * Specification:
     * - Loops through bundle product in the cart.
     * - Looks for all attributes for bundled product.
     * - Creates `DiscountableItem` transfer for all matching bundle items, skip product otherwise.
     * - Expands discountable item collection with discountable product bundle items.
     * - Returns expanded discountable item collection.
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\DiscountableItemTransfer> $discountableItems
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     * @param \Generated\Shared\Transfer\ClauseTransfer $clauseTransfer
     *
     * @return array<\Generated\Shared\Transfer\DiscountableItemTransfer>
     */
    public function expandProductAttributeDiscountableItemCollectionWithBundledProducts(
        array $discountableItems,
        QuoteTransfer $quoteTransfer,
        ClauseTransfer $clauseTransfer
    ): array;
}
