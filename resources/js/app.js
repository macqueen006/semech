require('./bootstrap');

import Alpine from 'alpinejs';
import Choices from "choices.js";


window.Alpine = Alpine;

window.Choices = (element) => {
    return new Choices(element, {
        maxItemCount: 3,
        removeItemButton: true
    });
}
Alpine.start();
