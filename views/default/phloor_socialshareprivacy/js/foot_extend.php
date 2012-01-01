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
$base_url = elgg_get_site_url();
//$css_path = $base_url . 'mod/phloor_socialshareprivacy/vendors/socialshareprivacy/socialshareprivacy/socialshareprivacy.css';
$lang     = get_language();

$image_url = $base_url . 'mod/phloor_socialshareprivacy/vendors/socialshareprivacy/socialshareprivacy/images/';
$fb_dummy      = $image_url . 'dummy_facebook_en.png';
$twitter_dummy = $image_url . 'dummy_twitter.png';
$gplus_dummy   = $image_url . 'dummy_gplus.png';
?>
<script type="text/javascript">
  jQuery(document).ready(function($){
    if($('#socialshareprivacy').length > 0){
      $('#socialshareprivacy').socialSharePrivacy({
	    services : {
	        facebook : {
	            //'dummy_img'         : 'mod/phloor_socialshareprivacy/vendors/socialshareprivacy/socialshareprivacy/images/dummy_facebook.png',
	            'dummy_img'         : '<?php echo $fb_dummy; ?>',
                'txt_info'          : '<?php echo elgg_echo('phloor_socialshareprivacy:services:facebook:txt_info'); ?>',
                'txt_fb_off'        : '<?php echo elgg_echo('phloor_socialshareprivacy:services:facebook:txt_fb_off'); ?>',
                'txt_fb_on'         : '<?php echo elgg_echo('phloor_socialshareprivacy:services:facebook:txt_fb_on'); ?>',
                'language'          : '<?php echo $lang; ?>',
                'action'            : 'recommend'
	    	}, 
	        twitter : {
	            'dummy_img'         : '<?php echo $twitter_dummy; ?>',
	            'txt_info'          : '<?php echo elgg_echo('phloor_socialshareprivacy:services:twitter:txt_info'); ?>',
                'txt_twitter_off'   : '<?php echo elgg_echo('phloor_socialshareprivacy:services:twitter:txt_twitter_off'); ?>',
                'txt_twitter_on'    : '<?php echo elgg_echo('phloor_socialshareprivacy:services:twitter:txt_twitter_on'); ?>',
                'language'          : '<?php echo $lang; ?>'
	        },
	        gplus : {
	            'dummy_img'         : '<?php echo $gplus_dummy; ?>',
	            'txt_info'          : '<?php echo elgg_echo('phloor_socialshareprivacy:services:gplus:txt_info'); ?>',
                'txt_gplus_off'     : '<?php echo elgg_echo('phloor_socialshareprivacy:services:gplus:txt_gplus_on'); ?>',
                'txt_gplus_on'      : '<?php echo elgg_echo('phloor_socialshareprivacy:services:gplus:txt_gplus_on'); ?>',
                'language'          : '<?php echo $lang; ?>'
	        }
	    },
	    //'css_path'          : '<?php echo ''; //$css_path ?>',
	    'txt_help'          : '<?php echo elgg_echo('phloor_socialshareprivacy:txt_help'); ?>',
        'settings_perma'    : '<?php echo elgg_echo('phloor_socialshareprivacy:settings_perma'); ?>'
	  }); 
    }
  });
</script>