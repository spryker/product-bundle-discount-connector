<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductBundleDiscountConnector\Business\DecisionRule;

use Generated\Shared\Transfer\ClauseTransfer;
use Generated\Shared\Transfer\ItemTransfer;
use Generated\Shared\Transfer\QuoteTransfer;

interface ProductBundleAttributeDecisionRuleInterface
{
    public function isSatisfiedBy(QuoteTransfer $quoteTransfer, ItemTransfer $currentItemTransfer, ClauseTransfer $clauseTransfer): bool;
}
