<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'spriebsch\\eventstore\\abstractjsontestbase' => '/AbstractJsonTestBase.php',
                'spriebsch\\eventstore\\abstractsqlstatementtestbase' => '/AbstractSqlStatementTestBase.php',
                'spriebsch\\eventstore\\emitseventstraittest' => '/EmitsEventsTraitTest.php',
                'spriebsch\\eventstore\\eventassertionstrait' => '/EventAssertionsTrait.php',
                'spriebsch\\eventstore\\eventfactorytest' => '/event/EventFactoryTest.php',
                'spriebsch\\eventstore\\eventidtest' => '/event/EventIdTest.php',
                'spriebsch\\eventstore\\eventstest' => '/events/EventsTest.php',
                'spriebsch\\eventstore\\eventstreamtest' => '/stream/EventStreamTest.php',
                'spriebsch\\eventstore\\eventtest' => '/event/EventTest.php',
                'spriebsch\\eventstore\\exceptiontest' => '/exceptions/ExceptionTest.php',
                'spriebsch\\eventstore\\jsoneventtest' => '/json/JsonEventTest.php',
                'spriebsch\\eventstore\\jsonfromarraytest' => '/json/JsonFromArrayTest.php',
                'spriebsch\\eventstore\\jsonfromjsontest' => '/json/JsonFromJsonTest.php',
                'spriebsch\\eventstore\\providequeries' => '/ProvideQueries.php',
                'spriebsch\\eventstore\\providequeuequeries' => '/ProvideQueueQueries.php',
                'spriebsch\\eventstore\\providesourcingqueries' => '/ProvideSourcingQueries.php',
                'spriebsch\\eventstore\\queuedeventseventstreamtest' => '/stream/QueuedEventsEventStreamTest.php',
                'spriebsch\\eventstore\\queuesqlstatementtest' => '/sql/QueueSqlStatementTest.php',
                'spriebsch\\eventstore\\serializableeventtraittest_uninitializedevent' => '/stubs/SerializableEventTraitTest_UninitializedEvent.php',
                'spriebsch\\eventstore\\sourceeventstreamtest' => '/stream/SourceEventStreamTest.php',
                'spriebsch\\eventstore\\sourcingsqlstatementtest' => '/sql/SourcingSqlStatementTest.php',
                'spriebsch\\eventstore\\sqlite3stmtspy' => '/stubs/SQLite3StmtSpy.php',
                'spriebsch\\eventstore\\sqliteeventstoreschematest' => '/schema/SqliteEventStoreSchemaTest.php',
                'spriebsch\\eventstore\\sqliteeventstoretest' => '/eventstore/SqliteEventStoreTest.php',
                'spriebsch\\eventstore\\sqliteeventstoretest_abstractevent' => '/stubs/SqliteEventStoreTest_AbstractEvent.php',
                'spriebsch\\eventstore\\sqliteeventstoretest_event1' => '/stubs/SqliteEventStoreTest_Event1.php',
                'spriebsch\\eventstore\\sqliteeventstoretest_event2' => '/stubs/SqliteEventStoreTest_Event2.php',
                'spriebsch\\eventstore\\sqliteeventstoretest_event3' => '/stubs/SqliteEventStoreTest_Event3.php',
                'spriebsch\\eventstore\\testcorrelationid' => '/stubs/TestCorrelationId.php',
                'spriebsch\\eventstore\\tests\\testevent' => '/stubs/TestEvent.php',
                'spriebsch\\longbow\\tests\\testeventstream' => '/stubs/TestEventStream.php'
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
