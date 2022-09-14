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

class AddToCart extends ItemsContainerEvent implements \JsonSerializable, EventInterface
{
    use JsonSerializeTrait;

    public function getName(): string
    {
        return 'add_to_cart';
    }
}
