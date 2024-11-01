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

final class EventFactoryNotConfiguredException extends Exception
{
    public function __construct()
    {
        parent::__construct(
            'EventFactory not configured with an event map'
        );
    }
}
