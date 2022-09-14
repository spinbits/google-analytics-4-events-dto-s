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

class Purchase extends ItemsContainerEvent implements \JsonSerializable, EventInterface
{
    use JsonSerializeTrait;

    private string $transaction_id;
    private ?string $affiliation = null;
    private ?string $coupon = null;
    private ?float $shipping = null;
    private ?float $tax = null;

    public function __construct(string $transaction_id)
    {
        $this->transaction_id = $transaction_id;
    }

    public function getName(): string
    {
        return 'purchase';
    }

    public function setAffiliation(?string $affiliation): Purchase
    {
        $this->affiliation = $affiliation;
        return $this;
    }

    public function setCoupon(?string $coupon): Purchase
    {
        $this->coupon = $coupon;
        return $this;
    }

    public function setShipping(?float $shipping): Purchase
    {
        $this->value = (float) $this->value - (float) $this->shipping;
        $this->shipping = $shipping;
        $this->value += (float) $this->shipping;
        return $this;
    }

    public function setTax(?float $tax): Purchase
    {
        $this->value = (float) $this->value - (float) $this->tax;
        $this->tax = $tax;
        $this->value += (float) $this->tax;
        return $this;
    }
}
