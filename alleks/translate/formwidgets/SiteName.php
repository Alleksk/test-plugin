<?php

namespace Alleks\Translate\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Illuminate\Support\Facades\Lang;

/**
 * SiteName Form Widget
 */
class SiteName extends FormWidgetBase {

    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'alleks_translate_site_name';

    /**
     * @inheritDoc
     */
    public function init() {
        
    }

    /**
     * @inheritDoc
     */
    public function render() {
        $this->prepareVars();
        $value = Lang::get('alleks.translate::lang.default.site_name');
        return $this->makePartial('sitename', ['value' => $value, 'name' =>
                    'Translate[site_name]']);
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars() {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * @inheritDoc
     */
    public function loadAssets() {
        $this->addCss('css/sitename.css', 'Alleks.Translate');
        $this->addJs('js/sitename.js', 'Alleks.Translate');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value) {
        return $value;
    }

}
