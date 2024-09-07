<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table1">
    <tr>
        <th colspan="4" style="background-color:blue;">
            Monday
        </th>
        <th colspan="4"style="background-color:grey;">
             Tuesday
        </th>
        <th colspan="4" style="background-color:red;">
            Wednesday
        </th>
        <th colspan="4" style="background-color:green;">
             Thursday
        </th>
        </tr>
        <tr>
        <?php 
                    include 'Config.php';
                    $sql = "SELECT tag_no,destination,d_date,d_time FROM bus_schedule";
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) 
                        {
                      // output data of each row
                      while($row = $result->fetch_assoc())
                       {       
                                $tag1=$row['tag_no']; 
                                $d_timee1=$row['d_time']; 
                                $destt1=$row['destination']; 
                                $date1=$row['d_date'];
                         $timestamp = strtotime($date1);
                        // Get the day of the week 
                        $day_of_week = date('l', $timestamp);                
                        // Store the date and day in the array
                        $dates_with_day[] = ['date' => $date1, 'day' => $day_of_week,'tag'=>$tag1,'dtime'=>$d_timee1,'destt'=>$destt1];                  
                        }
                        foreach($dates_with_day as $new_arr):
                            $date2=$new_arr['date'];
                            $tag2=$new_arr['tag'];
                            $time2=$new_arr['dtime'];
                            $dest2=$new_arr['destt'];
                            $currentTime = time();
                            $inputTimestamp = strtotime($date2);
                            if($inputTimestamp < $currentTime) 
                            {
                                $sql_past="INSERT INTO `past_bus_schedule`( `tag_no`, `destination`, `d_date`, `d_time`) 
                                VALUES ('$tag2','$dest2','$date2','$time2')";
                                if(mysqli_query($db, $sql_past)===true)
                                {
                                    $sql_delet="DELETE FROM `bus_schedule` WHERE tag_no =$tag2";
                                    mysqli_query($db, $sql_delet);
                                }
                              }
                            endforeach;
                            $sql_present = "SELECT tag_no,destination,d_date,d_time FROM bus_schedule";
                            $result = $db->query($sql_present);
                            if ($result->num_rows > 0) 
                                {
                              // output data of each row
                              while($row = $result->fetch_assoc())
                               {       
                                        $tag=$row['tag_no']; 
                                        $d_timee=$row['d_time']; 
                                        $destt=$row['destination']; 
                                        $date=$row['d_date'];
                                 $timestamp = strtotime($date);
                                // Get the day of the week
                                $day_of_week = date('l', $timestamp);                
                                // Store the date and day in the array
                                $dates_with_days[] = ['date' => $date, 'day' => $day_of_week,'tag'=>$tag,'dtime'=>$d_timee,'destt'=>$destt];                  
                                }}
                                else
                                {
                                    // $dates_with_days[] = ['date' => "no ", 'day' => "Tuesday",'tag'=>"no",'dtime'=>"no",'destt'=>"no"];              
                                    $tag="No Available Bus";
                                  echo '<option value="tag">'.$tag.'</option>';
                                }
                       }
                     else
                    {
                      $tag="No Available Bus";
                      echo '<option value="tag">'.$tag.'</option>';
                    }
                    ?>
                     <?php foreach ($dates_with_days as $date_data):                       
                        $day= $date_data['day'];                        
                        echo '<br>';
                        if($day==='Monday')
                        {
                            // Array for the Date
                            $mon_date= $date_data['date']; 
                            $mon_date_arr[]= ['datee'=>$date_data['date']];
                            // Arrey for the Tag Number;
                            $mon_tag= $date_data['tag'];
                            $m_tag[]=['tagg'=>$mon_tag];
                            // Arrey for the destination;
                            $mon_dest= $date_data['destt'];
                            $m_dest_arr[]=['dest'=>$mon_dest];
                            // Arrey for the Tme;
                            $mon_time= $date_data['dtime'];
                            $m_time_arr[]=['time'=>$mon_time];
                        }
                        else  if($day==='Tuesday')
                        {
                            // Array for the Date
                            $tu_date= $date_data['date']; 
                            $tu_date_arr[]= ['tu_date'=>$date_data['date']];
                            // Arrey for the Tag Number;
                            $tu_tag= $date_data['tag'];
                            $tu_tag_arr[]=['tagg'=>$tu_tag];
                            // Arrey for the destination;
                            $tue_dest= $date_data['destt'];
                            $tu_dest_arr[]=['tu_dest'=>$tue_dest];
                            // Arrey for the Tme;
                            $tu_time= $date_data['dtime'];
                            $tu_time_arr[]=['tu_time'=>$tu_time];
                        }
                        else  if($day==='Wednesday')
                        {
                            $wu_date_arr[]= ['wu_date'=>$date_data['date']];
                           // Arrey for the Tag Number;
                           $wu_tag= $date_data['tag'];
                           $wu_tag_arr[]=['wu_tagg'=>$wu_tag];
                           // Arrey for the destination;
                           $wu_dest= $date_data['destt'];
                           $wu_dest_arr[]=['wu_dest'=>$wu_dest];
                           // Arrey for the Tme;
                           $wu_time= $date_data['dtime'];
                           $wu_time_arr[]=['wu_time'=>$wu_time];
                        }
                        else  if($day==='Thursday')
                        {
                            $th_date_arr[]= ['th_date'=>$date_data['date']];
                           // Arrey for the Tag Number;
                           $th_tag= $date_data['tag'];
                           $th_tag_arr[]=['th_tagg'=>$th_tag];
                           // Arrey for the destination;
                           $th_dest= $date_data['destt'];
                           $th_dest_arr[]=['th_dest'=>$th_dest];
                           // Arrey for the Tme;
                           $th_time= $date_data['dtime'];
                           $th_time_arr[]=['th_time'=>$th_time];
                        
                        }
                        else  if($day==='Friday')
                        {   //Arayy fotr the date
                            $fri_date_arr[]= ['fri_date'=>$date_data['date']];
                           // Arrey for the Tag Number;
                           $fri_tag_arr[]=['fri_tagg'=>$date_data['tag']];
                           // Arrey for the destination;
                           $fri_dest_arr[]=['fri_dest'=>$date_data['destt']];
                           // Arrey for the Tme;
                          $fri_time_arr[]=['fri_time'=>$date_data['dtime']];
                        
                        }else  if($day==='Saturday')
                        {
                           //Arayy fotr the date
                           $sut_date_arr[]= ['sut_date'=>$date_data['date']];
                           // Arrey for the Tag Number;
                           $sut_tag_arr[]=['sut_tagg'=>$date_data['tag']];
                           // Arrey for the destination;
                           $sut_dest_arr[]=['sut_dest'=>$date_data['destt']];
                           // Arrey for the Tme;
                          $sut_time_arr[]=['sut_time'=>$date_data['dtime']];
                         }
                        else  if($day==='Sunday')
                        {
                            //Arayy fotr the date
                           $su_date_arr[]= ['su_date'=>$date_data['date']];
                           // Arrey for the Tag Number;
                           $su_tag_arr[]=['su_tagg'=>$date_data['tag']];
                           // Arrey for the destination;
                           $su_dest_arr[]=['su_dest'=>$date_data['destt']];
                           // Arrey for the Tme;
                          $su_time_arr[]=['su_time'=>$date_data['dtime']];
                        }
                     endforeach; ?>
                    <!-- Monday -->
                <td><b>Tag Number</b> <br>
                    <?php $c=1;
                    foreach($m_tag as $monday_tag):
                    $mnd_tag=$monday_tag['tagg'];
                    echo "$c, ".$mnd_tag."<br> <hr>";
                        $c++; 
                        endforeach;
                    ?></td>
                <td> <b>Destination Place</b>  <br>
                <?php 
                    foreach($m_dest_arr as $monday_dest):
                    $mnd_dest=$monday_dest['dest'];
                    echo $mnd_dest."<br> <hr>";
                        endforeach;
                    ?>
                    </td>
                <td> <b>Departure Date</b>  <br>
                <?php 
                    foreach($mon_date_arr as $monday_date):
                    $mnd_date=$monday_date['datee'];
                    echo $mnd_date."<br> <hr>";
                        endforeach;
                    ?></td>
                <td> <b> Departure Time</b> <br>
                <?php 
                    foreach($m_time_arr as $monday_time):
                    $mnd_time=$monday_time['time'];
                    echo $mnd_time."<br> <hr>";
                        endforeach;
                    ?>
                    </td>

                <!-- Tuesday -->
                <td><b>Tag Number</b> <br>
                    <?php $c=1;
                    foreach($tu_tag_arr as $tuesday_tag):
                    $tus_tag=$tuesday_tag['tagg'];
                    echo "$c, ".$tus_tag."<br> <hr>";
                        $c++;
                        endforeach;
                    ?></td>

                <td> <b>Distenation Place</b> <br>
                <?php 
                    foreach($tu_dest_arr as $tuesday_dest):
                    $tus_dest=$tuesday_dest['tu_dest'];
                    echo $tus_dest."<br> <hr>";
                        endforeach; 
                    ?>
                </td>
                <td><b>Departure Date</b>  <br>
                <?php 
                    foreach($tu_date_arr as $tuesday_date):
                    $tus_date=$tuesday_date['tu_date'];
                    echo $tus_date."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                <td><b>Departure Time</b>  <br>
                <?php 
                    foreach($tu_time_arr as $tuesday_time):
                    $tus_dtime=$tuesday_time['tu_time'];
                    echo $tus_dtime."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                        <!-- End of Tuesday -->
                
                <!-- Wednesday -->
                <td><b>Tag Number</b> <br>
                    <?php $c=1;
                    foreach($wu_tag_arr as $wednesday_tag):
                    $wu_tag=$wednesday_tag['wu_tagg'];
                    echo $wu_tag."<br> <hr>";
                        $c++;
                        endforeach;
                    ?></td>

                <td><b>Distenation Place</b>  <br>
                <?php 
                    foreach($wu_dest_arr as $wednesday_dest):
                    $wu_dest=$wednesday_dest['wu_dest'];
                    echo $wu_dest."<br> <hr>";
                        endforeach;
                    ?>
                </td> 
                <td><b>Departure Date</b>  <br>
                <?php 
                    foreach($wu_date_arr as $wednesday_date):
                    $wu_date=$wednesday_date['wu_date'];
                    echo $wu_date."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                <td><b>Departure Time</b>  <br>
                <?php 
                    foreach($wu_time_arr as $wednesday_time):
                    $wu_dtime=$wednesday_time['wu_time'];
                    echo $wu_dtime."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                        <!-- End of the Wednesday -->

                        <!-- Thursday -->
                       <td><b>Tag Number</b>  <br>
                       <?php $c=1;
                    foreach($th_tag_arr as $Thursday_tag):
                    $th_tag=$Thursday_tag['th_tagg'];
                    echo $th_tag."<br> <hr>";
                        $c++;
                        endforeach;
                        ?>
                        </td>
                     
                <td><b> Distenation Place</b> <br>
                <?php 
                    foreach($th_dest_arr as $Thursday_dest):
                    $th_dest=$Thursday_dest['th_dest'];
                    echo $th_dest."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                <td><b>Departure Date</b>  <br>
                <?php 
                    foreach($th_date_arr as $Thursday_date):
                    $th_date=$Thursday_date['th_date'];
                    echo $th_date."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                <td><b>Departure Time</b>  <br>
                <?php 
                    foreach($th_time_arr as $Thursday_time):
                    $th_dtime=$Thursday_time['th_time'];
                    echo $th_dtime."<br> <hr>";
                        endforeach;
                    ?> 
                    </td>
                        <!-- End of the Thursday -->
                 </tr>
                </table>
                        <!-- /////////////////////////////////// -->

                        <!-- 2nd halp table -->
                         <br>
                         <table class="table2">
                            <tr>
                            <th colspan="4" style="background-color:yellow;">
                                Friday
                            </th>
                            <th colspan="4" style="background-color:pink;">
                                Saturday
                            </th>
                            <th colspan="4" style="background-color:orange;">
                                Sunday
                            </th>
                        </tr>
                        <tr>
                        <td>Tag Number <br>
                       <?php $c=1;
                    foreach($fri_tag_arr as $Friday_tag):
                    $fri_tag=$Friday_tag['fri_tagg'];
                    echo $fri_tag."<br> <hr>";
                        $c++;
                        endforeach;
                        ?>
                        </td>
                     
                <td>Distenation <br>
                <?php 
                    foreach($fri_dest_arr as $Friday_dest):
                    $fri_dest=$Friday_dest['fri_dest'];
                    echo $fri_dest."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                <td> Departure Date <br>
                <?php 
                    foreach($fri_date_arr as $Friday_date):
                    $fri_date=$Friday_date['fri_date'];
                    echo $fri_date."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                <td>Departure Time <br>
                <?php 
                    foreach($fri_time_arr as $Friday_date):
                    $fri_dtime=$Friday_date['fri_time'];
                    echo $fri_dtime."<br> <hr>";
                        endforeach;
                    ?>
                    </td>
                        <!-- //////////////// -->
                    <td>Tag Number <br>
                       <?php $c=1;
                    foreach($sut_tag_arr as $saturday_tag):
                    $sut_tag=$saturday_tag['sut_tagg'];
                    echo $sut_tag."<br> <hr>";
                        $c++;
                        endforeach;
                        ?>
                        </td>
                     
                <td>Distenation <br>
                <?php 
                    foreach($sut_dest_arr as $saturday_dest):
                    $sut_dest=$saturday_dest['sut_dest'];
                    echo $sut_dest."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                <td> Departure Date <br>
                <?php 
                    foreach($sut_date_arr as $saturday_date):
                    $sut_date=$saturday_date['sut_date'];
                    echo $sut_date."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                <td>Departure Time <br>
                <?php 
                    foreach($sut_time_arr as $saturday_time):
                    $sut_dtime=$saturday_time['sut_time'];
                    echo $sut_dtime."<br> <hr>";
                        endforeach;
                    ?>
                    </td>
                    <!-- //////////////////////////////////// -->
                    <td>Tag Number <br>
                       <?php $c=1;
                    foreach($su_tag_arr as $sunday_tag):
                    $su_tag=$sunday_tag['su_tagg'];
                    echo $su_tag."<br> <hr>";
                        $c++;
                        endforeach;
                        ?>
                        </td>
                     
                <td>Distenation <br>
                <?php 
                    foreach($su_dest_arr as $sunday_dest):
                    $su_dest=$sunday_dest['su_dest'];
                    echo $su_dest."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                <td> Departure Date <br>
                <?php 
                    foreach($su_date_arr as $sunday_date):
                    $su_date=$sunday_date['su_date'];
                    echo $su_date."<br> <hr>";
                        endforeach;
                    ?>
                </td>
                <td>Departure Time <br>
                <?php 
                    foreach($su_time_arr as $sunday_time):
                    $su_dtime=$sunday_time['su_time'];
                    echo $su_dtime."<br> <hr>";
                        endforeach;
                    ?>
                    </td>
                    <!-- ///////////////////////////// -->
                        </tr>
                           
                         </table>



   
                    <!-- Data insert to Database -->

</body>
</html>