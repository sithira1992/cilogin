<?php
class Con_search extends CI_Controller
{

    function __construct()
    {
        parent::__construct();


        $this->load->model('Mod_items');
        $this->load->model('Mod_navigation');
//  $this->load->model('');
    }

    function index()
    {

        $info = $this->input->post('search');

        $query = $this->Mod_items->searchitem($info);
        //$data['search'] = $query->result();


        $query1 = $this->Mod_navigation->getmaincategories(); //Managing retrieved main cat data
        $data['maincat'] = $query1->result();

        $query2 = $this->Mod_navigation->getsubcategories();//Managing retrieved sub categories
        $data['subcat'] = $query2->result();

        $query3 = $this->Mod_items->getratings();

        $data['details']=array();


        foreach ($query->result() as $row1) {

            $sum = 0;
            $count = 0;
            $average = 0;


            foreach ($query3->result() as $row2) {

                if ($row1->item_id == $row2->item_id) {

                    $count = $count + 1;

                    $sum = $sum + $row2->rating;

                }


            }
            if ($count > 0)
                $average = ceil($sum / $count);
            else
                $average = 0;


            $data['details'][] = (object)array('topic' => $row1->topic, 'path' => $row1->path, 'item_id' => $row1->item_id, 'ratings' => $average);
        }

            $this->load->view('header', $data);
            $this->load->view('search', $data);
            $this->load->view('footer');
            //  $this->load->view('footer');


    }
}