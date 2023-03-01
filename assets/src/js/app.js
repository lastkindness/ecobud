'use strict';
/**
 *  Load modules
 */
import main from "./modules/main"
import heroSlider from "./modules/hero-slider"
import burger from "./modules/burger"
import accoordion from "./modules/accordion"

import '../scss/app.scss';

$(document).ready(() => {
    main();
    heroSlider();
    burger();
    accoordion();
});
