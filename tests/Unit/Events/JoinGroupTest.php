<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Spinbits\SyliusGoogleAnalytics4Plugin\Unit\Dto\Events;

use Spinbits\GoogleAnalytics4EventsDtoS\Events\JoinGroup;
use PHPUnit\Framework\TestCase;
use Spinbits\GoogleAnalytics4EventsDtoS\Item;
use Spinbits\GoogleAnalytics4EventsDtoS\Item\ItemInterface;

class JoinGroupTest extends TestCase
{
    /** @var JoinGroup */
    private $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new JoinGroup();
    }

    public function testGetName()
    {
        $this->assertSame('join_group', $this->sut->getName());
    }

    public function testSerializeMockItem()
    {
        $item=$this->createMock(ItemInterface::class);

        $this->sut->setGroupId('example');

        $result = json_encode($this->sut);

        $expected = '{"group_id":"example"}';
        $this->assertSame($expected, $result);
    }
}
