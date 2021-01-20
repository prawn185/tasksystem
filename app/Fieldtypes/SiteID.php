<?php

namespace App\Fieldtypes;

use Statamic\Facades\Site;
use Statamic\Fields\Fieldtype;
use Statamic\Fieldtypes\Relationship;

class SiteID extends Relationship
{
    protected $itemComponent = 'SiteIDRelationshipItem';

    public function toItemArray($id)
    {
        if ($site = Site::get($id)) {
            return [
                'id' => $id,
                'title' => $site->name(),
            ];
        }

        return $this->invalidItemArray($id);
    }

    public function getIndexItems($request)
    {
        return Site::all()->map(function ($site) {
            return [
                'id' => $site->handle(),
                'title' => $site->name(),
            ];
        })->values();
    }
}
