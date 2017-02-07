<?php
namespace Think;
	/*
	 *城市控件
	 *
	 * **/
	class Area{
		public static function city($pro = array("请选择省","请选择市","请选择县/区")){
		$city = json_encode($pro);	
		$str="";
		if(!defined('CALENDAR_INIT')){
			define('CALENDAR_INIT',1);
			$str.='<select id="province" name="province">
                         <option></option>
                          </select>
                          <select id="city" name="city">
                               <option></option>
                           </select>
                          <select id="county" name="county">
                                  <option></option>
                            </select>
							<script type="text/javascript"  src="'.__ROOT__.'/Public/js/area.js"></script>
							<script type="text/javascript">_init_area('.$city.');</script>';
		}
		return $str;
	}
}
?>