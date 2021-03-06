<?php 

function timeAgo( $now , $time){
    $timeAgo  = $now - $time;
    $temp = 0;
	if(isset($timeAgo)){
		if($timeAgo < 60){
			return __('just now', 'palette');
		}elseif($timeAgo < 1800){
			$temp = floor($timeAgo/60);
			return  sprintf(__('%d minutes ago', 'palette'), $temp);
		}elseif($timeAgo < 3600){
			return __('half an hour ago', 'palette');
		}elseif($timeAgo < 3600*24){
			$temp = floor($timeAgo/3600);
			return sprintf( __('%d hours ago', 'palette'), $temp);
		}elseif($timeAgo < 3600*24*2){
			return __('yesterday', 'palette');
		}else{
			$temp = floor($timeAgo/(3600*24));
			return sprintf( __('%d days ago', 'palette'), $temp);
		}
	}
	else{
		return null;
	}
}

class Palette_Settings_Cache{
	var $palette_settings = [];

	function __construct(){
	}

	function registerSetting($setting){
		// $this->palette_settings = $setting;
		array_push($this->palette_settings, $setting);
	}

	function removeSetting($setting){
	}

	function removeAllSettings(){
		// foreach($this->palette_settings as $setting){
		// 	delete_option($setting);
		// }
	}

}

$palette_settings_cache = new Palette_Settings_Cache;

function get_info(){
	echo '
     <div class="row page-info">
        <div class="palette-col-8-100 info-left">
            <div class="info-icon ">'.mb_substr(get_the_title(),0,1).'</div>
        </div>
        <div class="palette-col-92-100 info-right">
            <div class="info-text">
                <h2 class="title">'.get_the_title().'</h2>
                <p class="description">'.get_bloginfo('description').'</p>
            </div>
        </div>
    </div>
	';
}

 ?>
