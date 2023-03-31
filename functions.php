<?php
function url_is($value)
{
	return $_SERVER["REQUEST_URI"] == $value;
}
