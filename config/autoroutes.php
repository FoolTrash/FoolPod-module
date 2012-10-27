<?php
return array(
	'_root_' => 'foolpod/pod/index',  // The default route
	'_/api/pod/(:any)' => 'foolpod/api/pod/$1',
	'admin/containers/(:any)' => 'foolpod/admin/containers/$1',
	'_/notfound/action404' => 'foolpod/pod/404', // we need to properly redirect the 404
	'(?!(admin|_))(\w+)' => 'foolpod/pod/$2',
	'(?!(admin|_))(\w+)/(:any)' => 'foolpod/pod/$2/$3',
	'_404_'=> '_/notfound/action404',    // The main 404 route
);