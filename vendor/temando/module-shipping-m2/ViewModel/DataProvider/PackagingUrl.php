<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */
namespace Temando\Shipping\ViewModel\DataProvider;

use Magento\Framework\UrlInterface;
use Temando\Shipping\Model\PackagingInterface;

/**
 * Packaging URL provider
 *
 * @package  Temando\Shipping\ViewModel
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.temando.com/
 */
class PackagingUrl implements EntityUrlInterface
{
    /**
     * Url Builder
     *
     * @var UrlInterface
     */
    private $urlBuilder;

    /**
     * PackagingUrl constructor.
     * @param UrlInterface $urlBuilder
     */
    public function __construct(UrlInterface $urlBuilder)
    {
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * @return string
     */
    public function getNewActionUrl(): string
    {
        return $this->urlBuilder->getUrl('temando/configuration_packaging/new');
    }

    /**
     * @return string
     */
    public function getListActionUrl(): string
    {
        return $this->urlBuilder->getUrl('temando/configuration_packaging/index');
    }

    /**
     * @param mixed[] $data Item data to pick entity identifier.
     * @return string
     */
    public function getViewActionUrl(array $data): string
    {
        return '';
    }

    /**
     * @param mixed[] $data Item data to pick entity identifier.
     * @return string
     */
    public function getEditActionUrl(array $data): string
    {
        return $this->urlBuilder->getUrl('temando/configuration_packaging/edit', [
            PackagingInterface::PACKAGING_ID => $data[PackagingInterface::PACKAGING_ID],
        ]);
    }

    /**
     * @param mixed[] $data Item data for the implementer to pick entity identifier.
     * @return string
     */
    public function getDeleteActionUrl(array $data): string
    {
        return $this->urlBuilder->getUrl('temando/configuration_packaging/delete', [
            PackagingInterface::PACKAGING_ID => $data[PackagingInterface::PACKAGING_ID]
        ]);
    }
}
