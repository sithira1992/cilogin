<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/10/2015
 * Time: 6:01 PM
 */

class Stats_model extends CI_Model
{

    function content()
    {

        $this->db->select('*');
        $this->db->from('tracker');
        $query = $this->db->get();
        return  $query;



    }

    function  insertDetails($ip,$country,$city,$http_user_agent,$isBot,$request_uri,$date,$time)
    {

        $this->db->set('ip', $ip);
        $this->db->set('country', $country);
        $this->db->set('city', $city);
        $this->db->set('http_user_agent', $http_user_agent);
        $this->db->set('isbot', $isBot);
        $this->db->set('request_uri', $request_uri);
        $this->db->set('date', $date);
        $this->db->set('time', $time);


        $this->db->insert('tracker');
    }

    function countBrowsers()
    {

        $this->db->select('http_user_agent, COUNT(http_user_agent) as total');
        $this->db->group_by('http_user_agent');
        $this->db->order_by('total', 'desc');
        $this->db->from('tracker');

        $query = $this->db->get();
        return  $query;



    }



    function getPageViwers($where)
    {

        $this->db->select('date, COUNT(date) as total');
        $this->db->where('date',$where);
        $this->db->from('tracker');
        $query = $this->db->get();
        return  $query;
    }


    //to get this month users
    function getPageViwers2($where)
    {

        $query = $this->db->query("SELECT `date`, COUNT(date) as total FROM (`tracker`) WHERE  date like '$where-%'");

        return  $query;
    }

    //to get full histry
    function getPageViwers3()
    {

        $this->db->select('date, COUNT(date) as total');


        $this->db->from('tracker');

        $query = $this->db->get();
        return  $query;

    }

//to get unique ip
    function getPageViwers4()
    {


        $query = $this->db->query("select count(distinct  ip) as  total from tracker ");

        return  $query;

    }

    //get country details
    function getCountry()
    {

        $this->db->select('country, COUNT(country) as total');
        $this->db->group_by('country');
        $this->db->order_by('total', 'desc');
        $this->db->from('tracker');

        $query = $this->db->get();
        return  $query;

    }


//get page details
    function getPage()
    {

        $this->db->select('request_uri, COUNT(request_uri) as total');
        $this->db->group_by('request_uri');
        $this->db->order_by('total', 'desc');
        $this->db->from('tracker');

        $query = $this->db->get();
        return  $query;

    }
}