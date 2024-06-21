<?php
session_start();
include "header.php";
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    <link rel="stylesheet" href="/style.css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head> 
<body> 
    <header> 
        <div class="header_text"> 
            <div class="header_text_left"> 
                    <div class="header_left">
                        <h1>ENJOY  
                        EVERY SIP</h1> 
                        <h3>The ultimate refreshing drink 
                        to enjoy in every festival</h3> <br> 
                        <button class="header_text_left_button">Купить</button> 
                    </div>
            </div> 
 
            <div class="header_text_right"> 
                <img src="images/battle.png" alt="" id="battle"> 
                <img src="images/FIZZ.png" alt="" id="fizz"> 
            </div> 
        </div> 
    </header> 
 
    <main> 
        <div class="main_nav"> 
            <div class="main_nav_placeholder"> 
                <img src="images/battle_pack.png" alt=""> 
                <p>1 pack</p> 
            </div> 
 
            <div class="main_nav_placeholder"> 
                <img src="images/battle_pack_1.png" alt=""> 
                <p>2 pack</p> 
            </div> 
 
            <div class="main_nav_placeholder"> 
                <img src="images/battle_pack_1.png" alt=""> 
                <p>2 pack</p> 
            </div> 
 
            <div class="main_nav_placeholder"> 
                <img src="images/battle_pack_1.png" alt=""> 
                <p>2 pack</p> 
            </div> 
        </div> 
 
        <div class="main_cards"> 
            <div class="main_card"> 
                <div class="main_card_img"> 
                    <img src="images/micro_battle.png" alt=""> 
                </div> 
                <div class="main_card_name"> 
                    <p>All New</p> 
                    <h2>Cool Berry</h2> 
                </div> 
                <div class="main_card_footer"> 
                    <h3>₹ 200</h3> 
                    <div class="plus"> 
                        <a href=""><img src="images/plus.png" alt=""></a> 
                    </div> 
                </div> 
            </div>

            <div class="main_card"> 
                <div class="main_card_img"> 
                    <img src="images/micro_battle.png" alt=""> 
                </div> 
                <div class="main_card_name"> 
                    <p>All New</p> 
                    <h2>Cool Berry</h2> 
                </div> 
                <div class="main_card_footer"> 
                    <h3>₹ 200</h3> 
                    <div class="plus"> 
                        <a href=""><img src="images/plus.png" alt=""></a> 
                    </div> 
                </div> 
            </div>

            <div class="main_card"> 
                <div class="main_card_img"> 
                    <img src="images/micro_battle.png" alt=""> 
                </div> 
                <div class="main_card_name"> 
                    <p>All New</p> 
                    <h2>Cool Berry</h2> 
                </div> 
                <div class="main_card_footer"> 
                    <h3>₹ 200</h3> 
                    <div class="plus"> 
                        <a href=""><img src="images/plus.png" alt=""></a> 
                    </div> 
                </div> 
            </div>

            <div class="main_card"> 
                <div class="main_card_img"> 
                    <img src="images/micro_battle.png" alt=""> 
                </div> 
                <div class="main_card_name"> 
                    <p>All New</p> 
                    <h2>Cool Berry</h2> 
                </div> 
                <div class="main_card_footer"> 
                    <h3>₹ 200</h3> 
                    <div class="plus"> 
                        <a href=""><img src="images/plus.png" alt=""></a> 
                    </div> 
                </div> 
            </div>
        </div> 
 
        <hr class="main_hr"> 
 
        <div class="main_catalog"> 
            <div class="main_catalog_card"> 
                    <div class="main_catalog_card_img"> 
                        <img src="images/battle_3.png" alt=""> 
                    </div> 
                    <div class="main_catalog_card_name"> 
                        <p>All New</p> 
                        <h2>Cool Berry</h2> 
                    </div> 
                    <div class="main_catalog_card_footer"> 
                        <h3>₹ 200</h3> 
                        <div class="plus"> 
                            <a href=""><img src="images/plus.png" alt=""></a> 
                        </div> 
                    </div> 
            </div> 

            <div class="main_catalog_card"> 
                    <div class="main_catalog_card_img"> 
                        <img src="images/battle_4.png" alt=""> 
                    </div> 
                    <div class="main_catalog_card_name"> 
                        <p>All New</p> 
                        <h2>Cool Berry</h2> 
                    </div> 
                    <div class="main_catalog_card_footer"> 
                        <h3>₹ 200</h3> 
                        <div class="plus"> 
                            <a href=""><img src="images/plus.png" alt=""></a> 
                        </div> 
                    </div> 
            </div> 
 
            <div class="main_catalog_button"> 
                <button>show more</button> 
            </div> 
            <hr class="main_catalog_hr"> 
        </div> 
    </main> 
 
    <footer> 
        <!-- <div class="footer_info"> 
            <div class="footer_left"> 
                <img src="" alt=""> 
            </div> 
 
            <div class="footer_right"> 
                <div class="footer_right_name">ENJOY EVERY SIP</div> 
                <div class="footer_ridht_lastname">Our Contacts</div> 
                <div class="footer_ridht_links"> 
                    <ol> 
                        <li><a href="">Cool Berry</a></li>
                        <li><a href="">Cool Berry</a></li> 
                        <li><a href="">Cool Berry</a></li> 
                    </ol> 
                    <ol> 
                        <li><a href="">Cool Berry</a></li> 
                        <li><a href="">Cool Berry</a></li> 
                        <li><a href="">Cool Berry</a></li> 
                    </ol> 
                </div> 
            </div> 
        </div> 
        <div class="footer_end"> 
            <img src="images" alt=""> 
        </div> 
    </footer> 


    <div class="modal" tabindex="-1" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
        })
    </script>
</body> 
</html>