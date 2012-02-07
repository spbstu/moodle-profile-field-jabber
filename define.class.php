<?php  // $Id: define.class.php,v 1.1 2007/11/09 19:27:55 stronk7 Exp $

///////////////////////////////////////////////////////////////////////////
//                                                                       //
// NOTICE OF COPYRIGHT                                                   //
//                                                                       //
// Moodle - Modular Object-Oriented Dynamic Learning Environment         //
//          http://moodle.org                                            //
//                                                                       //
// Copyright (C) 1999-2004  Martin Dougiamas  http://dougiamas.com       //
//                                                                       //
// Jabber profile field:                                                 //
//                                                                       //
// Copyright (C) 2001-3001 Eloy Lafuente (stronk7) http://contiento.com  //
//                                                                       //
// This program is free software; you can redistribute it and/or modify  //
// it under the terms of the GNU General Public License as published by  //
// the Free Software Foundation; either version 2 of the License, or     //
// (at your option) any later version.                                   //
//                                                                       //
// This program is distributed in the hope that it will be useful,       //
// but WITHOUT ANY WARRANTY; without even the implied warranty of        //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         //
// GNU General Public License for more details:                          //
//                                                                       //
//          http://www.gnu.org/copyleft/gpl.html                         //
//                                                                       //
///////////////////////////////////////////////////////////////////////////

class profile_define_jabber extends profile_define_base {

    function define_form_specific(&$form) {

        global $CFG;

        /// Param 1 for text type is the URL of the jabber presence service
        $form->addElement('text', 'param1', get_string('jabberpresenceservice', 'profilefield_jabber'), 'size="50"');
        $form->setDefault('param1', 'http://your.jabber.server/presence/plugin?jid=JABBERID');
        $form->setType('param1', PARAM_URL);
    }

}

?>
