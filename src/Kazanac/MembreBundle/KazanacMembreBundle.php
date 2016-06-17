<?php

namespace Kazanac\MembreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KazanacMembreBundle extends Bundle {

    public function getParent() {

        return 'FOSUserBundle';
    }

}
