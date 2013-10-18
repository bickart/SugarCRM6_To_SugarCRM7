/**
 * Copyright 2013 NEPO Systems, LLC
 *
 * User: @bickart
 * Date: 10/18/13
 * Time: 9:26 AM
 *
 */


function specialCall(record) {
    YAHOO.SUGAR.MessageBox.show({msg: "Are you sure that you wish to do something <strong>special</strong>?", type: "confirm", close: false, title: 'Do Something Special',
        width: 400,
        buttons: [
            {text: SUGAR.language.get("app_strings", "LBL_EMAIL_YES"), isDefault: true, handler: function () {
                YAHOO.SUGAR.MessageBox.show({msg: "<img src=\"custom/themes/default/images/rel_interstitial_loading.gif\"/>", title: 'Loading Label, please wait...', type: "plain", width: 240, close: false});
                $.ajax({
                    url: "index.php",
                    async: true,
                    dataType: "json",
                    type: "GET",
                    data: {record: record, type: 'print', module: 'NEPO_DEMO', action: 'special'}
                })
                    .done(function (data) {
                        if (console && console.log)
                            console.log(data);
                        if (data.status == "fail") {
                            YAHOO.SUGAR.MessageBox.show({msg: data.msg, type: 'alert', width: 400});
                            return false;
                        } else {
                            location.reload();
                        }

                    });
            }
            },
            {text: "Cancel", handler: function () {
                YAHOO.SUGAR.MessageBox.hide();
            }
            }
        ]
    });
}