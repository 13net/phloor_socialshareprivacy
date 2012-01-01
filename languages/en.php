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

$english = array(
    'admin:plugins:category:PHLOOR' => 'PHLOOR Plugins',
	'phloor_socialshareprivacy' => 'Phloor SocialSharePrivacy',

	'phloor_socialshareprivacy:settings_perma' => 'Permanent allowance:',
	'phloor_socialshareprivacy:txt_help' => 'If you activate these fields with a click you enable the exchange of information with Facebook, Twitter or Google which may store data on servers in the United States of America. Click on <em>i</em> for further information.',

	'phloor_socialshareprivacy:services:facebook:txt_info' => '2 Click for more data privacy protection: Only if you click the button is activated and you can create your recommendation on Facebook. Even when just activated information is sent to third parties.',
	'phloor_socialshareprivacy:services:facebook:txt_fb_off' => 'not connected to Facebook',
	'phloor_socialshareprivacy:services:facebook:txt_fb_on' => 'connected to Facebook',

	'phloor_socialshareprivacy:services:twitter:txt_info' => '2 Click for more data privacy protection: Only if you click the button is activated and you can create your recommendation on Twitter. Even when just activated information is sent to third parties.',
	'phloor_socialshareprivacy:services:twitter:txt_twitter_off' => 'not connected to Twitter',
	'phloor_socialshareprivacy:services:twitter:txt_twitter_on' => 'connected to Twitter',

	'phloor_socialshareprivacy:services:gplus:txt_info' => '2 Click for more data privacy protection: Only if you click the button is activated and you can create your recommendation on Google+. Even when just activated information is sent to third parties.',
	'phloor_socialshareprivacy:services:gplus:txt_gplus_off' => 'not connected to Google+',
	'phloor_socialshareprivacy:services:gplus:txt_gplus_on' => 'connected to Google+',

);

add_translation('en', $english);
