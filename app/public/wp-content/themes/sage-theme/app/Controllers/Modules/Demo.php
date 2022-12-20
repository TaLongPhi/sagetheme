<?php

namespace App\Controllers\Modules;

class Demo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'title' => $module['title'],
            'desc' => $module['desc']
        ];
    }
}
