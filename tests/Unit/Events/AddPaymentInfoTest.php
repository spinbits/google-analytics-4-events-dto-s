<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Spinbits\SyliusGoogleAnalytics4Plugin\Unit\Dto\Events;

use Spinbits\GoogleAnalytics4EventsDtoS\Events\AddPaymentInfo;
use PHPUnit\Framework\TestCase;
use Spinbits\GoogleAnalytics4EventsDtoS\Item;
use Spinbits\GoogleAnalytics4EventsDtoS\Item\ItemInterface;

class AddPaymentInfoTest extends TestCase
{
    /** @var AddPaymentInfo */
    private $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new AddPaymentInfo();
    }

    public function testGetName()
    {
        $this->assertSame('add_payment_info', $this->sut->getName());
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

        $this->sut->setCoupon('some_coupon');
        $this->sut->setPaymentType('pay_type');

        $result = json_encode($this->sut);

        $expected = '{"coupon":"some_coupon","payment_type":"pay_type","currency":"USD","value":2,"items":[{},{}]}';
        $this->assertEqualsCanonicalizing(json_decode($expected, true), json_decode($result, true));
    }
}
