<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class NEPO_DEMOController extends SugarController
{

    function pre_detailview()
    {

       /* 
        * Normally we reach out to a webservice and update the bean before it is displayed
        * but for this demo we are just going to update the a field in the bean
        */

        if (empty($this->bean->webservice_id)) {
                $rows_found = 0;
                $db = DBManagerFactory::getInstance();
                $result = $db->query("select count(*) as c from {$this->bean->table_name}", true, "Error running count query for {$this->bean->object_name} List: ");
                $assoc = $db->fetchByAssoc($result);
                if(!empty($assoc['c']))
                {
                    $rows_found = $assoc['c'];
                }

                $this->bean->webservice_id = ++$rows_found;
                $this->bean->update_date_modified = false;
                $this->bean->update_modified_by = false;
                $this->bean->save(false);
            }

        return true;
    }

    function action_detailview()
    {
        $this->view = 'detail';

        return true;
    }
}

?>
