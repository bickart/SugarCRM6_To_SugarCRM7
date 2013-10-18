Migrating SugarCRM 6.5.x customizations To SugarCRM 7.x
======================
The goal of this project is to take a SugarCRM customization built for SugarCRM 6 and migrate it to SugarCRM 7.

We have created an very simple installable module that has been tested with SugarCRM 6.5.15.
The module <strong>NEPO_DEMO</strong> installs as <strong>Demos</strong>.


Demos has two relationships
===
1. Many to Many with Leads</li>
2. Many to Many with Contacts</li>

Features of the Demos module
===
* Detail View Customizations
  * The field webservice_id uses the [SugarLogic](http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/Sugar_Developer_Guide_6.7/03_Module_Framework/Sugar_Logic/01_Dependencies" target="sugarlogic) ReadOnly (#depends) dependency.
  * The field webservice_id is set via a custom `SugarContoller`. The controller's intention is to update the field via a web service call prior to displaying the view to the user. In this demo we update the field via a call to the DB.
  * Javascript files are included in the metadata for the view
  * A custom button will appear on demo records if the webservice_id is greater than 5 and does the following:
      * Displays a custom `YAHOO.SUGAR.MessageBox`
      * When the YES button is pressed, make an Ajax call to the server

* Edit View Customizations
  * Javascript files are included in the metadata for the view
  * The field *status* has a javascript onchange function that does the following:
      * Display a custom `YAHOO.SUGAR.MessageBox`
      * When the YES button is pressed, make an Ajax call to the server


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
$dependencies['NEPO_DEMO']['readonly'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => true,
        'onload' => true,
        'actions' => array(
                array(
                        'name' => 'ReadOnly',
                        'params' => array(
                                'target' => 'webservice_id',
                                'value' => 'true',
                        ),
                ),
         )
);
```
