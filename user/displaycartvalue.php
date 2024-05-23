                        <!-- php code -->
                        <?php
                        if($grand_total>=0)
                        {
                            echo"                  
                                <div class='table-total'>
                                  <p>Total: <span><?php echo $grand_total; ?></span></p>
                                </div>
                                <div class='check-out'>
                                    <a href='#'>Proceed to checkout</a>

                                </div>";
                        }
                        ?>