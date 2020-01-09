<?php

declare(strict_types=1);

namespace VinaiKopp\CurrentCategoryExample\Registry;
use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Catalog\Api\Data\CategoryInterfaceFactory;
/**
 * class CurrentCategory
 */
class CurrentCategory
{
    /**
     * @var CategoryInterface
     */
    private $category;
    /**
     * @var CategoryInterfaceFactory
     */
    private $categoryFactory;

    /**
     * CurrentCategory Constructor
     * @param CategoryInterfaceFactory $categoryFactory
     */
    public function __construct(CategoryInterfaceFactory $categoryFactory)
    {
        $this->categoryFactory = $categoryFactory;
    }
    public function set(CategoryInterface $category): void
    {
        $this->category = $category;
    }
    public function get(): CategoryInterface
    {
        return $this->category ?? $this->createNullCategory();
    }
    private function createNullCategory(): CategoryInterface
    {
        return $this->categoryFactory->create();
    }
}