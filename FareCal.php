<?php

class FareCal{
    
    function fareCalculation($distance,$cabtype,$luggage=null){

        switch($cabtype){
            case "CedMicro": 
                if($distance<=10){
                    $fare=($distance*13.50)+50;
                }
        
                else if($distance<=60 && $distance>10){
                    $fare=135+50+(($distance-10)*12);
                }
        
                else if($distance<=160 && $distance>60){
                    $fare = 135+50+600+(($distance-60)*10.2);
                }
        
                else{
                    $fare=135+50+600+1020+(($distance-160)*8.50);
                }
                break;

             case "CedMini":

                if( $distance>0 && $distance<=10 ){
                     $fare=$distance*14.50;
                }
                else if ($distance>10 && $distance<=60 ){
                    $temp1=10*14.50;
                    $fare=(($distance-10)*13.00)+$temp1;

               }
               else if($distance<=160 && $distance>60){
                $temp1=10*14.50;
                $temp2=50*13.00;
                $fare=(($distance-60)*11.20)+($temp1+$temp2);

           }
           else{
            $temp1=10*14.50;
            $temp2=50*13.00;
            $temp3=100*11.20;
            $fare=(($distance-160)*9.50)+($temp1+$temp2+$temp3);
           }
              if($luggage==0){
                  $fare+=0;
              }
              else if($luggage>0 && $luggage<=10)
               {
                   $fare+=50;
               }
              else if($luggage>10 && $luggage<=20)
               {
                   $fare+=100;
               }
               else{
                $fare+=200;
               }

               $fare+=150;

                break;
            
            case "CedRoyal":

                if( $distance>0 && $distance<=10 ){
                     $fare=$distance*15.50;
                }
                else if ($distance>10 && $distance<=60 ){
                    $temp1=10*15.50;
                    $fare=(($distance-10)*14.00)+$temp1;

               }
               else if($distance<=160 && $distance>60){
                $temp1=10*15.50;
                $temp2=50*14.00;
                $fare=(($distance-60)*12.20)+($temp1+$temp2);

           }
           else{
            $temp1=10*15.50;
            $temp2=50*14.00;
            $temp3=100*12.20;
            $fare=(($distance-160)*10.50)+($temp1+$temp2+$temp3);
           }

           if($luggage==0){
            $fare+=0;
        }
        else if($luggage>0 && $luggage<=10)
         {
             $fare+=50;
         }
        else if($luggage>10 && $luggage<=20)
         {
             $fare+=100;
         }
         else{
          $fare+=200;
         }

         $fare+=200;

          break;


          case "CedSUV":

            if( $distance>0 && $distance<=10 ){
                 $fare=$distance*16.50;
            }
            else if ($distance>10 && $distance<=60 ){
                $temp1=10*16.50;
                $fare=(($distance-10)*15.00)+$temp1;

           }
           else if($distance<=160 && $distance>60){
            $temp1=10*16.50;
            $temp2=50*15.00;
            $fare=(($distance-60)*13.20)+($temp1+$temp2);

       }
       else{
        $temp1=10*16.50;
        $temp2=50*15.00;
        $temp3=100*13.20;
        $fare=(($distance-160)*11.50)+($temp1+$temp2+$temp3);
       }

       if($luggage==0){
        $fare+=0;
    }
    else if($luggage>0 && $luggage<=10)
     {
         $fare+=100;
     }
    else if($luggage>10 && $luggage<=20)
     {
         $fare+=200;
     }
     else{
      $fare+=400;
     }

     $fare+=250;

      break;
        }
        
                return $fare;
   }
}