<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'spriebsch\\eventstore\\abstracteventstream' => '/stream/AbstractEventStream.php',
                'spriebsch\\eventstore\\correlationid' => '/event/CorrelationId.php',
                'spriebsch\\eventstore\\emitseventstrait' => '/events/EmitsEventsTrait.php',
                'spriebsch\\eventstore\\emptyeventscollectionexception' => '/events/EmptyEventsCollectionException.php',
                'spriebsch\\eventstore\\event' => '/event/Event.php',
                'spriebsch\\eventstore\\eventfactory' => '/event/EventFactory.php',
                'spriebsch\\eventstore\\eventhasnotopicconstantexception' => '/event/EventHasNoTopicConstantException.php',
                'spriebsch\\eventstore\\eventid' => '/event/EventId.php',
                'spriebsch\\eventstore\\eventreader' => '/reader/EventReader.php',
                'spriebsch\\eventstore\\events' => '/events/Events.php',
                'spriebsch\\eventstore\\eventsourceddecisiontrait' => '/traits/EventSourcedDecisionTrait.php',
                'spriebsch\\eventstore\\eventsourcedreadmodeltrait' => '/traits/EventSourcedReadModelTrait.php',
                'spriebsch\\eventstore\\eventsourcedtrait' => '/traits/EventSourcedTrait.php',
                'spriebsch\\eventstore\\eventstoreexception' => '/EventStoreException.php',
                'spriebsch\\eventstore\\eventstream' => '/stream/EventStream.php',
                'spriebsch\\eventstore\\eventstreamhasnotbeenqueriedexception' => '/stream/EventStreamHasNotBeenQueriedException.php',
                'spriebsch\\eventstore\\eventtrait' => '/event/EventTrait.php',
                'spriebsch\\eventstore\\eventwriter' => '/writer/EventWriter.php',
                'spriebsch\\eventstore\\exception' => '/Exception.php',
                'spriebsch\\eventstore\\failedtostoreeventexception' => '/writer/FailedToStoreEventException.php',
                'spriebsch\\eventstore\\failedtostoreeventforunknownreasonexception' => '/writer/FailedToStoreEventForUnknownReasonException.php',
                'spriebsch\\eventstore\\json' => '/json/Json.php',
                'spriebsch\\eventstore\\jsonevent' => '/json/JsonEvent.php',
                'spriebsch\\eventstore\\keynotfoundinjsonexception' => '/json/KeyNotFoundInJsonException.php',
                'spriebsch\\eventstore\\noeventwiththatidexception' => '/reader/NoEventWithThatIdException.php',
                'spriebsch\\eventstore\\noeventwiththattopicexception' => '/reader/NoEventWithThatTopicException.php',
                'spriebsch\\eventstore\\nosuchsinceeventidexception' => '/reader/NoSuchSinceEventIdException.php',
                'spriebsch\\eventstore\\queueselecteventssqlstatement' => '/sql/QueueSelectEventsSqlStatement.php',
                'spriebsch\\eventstore\\selecteventssqlstatement' => '/sql/SelectEventsSqlStatement.php',
                'spriebsch\\eventstore\\serializableeventtrait' => '/event/SerializableEventTrait.php',
                'spriebsch\\eventstore\\sourcingselecteventssqlstatement' => '/sql/SourcingSelectEventsSqlStatement.php',
                'spriebsch\\eventstore\\sqliteeventreader' => '/reader/SqliteEventReader.php',
                'spriebsch\\eventstore\\sqliteeventstoreschema' => '/schema/SqliteEventStoreSchema.php',
                'spriebsch\\eventstore\\sqliteeventwriter' => '/writer/SqliteEventWriter.php',
                'spriebsch\\eventstore\\withinmemoryeventstoretrait' => '/traits/WithInMemoryEventStoreTrait.php',
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
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd