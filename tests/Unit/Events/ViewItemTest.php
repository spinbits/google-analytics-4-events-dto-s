<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Spinbits\SyliusGoogleAnalytics4Plugin\Unit\Dto\Events;

use Spinbits\GoogleAnalytics4EventsDtoS\Events\ViewItem;
use PHPUnit\Framework\TestCase;
use Spinbits\GoogleAnalytics4EventsDtoS\Item;
use Spinbits\GoogleAnalytics4EventsDtoS\Item\ItemInterface;

class ViewItemTest extends TestCase
{
    /** @var ViewItem */
    private $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new ViewItem();
    }

    public function testGetName()
    {
        $this->assertSame('view_item', $this->sut->getName());
    }

    public function testSerializeMockItem()
    {
        $item=$this->createMock(ItemInterface::class);

        $item->expects($this->any())
            ->method('getCurrency')
            ->willReturn('USD');

        $item->expects($this->any())
            ->method('getValue')
            ->willReturn(1.00);

        $this->sut->addItem($item);
        $this->sut->addItem($item);

        $result = json_encode($this->sut);

        $expected = '{"currency":"USD","value":2,"items":[{},{}]}';
        $this->assertSame($expected, $result);
    }
}
