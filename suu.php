
    <?php
 if (isset($_GET["id"]))
                {
                    $sql_query="select * from users_items where id={$_GET["id"]}";
                    $result_query=$con->query($sql_query);
                    if($result_query->num_rows>0)
                    {
                        $row = $result_query-> fetch_assoc();
                    }
                    else{
                        
                    }
                }
?>