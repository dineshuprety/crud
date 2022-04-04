
(function () {
    'use strict';

    $(document).ready(function () {

        //SWITCH PAGES
        switch ($("body").data("page-id")){

            case 'adminManageStudent':
                STUDENT.admin.table();
            break;
            case 'adminLogin':
                STUDENT.admin.login();
            default:
                //do nothing
        }
    })

})();