<?php

namespace App\Models\Aa\Traits;

/**
 * Class AaAttribute.
 */
trait AaAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/5.4/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                '.$this->getEditButtonAttribute("edit-aa", "admin.aas.edit").'
                '.$this->getDeleteButtonAttribute("delete-aa", "admin.aas.destroy").'
                </div>';
    }
}
