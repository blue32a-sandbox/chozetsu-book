<?php

namespace Tests\Ch08\Observer;

use Chozetsu\Ch08\Observer\DataStore;
use Chozetsu\Ch08\Observer\Logger;
use Chozetsu\Ch08\Observer\LoggerObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testSavedNotify(): void
    {
        $data = ['fuga' => 987];
        $this->expectOutputString('save: {"fuga":987}');

        $dataStore = new DataStore();
        $logger = new Logger();
        $observer = new LoggerObserver($logger);
        $observer->watch($dataStore, DataStore::EVENT_SAVE);

        $dataStore->save($data);
    }

    public function testLoadedNotify(): void
    {
        $this->expectOutputString('load: {"hoge":123}');

        $dataStore = new DataStore();
        $logger = new Logger();
        $observer = new LoggerObserver($logger);
        $observer->watch($dataStore, DataStore::EVENT_LOAD);

        $dataStore->load();
    }
}
