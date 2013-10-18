Migrating SugarCRM 6.5.x customizations To SugarCRM 7.x
======================
The goal of this project is to take a SugarCRM customization built for SugarCRM 6 and migrate it to SugarCRM 7.

We have created an very simple installable module that has been tested with SugarCRM 6.5.15 and SugarCRM 6.7.2.
The module <strong>NEPO_DEMO</strong> installs as <strong>Demos</strong>.

Demos has two relationships
===
1. Many to Many with Leads
2. Many to Many with Contacts

Features of the Demos module
===
* Detail View Customizations
  * The field webservice_id uses the [SugarLogic](http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/Sugar_Developer_Guide_6.7/03_Module_Framework/Sugar_Logic/01_Dependencies" target="sugarlogic) ReadOnly (#depends) dependency.
  * The field webservice_id is set via a custom `SugarContoller`. The controller's intention is to update the field via a web service call prior to displaying the view to the user. In this demo we update the field via a call to the DB.
  * Javascript files are included in the metadata for the view
  * A custom button will appear on demo records if the webservice_id is greater than 5. The custom button does the following:
      * Displays a custom `YAHOO.SUGAR.MessageBox`
      * When the YES button is pressed, make an Ajax call to the server

* Edit View Customizations
  * Javascript files are included in the metadata for the view
  * The field *status* has a javascript onchange function that does the following:
      * Display a custom `YAHOO.SUGAR.MessageBox`
      * When the YES button is pressed, make an Ajax call to the server

Administration Customizations
===
The administration module has a custom panel that has been added. The intention of the feature is to access a web service and download information from the web service and echo details on the screen to the user.


SugarCRM 7 Q&A
===
1. How do you make a record readonly? Users are not able to edit this record, it is for information purposes only!
2. What happened to Tabs and closed panels on DetailView and EditView? How do you layout hundreds of fields? How do you group items together?</li>
3. How do create an Intelligence Pane? And how do you get it to display on the record view</li>
4. What are the best practices to debug SugarCRM 7</li>
5. What technologies are in use and where are the links to learn about them</li>
6. Is there a suite of tools available, that will migrate a SugarCRM 6 module to a SugarCRM 7 module?>


Steps used in Migrating SugarCRM 6 module to SugarCRM 7
===
1. In order to get the NEPO_DEMO subpanel to appear under Leads and Contacts we need to
  1. Migrate `NEPO_DEMO/metadata/subpanel/default.php` to `NEPO_DEMO/clients/base/views/subpanel-list/subpanel-list.php`
  2. Migrate layoutdefs in the Contacts module from  `custom/Extension/modules/Contacts/Ext/Layoutdefs/nepo_demo_contacts_Contacts.php` to `custom/Extension/modules/Contacts/Ext/clients/base/layouts/subpanels/nepo_demo_contacts_Contacts.php`
  3. Migrate layoutdefs in the Leads module from  `custom/Extension/modules/Leads/Ext/Layoutdefs/nepo_demo_leads_Leads.php` to `custom/Extension/modules/Leads/Ext/clients/base/layouts/subpanels/nepo_demo_leads_Leads.php`
2. Provide a Sugar 7 layout for NEPO_DEMO
  1. Migrate the NEPO_DEMO EditView/DetailView to be a record view in `NEPO_DEMO/client/base/views/record/record.php`
  2. Provide a menu so that the Demos tab looks correct by adding `NEPO_DEMO/client/base/menus/header/header.php`
  3. Migrate layoutdefs in the NEPO_DEMO module to either `NEPO_DEMO/clients/base/layouts/subpanels/subpanels.php` or `custom/Extension/modules/NEPO_DEMO/Ext/clients/base/layouts/subpanels/*.php` so that the Leads and Contacts subpanels appear on the Demos record view
3. **Unknowns**
  1. How do we add a custom action to the record view
  2. How to add javascript to the record view?
  3. What is the replacement for `YAHOO.SUGAR.MessageBox`?
  3. How do we add onchange logic to a field?
  4. How do we migrate the **Administrator** customizations in SugarCRM 7
  5. The ReadOnly SugarLogic does not seem to work with the record view! Is this a SugarCRM bug?
  6. How do replace the web service call that takes place in the SugarController?



#####<a name="depends"></a>ReadOnly Dependency
An example [SugarLogic] ("http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/Sugar_Developer_Guide_6.7/03_Module_Framework/Sugar_Logic/01_Dependencies" target="sugarlogic") function that will make a *webservice_id* field of *Demos* always be read-only.
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
