<?php

namespace Alleks\Translate;

use System\Classes\PluginBase;

class Plugin extends PluginBase {

    public function registerComponents() {
        
    }

    public function registerSettings() {
        
    }

    public function registerFormWidgets() {
        return [
            'Alleks\Translate\FormWidgets\SiteName' => 'site_name'
        ];
    }

}
