<?php

namespace KN\Entity;

class Sporty {
    private $calls = 0;

    public function setOwningTeam() {
        $this->calls += 1;
        echo("CALLED {$this->calls} times\n");
    }

}
