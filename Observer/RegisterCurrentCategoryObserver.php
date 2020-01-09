<?php
declare(strict_types=1);

namespace VinaiKopp\CurrentCategoryExample\Observer;

use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Framework\Event\Observer as Event;
use Magento\Framework\Event\ObserverInterface;
use VinaiKopp\CurrentCategoryExample\Registry\CurrentCategory;
/**
 * Class RegisterCurrentCategoryObserver
 */
class RegisterCurrentCategoryObserver implements ObserverInterface
{
    /**
     * @var CurrentCategory
     */
    private $currentCategory;

    /**
     * RegisterCurrentCategoryObserver constructor.
     * @param CurrentCategory $currentCategory
     */
    public function __construct(CurrentCategory $currentCategory)
    {
        $this->currentCategory = $currentCategory;
    }

    /**
     * @param Event $event
     */
    public function execute(Event $event)
    {
        /** @var CategoryInterface $category */
        $category = $event->getData('category');
        $this->currentCategory->set($category);
    }
}