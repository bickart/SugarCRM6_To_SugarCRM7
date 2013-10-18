<?php
/**
 * Copyright 2013 NEPO Systems, LLC
 *
 * User: @bickart
 * Date: 10/18/2013
 * Time: 9:38 AM
 *
 */

class ViewSchema extends SugarView
{
    function display()
    {
        global $current_user;

        /* Normally we reach out to a WebService and download information and then echo details from the webservice to the user */

        if (is_admin($current_user)) {

            echo "<h1>Schema Definition for table '{$this->bean->table_name}'</h1><br />";

            foreach ($this->bean->db->get_columns($this->bean->table_name) as $field => $definition) {
                echo "$field {$definition['type']}";

                switch ($definition['type']) {
                    case 'datetime':
                    case 'date':
                    case 'text':
                    case 'tinyint':
                    case 'int':
                        break;
                    default:
                        echo "[{$definition['len']}]";
                }

                echo "<br/>";
            }
            echo "<br /> <br />We have downloaded the information you are seeking from the web service";
            return;
        }

        header("Location: index.php?module=NEPO_DEMO&action=index");
    }
}
