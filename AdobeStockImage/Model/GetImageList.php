<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\AdobeStockImage\Model;

use Magento\AdobeStockAssetApi\Api\GetAssetListInterface;
use Magento\AdobeStockImageApi\Api\GetImageListInterface;
use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Api\Search\SearchCriteriaInterface;

/**
 * Class GetImageList
 */
class GetImageList implements GetImageListInterface
{
    /**
     * @var GetAssetListInterface
     */
    private $getAssetList;

    /**
     * GetImageList constructor.
     * @param GetAssetListInterface $getAssetList
     */
    public function __construct(
        GetAssetListInterface $getAssetList
    ) {
        $this->getAssetList = $getAssetList;
    }

    /**
     * @inheritdoc
     */
    public function execute(SearchCriteriaInterface $searchCriteria): SearchResultInterface
    {
        return $this->getAssetList->execute($searchCriteria);
    }
}
