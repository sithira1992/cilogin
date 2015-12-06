<?php



class Data_controller extends CI_Controller
{

    function index($message = "")
    {

        $this->load->helper('url');
        $this->load->model('Mod_navigation');
        $this->load->model('Mod_images');
        $this->load->model('Mod_items');

        $data['images'] = $this->Mod_images->content();

        //now edited
        $query=$this->Mod_items->contenttype($this->input->get("var1"));
        //  $data['items'] = $query1->result();
        //  $data['topics'] = $this->Mod_items->gettopic();
        $error['message'] = $message;
        $data['title'] = $this->input->get("var1");

        $query1 = $this->Mod_navigation->getmaincategories(); //Managing retrieved main cat data
        $data['maincat'] = $query1->result();

        $query2 = $this->Mod_navigation->getsubcategories();//Managing retrieved sub categories
        $data['subcat'] = $query2->result();

        $query3 =$this->Mod_items->getratings();
        $data['details']=array();

        foreach($query->result() as $row1){

            $sum=0;
            $count=0;
            $average=0;


            foreach($query3->result() as $row2){

                if($row1->item_id == $row2->item_id){

                    $count = $count+1;

                    $sum = $sum + $row2->rating;

                }



            }
            if($count>0)
                $average = ceil($sum/$count);
            else
                $average=0;


            $data['details'][] = (object) array( 'topic'=>$row1->topic, 'path'=>$row1->path,'item_id'=>$row1->item_id,'ratings' =>$average);

        }





        $this->load->view('header',$data);
        $this->load->view('Display_Items',$data);
        $this->load->view('footer');
    }
}