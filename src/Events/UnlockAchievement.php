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

class UnlockAchievement implements \JsonSerializable, EventInterface
{
    use JsonSerializeTrait;

    private string $achievement_id;

    /**
     * @param string $achievement_id
     */
    public function __construct(string $achievement_id)
    {
        $this->achievement_id = $achievement_id;
    }

    public function getName(): string
    {
        return 'unlock_achievement';
    }
}
