Migrating SugarCRM6 customizations To SugarCRM7
======================

An example SugarCRM 6 module that is converted to SugarCRM 7

<ul>
<li><a href="#depends">SugarCRM 6 ReadOnly Dependency</a></li>
<li>Utilization of a controller to access a webservice prior to update the current bean and related beans prior to displaying to the UI</li>
<li>Utilize a webservice to update the data in a subpanel after the bean has displayed on the screen. Javascript call back to server and refresh subpanel upon return</li>
<li>Add a custom action to a module that returns either JSON data or displays information on the screen</li>
<li>What happened to Tabs and closed panels on DetailView and EditView? How do you layout hundreds of fields? How do you group items together?</li>
<li></li>
</ul>


<a name="depends"></a>
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
