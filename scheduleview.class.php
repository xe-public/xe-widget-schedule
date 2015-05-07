<?php
/* Copyright (C) XE Public, MinSoo Kim */
/**
 * @class scheduleview
 * @author MinSoo Kim (misol.kr@gmail.com)
 * @brief widget to display scheduleview
 * @version 0.1
 */
class scheduleview extends WidgetHandler
{
	/**
	 * @brief Widget handler
	 *
	 * Get extra_vars declared in ./widgets/widget/conf/info.xml as arguments
	 * After generating the result, do not print but return it.
	 */
	function proc($args)
	{
		$output = $this->_compile($args,$content_items);
		return $output;
	}
}
/* End of file scheduleview.class.php */
/* Location: ./widgets/scheduleview/scheduleview.class.php */