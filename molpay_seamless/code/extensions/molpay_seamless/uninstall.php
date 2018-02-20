<?php
if ( !defined ( 'DIR_CORE' )) {
	header ( 'Location: static_pages/' );
}

$rm = new AResourceManager();
$rm->setType('image');

$resources = $rm->getResources('extensions', 'molpay_seamless');
//echo_array($resources);exit;
if ( is_array($resources) )
{
	foreach($resources as $resource)
	{
		$rm->deleteResource($resource['resource_id']);
	}
}