<?php declare(strict_types=1);

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function(string $class): void {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'spriebsch\\eventstore\\abstracteventstream' => '/stream/AbstractEventStream.php',
                'spriebsch\\eventstore\\correlationid' => '/event/CorrelationId.php',
                'spriebsch\\eventstore\\correlationidhaschangedexception' => '/sourcing/CorrelationIdHasChangedException.php',
                'spriebsch\\eventstore\\emitseventstrait' => '/events/EmitsEventsTrait.php',
                'spriebsch\\eventstore\\emptyeventscollectionexception' => '/events/EmptyEventsCollectionException.php',
                'spriebsch\\eventstore\\event' => '/event/Event.php',
                'spriebsch\\eventstore\\eventfactory' => '/event/EventFactory.php',
                'spriebsch\\eventstore\\eventid' => '/event/EventId.php',
                'spriebsch\\eventstore\\eventreader' => '/eventstore/EventReader.php',
                'spriebsch\\eventstore\\events' => '/events/Events.php',
                'spriebsch\\eventstore\\eventsourceddecisiontrait' => '/sourcing/EventSourcedDecisionTrait.php',
                'spriebsch\\eventstore\\eventsourcedreadmodeltrait' => '/sourcing/EventSourcedReadModelTrait.php',
                'spriebsch\\eventstore\\eventsourcedtrait' => '/sourcing/EventSourcedTrait.php',
                'spriebsch\\eventstore\\eventstoreexception' => '/EventStoreException.php',
                'spriebsch\\eventstore\\eventstream' => '/stream/EventStream.php',
                'spriebsch\\eventstore\\eventstreamhasnotbeenqueriedexception' => '/stream/EventStreamHasNotBeenQueriedException.php',
                'spriebsch\\eventstore\\eventtrait' => '/event/EventTrait.php',
                'spriebsch\\eventstore\\eventwriter' => '/eventstore/EventWriter.php',
                'spriebsch\\eventstore\\exception' => '/Exception.php',
                'spriebsch\\eventstore\\failedtostoreeventexception' => '/eventstore/FailedToStoreEventException.php',
                'spriebsch\\eventstore\\failedtostoreeventforunknownreasonexception' => '/eventstore/FailedToStoreEventForUnknownReasonException.php',
                'spriebsch\\eventstore\\json' => '/json/Json.php',
                'spriebsch\\eventstore\\jsonevent' => '/json/JsonEvent.php',
                'spriebsch\\eventstore\\keynotfoundinjsonexception' => '/json/KeyNotFoundInJsonException.php',
                'spriebsch\\eventstore\\noeventstosourcefromexception' => '/sourcing/NoEventsToSourceFromException.php',
                'spriebsch\\eventstore\\noeventwiththatidexception' => '/eventstore/NoEventWithThatIdException.php',
                'spriebsch\\eventstore\\noeventwiththattopicexception' => '/eventstore/NoEventWithThatTopicException.php',
                'spriebsch\\eventstore\\nosuchsinceeventidexception' => '/eventstore/NoSuchSinceEventIdException.php',
                'spriebsch\\eventstore\\queueselecteventssqlstatement' => '/sql/QueueSelectEventsSqlStatement.php',
                'spriebsch\\eventstore\\selecteventssqlstatement' => '/sql/SelectEventsSqlStatement.php',
                'spriebsch\\eventstore\\serializableeventtrait' => '/event/SerializableEventTrait.php',
                'spriebsch\\eventstore\\sourcingselecteventssqlstatement' => '/sql/SourcingSelectEventsSqlStatement.php',
                'spriebsch\\eventstore\\sqliteeventreader' => '/eventstore/SqliteEventReader.php',
                'spriebsch\\eventstore\\sqliteeventstoreschema' => '/schema/SqliteEventStoreSchema.php',
                'spriebsch\\eventstore\\sqliteeventwriter' => '/eventstore/SqliteEventWriter.php',
                'spriebsch\\eventstore\\withinmemoryeventstoretrait' => '/eventstore/WithInMemoryEventStoreTrait.php',
                'spriebsch\\sqlite\\connection' => '/../vendor/spriebsch/sqlite/src/Connection.php',
                'spriebsch\\sqlite\\sqliteconnection' => '/../vendor/spriebsch/sqlite/src/SqliteConnection.php',
                'spriebsch\\sqlite\\sqliteschema' => '/../vendor/spriebsch/sqlite/src/SqliteSchema.php',
                'spriebsch\\timestamp\\timestamp' => '/../vendor/spriebsch/timestamp/src/Timestamp.php',
                'spriebsch\\uuid\\uuid' => '/../vendor/spriebsch/uuid/src/UUID.php',
                'spriebsch\\uuid\\uuidexception' => '/../vendor/spriebsch/uuid/src/UUIDException.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        } else {
            $dir = getcwd();
            chdir(__DIR__ . '/..');
            exec('tools/phpab --basedir src -t autoload-template.php --output src/autoload.php composer.json');
            chdir($dir);
            $map = file_get_contents(__DIR__ . '/autoload.php');
            $key = '\'' . strtolower($class) . '\' => ';
            preg_match('|' . preg_quote($key) . '(.*)|', $map, $matches);
            if (!isset($matches[1])) {
                return;
            }
            $filename = str_replace(['\'', ','], '', $matches[1]);
            require __DIR__ . $filename;
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
