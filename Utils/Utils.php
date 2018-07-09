<?php

namespace Postr\Utils;

use Postr\Exceptions\PostrException;

class Utils {

	public static function buildQueryString($params)
	{
		if((is_array($params) || is_object($params))
		{
			throw new PostrException("Invalid argument passed to buildQueryString: not array or object.");
		}

		if(empty($params))
		{
			throw new PostrException("Invalid argument passed to buildQueryString: was empty.");
		}

		$count = count($params);
		$k = 0;
		$queryString = "";
		foreach ($params as $paramKey => $paramValue) {
			$queryString .= $paramKey . "=" . $paramValue;
			if( $k === 0 )
			{
				$queryString .= "?";
			} else if ( $k !== $count )
			{
				$queryString .= "&";
			}
			$k++;
		}
		return $queryString;
	}

}

?>