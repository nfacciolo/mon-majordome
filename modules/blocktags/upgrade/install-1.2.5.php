<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_2_5($object)
{
	return ($object->registerHook('addproduct') && $object->registerHook('updateproduct') && $object->registerHook('deleteproduct'));
}
