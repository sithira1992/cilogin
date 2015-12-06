<?php


class Con_ratings extends CI_Controller
{

    function index($message = "")
    {

        $error['message'] = $message;
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;


        $this->load->model('mod_loaddata');
        $query = $this->mod_loaddata->getratings();
      //  $data['ratings'] = $query->result();

        $query1 = $this->mod_loaddata->get_details();
       // $data['items'] = $query1->result();

       // $ratings = array();

        $query2 = $this->mod_loaddata->contentlist();
        $data['content'] = $query2->result();

        foreach($query1->result() as $row1){


                $num =0;$sum=0;$avg=0;
                $count1=0;
                $count2=0;
                $count3=0;
                $count4=0;
                $count5=0;
            foreach($query->result() as $row2){

                if($row1->item_id == $row2->item_id){

                    if($row2->rating ==1)
                        $count1=$count1+1;

                    if($row2->rating ==2)
                        $count2=$count2+1;
                    if($row2->rating ==3)
                        $count3=$count3+1;
                    if($row2->rating ==4)
                        $count4=$count4+1;
                    if($row2->rating ==5)
                        $count5=$count5+1;

                    $sum = $sum+$row2->rating;
                    $num=$num+1;

                }

            }

            if($num>0)
                $avg = ceil($sum/$num);
            else
                $avg=0;

            $data['details'][] = (object) array( 'id'=>$row1->item_id, 'name'=>$row1->topic, 'count1' => $count1,'count2' => $count2,'count3' =>$count3,'count4' => $count4,'count5'=>$count5,'avg'=>$avg);


        }

        $this->load->view('Template/template', $data);
        $this->load->view('ratings', $data);

    }



    public function search(){  //Search Function

        $name="";
        $category="Select Category";


        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;

        $name = $this->input->post('search');
        $category = $this->input->post('select');


        $this->load->model('mod_loaddata');

        $data['topics'] = $this->mod_loaddata->content();
        $query1 = $this->mod_loaddata->search($name,$category);
        //$data['result'] = $query->result();
        $query = $this->mod_loaddata->getratings();

        $query2 = $this->mod_loaddata->contentlist();
        $data['content'] = $query2->result();

            $data['details'] = array();


        foreach($query1->result() as $row1){


            $num =0;$sum=0;$avg=0;
            $count1=0;
            $count2=0;
            $count3=0;
            $count4=0;
            $count5=0;
            foreach($query->result() as $row2){

                if($row1->item_id == $row2->item_id){

                    if($row2->rating ==1)
                        $count1=$count1+1;

                    if($row2->rating ==2)
                        $count2=$count2+1;
                    if($row2->rating ==3)
                        $count3=$count3+1;
                    if($row2->rating ==4)
                        $count4=$count4+1;
                    if($row2->rating ==5)
                        $count5=$count5+1;

                    $sum = $sum+$row2->rating;
                    $num=$num+1;

                }

            }

            if($num>0)
                $avg = ceil($sum/$num);
            else
                $avg=0;

            $data['details'][] = (object) array( 'id'=>$row1->item_id, 'name'=>$row1->topic, 'count1' => $count1,'count2' => $count2,'count3' =>$count3,'count4' => $count4,'count5'=>$count5,'avg'=>$avg);


        }

        $this->load->view('Template/template', $data);
        $this->load->view('ratings', $data);
    }


}