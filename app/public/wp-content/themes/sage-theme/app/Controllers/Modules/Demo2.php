<?php

namespace App\Controllers\Modules;

class Demo2
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
        ];
    }
}
