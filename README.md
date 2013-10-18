Migrating SugarCRM6 customizations To SugarCRM7
======================

An example SugarCRM 6 module that is converted to SugarCRM 7

<ul>
<li><a href="#depends">SugarCRM 6 ReadOnly Dependency</a></li>
<li>Utilization of a controller to access a webservice prior to update the current bean and related beans prior to displaying to the UI</li>
<li>Utilize a webservice to update the data in a subpanel after the bean has displayed on the screen. i.e., How to add a Javascript call back to server and refresh subpanel upon return</li>
<li>Add a custom action to a module that returns either JSON data or displays information on the screen</li>
<li>What happened to Tabs and closed panels on DetailView and EditView? How do you layout hundreds of fields? How do you group items together?</li>
<li>How do you make a record view only? The record can be deleted by can not be duplicated, edited by anybody!</li>
<li>How do create an Intelligence Pane? And how do you get it to display on the record view</li>
<li>Can you explain the metadata and the functions available via javscript</li>
<li>What are the best practices to debug SugarCRM 7</li>
<li>What technologies are in use and where are the links to learn about them</li>
<li>Is there a suite of tools available, that will migrate a SugarCRM 6 module to a SugarCRM 7 module?>
<li>Why doesn't the application recognize that a module is in SugarCRM 7 mode and has a relationship to a module that has not been converted to SugarCRM 7 and convert the subpanel(s) on the fly?</li>
</ul>


<h3><a name="depends"></a>ReadOnly Dependency</h3>
An example <a href="http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/Sugar_Developer_Guide_6.7/03_Module_Framework/Sugar_Logic/01_Dependencies" target="sugarlogic">SugarLogic</a> function that will make a <b>field</b> to always be read-only.
```
$dependencies['MODULE']['readonly'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => true,
        'onload' => true,
        'actions' => array(
                array(
                        'name' => 'ReadOnly',
                        'params' => array(
                                'target' => 'FIELD',
                                'value' => 'true',
                        ),
                ),
         )
);
```
