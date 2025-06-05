<?php

Route::patch('{resource}/{resourceId}/reorder', 'CodeWithChristophe\NovaFieldSortable\Http\Controllers\ResourceSortingController@handle');
