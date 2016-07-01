<?php   
class Muaw_InstagramPhotos_Block_Index extends Mage_Core_Block_Template{


    function processURL($url)
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 2
        ));

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    function index(){

        $client_id = "3314460120.5c97419.44dfce8b9dda4a5cb6481e8844f92ec2";
        $url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token='.$client_id;

        $all_result  = $this->processURL($url);
        $decoded_results = json_decode($all_result, true);

        //echo '<pre>';
        //print_r($decoded_results);
        //exit;

        //Now parse through the $results array to display your results...
        return $decoded_results['data'];
//        foreach($decoded_results['data'] as $item){
//            $image_link = $item['images']['thumbnail']['url'];
//            echo '<img src="'.$image_link.'" />';
//        }
    }



}