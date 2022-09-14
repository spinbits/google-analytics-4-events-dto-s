<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Spinbits\GoogleAnalytics4EventsDtoS\Events;

use Spinbits\GoogleAnalytics4EventsDtoS\JsonSerializeTrait;

class BeginCheckout extends ItemsContainerEvent implements \JsonSerializable, EventInterface
{
    use JsonSerializeTrait;

    private ?string $coupon = null;

    public function getName(): string
    {
        return 'begin_checkout';
    }

    public function setCoupon(?string $coupon): BeginCheckout
    {
        $this->coupon = $coupon;
        return $this;
    }
}
