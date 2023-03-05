<?php

namespace Chozetsu\Ch08\Observer;

class DataStore implements ObservableInterface
{
    const EVENT_SAVE = 'save';
    const EVENT_LOAD = 'load';

    use NotifiableTrait;

    public function save(mixed $data)
    {
        // save

        $this->notify(self::EVENT_SAVE, $data);
    }

    public function load(): mixed
    {
        // load
        $data = ['hoge' => 123];

        $this->notify(self::EVENT_LOAD, $data);

        return $data;
    }

}
