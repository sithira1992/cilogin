<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 16/10/2015
 * Time: 1:55 PM
 */
class Mod_vacancy_add extends CI_Model
{

    function setvacancy($path,$pub_date, $e_date,$title ){//set vacancy adverse

        $this->db->set('Pub_date', $pub_date);
        $this->db->set('Exp_date', $e_date);
        $this->db->set('Add', $path);
        $this->db->set('Title', $title);

        $this->db->insert('tbl_vacancy_details');
    }

}