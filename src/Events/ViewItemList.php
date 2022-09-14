<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Spinbits\GoogleAnalytics4EventsDtoS\Events;

use Spinbits\GoogleAnalytics4EventsDtoS\Item\ItemInterface;
use Spinbits\GoogleAnalytics4EventsDtoS\JsonSerializeTrait;

class ViewItemList extends ItemsContainerEvent implements \JsonSerializable, EventInterface
{
    use JsonSerializeTrait;

    private ?string $item_list_id = null;
    private ?string $item_list_name = null;

    public function getName(): string
    {
        return 'view_item_list';
    }

    public function setItemListId(?string $item_list_id): ViewItemList
    {
        $this->item_list_id = $item_list_id;
        return $this;
    }

    public function setItemListName(?string $item_list_name): ViewItemList
    {
        $this->item_list_name = $item_list_name;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    protected function calculate(ItemInterface $item): void
    {
    }
}
