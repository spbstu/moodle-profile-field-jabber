<?php // $Id: field.class.php,v 1.1 2007/11/09 19:27:55 stronk7 Exp $

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

class profile_field_jabber extends profile_field_base {

    function edit_field_add(&$mform) {

        /// Create the form field
        $mform->addElement('text', $this->inputname, format_string($this->field->name), 'size="50"');
        $mform->setType($this->inputname, PARAM_TEXT);
    }

    function display_data() {

        $data = $this->data;

    /// If there is a Jabber presence service available, use it
        if (!empty($this->field->param1)) {
            $data = $data . ' <img src="' . str_replace('JABBERID', $data, $this->field->param1) . '" alt="" />';
        }

    /// Normal display
        $options->para = false;
        return format_text($data, FORMAT_MOODLE, $options);
    }

}

?>
