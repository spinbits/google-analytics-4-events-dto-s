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

class PostScore implements \JsonSerializable, EventInterface
{
    use JsonSerializeTrait;

    private float $score;
    private ?float $level = null;
    private ?string $character = null;

    public function __construct(float $score)
    {
        $this->score = $score;
    }

    public function getName(): string
    {
        return 'post_score';
    }

    public function setLevel(?float $level): PostScore
    {
        $this->level = $level;
        return $this;
    }

    public function setCharacter(?string $character): PostScore
    {
        $this->character = $character;
        return $this;
    }
}
