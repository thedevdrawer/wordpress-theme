<?php
/*
|--------------------------------------------------------------------------
| TypeRocket Routes
|--------------------------------------------------------------------------
|
| Manage your web routes here.
|
*/
tr_route()->get()->match('list')->do('list@Employees');
tr_route()->get()->match('list/all')->do(function() {
    return 'here on the alternate page';
});