<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Spinbits\SyliusGoogleAnalytics4Plugin\Unit\Dto;

use Spinbits\GoogleAnalytics4EventsDtoS\Item\Item;
use Spinbits\GoogleAnalytics4EventsDtoS\Events\ItemsContainerEvent;
use PHPUnit\Framework\TestCase;

class ItemsContainerEventTest extends TestCase
{
    /** @var ItemsContainerEvent */
    private $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new ItemsContainerEvent();
    }

    /** @test */
    public function testAddItem()
    {
        $item = new Item('id', 'name', 2.50, 'USD');
        $item->setDiscount(0.7);

        $this->sut->addItem($item);
        $this->sut->addItem($item);

        $result = $this->sut->jsonSerialize();

        $this->assertSame('USD', $result['currency']);
        $this->assertSame(3.6, (float) $result['value']);
    }
}
