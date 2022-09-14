<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Spinbits\GoogleAnalytics4EventsDtoS;

trait JsonSerializeTrait
{
    public function __toString()
    {
        return (string) json_encode($this);
    }

    /**
     * @psalm-suppress MixedAssignment
     */
    public function jsonSerialize(): array
    {
        $result = [];
        /** @var mixed $value */
        foreach (get_object_vars($this) as $key => $value) {
            if ($value instanceof \JsonSerializable) {
                $result[$key] = $value->jsonSerialize();
            } elseif (null !== $value) {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
