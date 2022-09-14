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

class Login implements \JsonSerializable, EventInterface
{
    use JsonSerializeTrait;

    private ?string $method = null;

    public function getName(): string
    {
        return 'login';
    }

    /**
     * @param string|null $method
     * @return Login
     */
    public function setMethod(?string $method): Login
    {
        $this->method = $method;
        return $this;
    }
}