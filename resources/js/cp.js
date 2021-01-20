/**
 * When extending the control panel, be sure to uncomment the necessary code for your build process:
 * https://statamic.dev/extending/control-panel
 */

/** Example Fieldtype

import ExampleFieldtype from './components/fieldtypes/ExampleFieldtype.vue';

Statamic.booting(() => {
    Statamic.$components.register('example-fieldtype', ExampleFieldtype);
});

*/
Statamic.$hooks.on('entry.saving', (resolve, reject, payload) => {
    console.log(payload.values.sites);
    resolve();
});

import SiteID from './components/fieldtypes/SiteIDRelationshipItem.vue';

Statamic.booting(() => {
    Statamic.$components.register('site_i_d-fieldtype', SiteID);
});


