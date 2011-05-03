<?php

namespace Predis\Commands;

use Predis\Helpers;

class StringGetMultiple extends Command {
    public function getId() {
        return 'MGET';
    }

    public function filterArguments(Array $arguments) {
        return Helpers::filterArrayArguments($arguments);
    }

    protected function canBeHashed() {
        return $this->checkSameHashForKeys($this->getArguments());
    }
}