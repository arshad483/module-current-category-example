<?php

declare(strict_types=1);

namespace VinaiKopp\CurrentCategoryExample\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use VinaiKopp\CurrentCategoryExample\Registry\CurrentCategory;

/**
 * class CurrentCategoryViewModel
 */
class CurrentCategoryExampleViewModel implements ArgumentInterface
{
    /**
     * @var CurrentCategory
     */
    private $currentCategory;
    /**
     * constructor CurrentCategoryViewModel
     * @param CurrentCategory $currentCategory
     */
    public function __construct(CurrentCategory $currentCategory)
    {
        $this->currentCategory = $currentCategory;
    }
    public function getCategoryId(): string
    {
        return (string) $this->currentCategory->get()->getId();
    }

    public function getCategoryName(): string
    {
        return (string) $this->currentCategory->get()->getName();
    }
}