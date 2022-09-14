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

class JoinGroup implements \JsonSerializable, EventInterface
{
    use JsonSerializeTrait;

    private ?string $group_id = null;

    public function getName(): string
    {
        return 'join_group';
    }

    /**
     * @param string|null $group_id
     * @return JoinGroup
     */
    public function setGroupId(?string $group_id): JoinGroup
    {
        $this->group_id = $group_id;
        return $this;
    }
}
