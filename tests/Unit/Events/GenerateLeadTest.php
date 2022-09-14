<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Spinbits\SyliusGoogleAnalytics4Plugin\Unit\Dto\Events;

use Spinbits\GoogleAnalytics4EventsDtoS\Events\GenerateLead;
use PHPUnit\Framework\TestCase;

class GenerateLeadTest extends TestCase
{
    /** @var GenerateLead */
    private $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new GenerateLead('USD', 1.23);
    }

    public function testGetName()
    {
        $this->assertSame('generate_lead', $this->sut->getName());
    }

    public function testSerializeMockItem()
    {
        $result = json_encode($this->sut);

        $expected = '{"currency":"USD","value":1.23}';
        $this->assertSame($expected, $result);
    }
}
