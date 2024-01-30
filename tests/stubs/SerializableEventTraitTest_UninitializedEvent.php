<?php declare(strict_types=1);

/*
 * This file is part of EventStore.
 *
 * (c) Stefan Priebsch <stefan@priebsch.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spriebsch\eventstore;

class SerializableEventTraitTest_UninitializedEvent implements Event
{
    use EventTrait;
    use SerializableEventTrait;

    public static function fromJson(Json $json): Event
    {
        return new self;
    }

    public static function topic(): string
    {
        return 'eventStore.the-topic';
    }

    protected function serialize(): array
    {
        return [];
    }
}