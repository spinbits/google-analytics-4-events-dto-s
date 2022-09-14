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

class LevelEnd implements \JsonSerializable, EventInterface
{
    use JsonSerializeTrait;

    private ?string $level_name = null;
    private ?bool $success = null;

    public function getName(): string
    {
        return 'level_end';
    }

    public function setLevelName(?string $level_name): LevelEnd
    {
        $this->level_name = $level_name;
        return $this;
    }

    public function setSuccess(?bool $success): LevelEnd
    {
        $this->success = $success;
        return $this;
    }
}
