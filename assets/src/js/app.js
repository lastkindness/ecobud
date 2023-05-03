'use strict';
/**
 *  Load modules
 */

import AOS from 'aos'
import { Fancybox } from "@fancyapps/ui/dist/fancybox/fancybox.esm.js";

import main from "./modules/main"
import heroSlider from "./modules/hero-slider"
import burger from "./modules/burger"
import accoordion from "./modules/accordion"
import tabs from "./modules/tabs"
import file from "./modules/file"
import slider from "./modules/slider"
import header from "./modules/header";

import '../scss/app.scss';

$(document).ready(() => {
    AOS.init();
    Fancybox.bind("[data-fancybox]", {
    });
    main();
    heroSlider();
    burger();
    accoordion();
    tabs();
    file();
    slider();
    header();
});
