require('./bootstrap');

import Alpine from 'alpinejs';
import Choices from "choices.js";

require('./libs/trix');
window.Alpine = Alpine;

window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 6,
        removeItemButton: true
    });
}

Alpine.start();

