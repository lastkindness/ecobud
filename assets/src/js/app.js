'use strict';
/**
 *  Load modules
 */


import { Fancybox } from "@fancyapps/ui/dist/fancybox/fancybox.esm.js";



import main from "./modules/main"
import heroSlider from "./modules/hero-slider"
import burger from "./modules/burger"
import accoordion from "./modules/accordion"
import tabs from "./modules/tabs"


import '../scss/app.scss';

$(document).ready(() => {
    main();
    heroSlider();
    burger();
    accoordion();
    tabs();
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
});
