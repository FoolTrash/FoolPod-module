<?php
return array(
	'_root_' => 'foolpod/pod/index',  // The default route
	'_/api/pod/(:any)' => 'foolfuuka/api/chan/$1',
	'admin/containers/(:any)' => 'foolfuuka/admin/boards/$1',
	'_/notfound/action404' => 'foolfuuka/pod/404', // we need to properly redirect the 404
	'(?!(admin|_))(\w+)' => 'foolfuuka/chan/$2/page',
	'(?!(admin|_))(\w+)/(:any)' => 'foolfuuka/chan/$2/$3',
	'_404_'=> '_/notfound/action404',    // The main 404 route
);