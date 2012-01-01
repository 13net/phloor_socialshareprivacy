<?php
/*****************************************************************************
 * Phloor SocialSharePrivacy                                                 *
 *                                                                           *
 * Copyright (C) 2011, 2012 Alois Leitner                                    *
 *                                                                           *
 * This program is free software: you can redistribute it and/or modify      *
 * it under the terms of the GNU General Public License as published by      *
 * the Free Software Foundation, either version 2 of the License, or         *
 * (at your option) any later version.                                       *
 *                                                                           *
 * This program is distributed in the hope that it will be useful,           *
 * but WITHOUT ANY WARRANTY; without even the implied warranty of            *
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             *
 * GNU General Public License for more details.                              *
 *                                                                           *
 * You should have received a copy of the GNU General Public License         *
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.     *
 *                                                                           *
 * "When code and comments disagree both are probably wrong." (Norm Schryer) *
 *****************************************************************************/
?>
<?php

elgg_register_event_handler('init',  'system', 'phloor_socialshareprivacy_init');

/**
 * Phloor SocialSharePrivacy
 */
function phloor_socialshareprivacy_init() {
    /**
     * CSS
     */
    $css_url = 'mod/phloor_socialshareprivacy/vendors/socialshareprivacy/socialshareprivacy/';
    elgg_register_css('phloor-socialshareprivacy-css', $css_url . 'socialshareprivacy.css', 500);
    elgg_load_css('phloor-socialshareprivacy-css');

    /**
     * JS
     */
    $js_url = 'mod/phloor_socialshareprivacy/vendors/socialshareprivacy/jquery.socialshareprivacy.min.js';
    elgg_register_js('jquery-socialshareprivacy-min', $js_url, 'head', 500);
    elgg_load_js('jquery-socialshareprivacy-min');

    /**
     * Inline JS
     */
    elgg_extend_view('page/elements/foot', 'phloor_socialshareprivacy/js/foot_extend', 500);

    /**
     * Extend Views
     */
    elgg_extend_view('page/elements/footer', 'phloor_socialshareprivacy/socialshareprivacy_div', 10);

}

