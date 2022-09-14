<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Spinbits\GoogleAnalytics4EventsDtoS\Events;

use Spinbits\GoogleAnalytics4EventsDtoS\Item\Item;
use Spinbits\GoogleAnalytics4EventsDtoS\Item\ItemInterface;
use Spinbits\GoogleAnalytics4EventsDtoS\JsonSerializeTrait;
use Spinbits\GoogleAnalytics4EventsDtoS\Item\PromotionItem;

class SelectPromotion extends ItemsContainerEvent implements EventInterface
{
    use JsonSerializeTrait;

    private ?string $creative_name = null;
    private ?string $creative_slot = null;
    private ?string $location_id = null;
    private ?string $promotion_id = null;
    private ?string  $promotion_name = null;

    public function getName(): string
    {
        return 'select_promotion';
    }

    public function setCreativeName(?string $creative_name): SelectPromotion
    {
        $this->creative_name = $creative_name;
        return $this;
    }

    public function setCreativeSlot(?string $creative_slot): SelectPromotion
    {
        $this->creative_slot = $creative_slot;
        return $this;
    }

    public function setLocationId(?string $location_id): SelectPromotion
    {
        $this->location_id = $location_id;
        return $this;
    }

    public function setPromotionId(?string $promotion_id): SelectPromotion
    {
        $this->promotion_id = $promotion_id;
        return $this;
    }

    public function setPromotionName(?string $promotion_name): SelectPromotion
    {
        $this->promotion_name = $promotion_name;
        return $this;
    }

    protected function calculate(ItemInterface $item): void
    {
    }
}
