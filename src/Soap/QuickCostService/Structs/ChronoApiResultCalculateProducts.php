<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultCalculateProducts Structs
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiResultCalculateProducts extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The productList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct[]
     */
    protected ?array $productList = null;
    /**
     * Constructor method for resultCalculateProducts
     * @uses ChronoApiResultCalculateProducts::setErrorCode()
     * @uses ChronoApiResultCalculateProducts::setErrorMessage()
     * @uses ChronoApiResultCalculateProducts::setProductList()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct[] $productList
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?array $productList = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setProductList($productList);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get productList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct[]
     */
    public function getProductList(): ?array
    {
        return isset($this->productList) ? $this->productList : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProductList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductListForArrayConstraintsFromSetProductList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultCalculateProductsProductListItem) {
            // validation for constraint: itemType
            if (!$resultCalculateProductsProductListItem instanceof \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct) {
                $invalidValues[] = is_object($resultCalculateProductsProductListItem) ? get_class($resultCalculateProductsProductListItem) : sprintf('%s(%s)', gettype($resultCalculateProductsProductListItem), var_export($resultCalculateProductsProductListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The productList property can only contain items of type \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set productList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct[] $productList
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts
     */
    public function setProductList(?array $productList = null): self
    {
        // validation for constraint: array
        if ('' !== ($productListArrayErrorMessage = self::validateProductListForArrayConstraintsFromSetProductList($productList))) {
            throw new InvalidArgumentException($productListArrayErrorMessage, __LINE__);
        }
        if (is_null($productList) || (is_array($productList) && empty($productList))) {
            unset($this->productList);
        } else {
            $this->productList = $productList;
        }
        
        return $this;
    }
    /**
     * Add item to productList value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct $item
     * @return \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiResultCalculateProducts
     */
    public function addToProductList(\SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct) {
            throw new InvalidArgumentException(sprintf('The productList property can only contain items of type \SengentoBV\ChronopostSdk\Soap\QuickCostService\Structs\ChronoApiProduct, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->productList[] = $item;
        
        return $this;
    }
}
