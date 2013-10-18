<?php
/**
 * Copyright 2013 NEPO Systems, LLC
 *
 * User: @bickart
 * Date: 10/18/2013
 * Time: 9:21 AM
 *
 */

require_once('include/MVC/View/views/view.ajax.php');

class ViewSomethingspecial extends ViewAjax
{
    public function display()
    {
        $status = array( 'status' => 'fail', 'msg' => 'Completed AJAX Call' );

        echo json_encode($status);
    }
}
