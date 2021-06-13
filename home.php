<?php echo "rrrrr"; ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>iEducate - Transforming Online Education</title>
</head>

<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="img/img.jpg" alt="logo"></div>
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
        <div class="rightNav v-class-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    <section class="background firstSection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">The Future of Education is here</p>
                <p class="text-small">In this world of 7 billion people we need to educate all of them. This is the
                    future of an educated world and we are proud to say that the Future of Education is here</p>
                <div class="buttons">
                    <button class="btn">Subscribe</button>
                    <button class="btn">Watch Video</button>

                </div>
            </div>

            <div class="secondHalf">
                <img src="img/img.jpg" alt="Laptop Image">
            </div>
        </div>
    </section>

    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big">The end of your search is here</p>
        <p class="sectionSubTag text-small">ducation is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits.
        Educational methods include teaching, training, storytelling, discussion and directed research. Education frequently
        takes place under the guidance of educators, however learners can also educate themselves.[1] Education can take place
        in formal or informal settings and any experience that has a formative effect on the way one thinks, feels, or acts may
        be considered educational. The methodology of teaching is called pedagogy.education in zambia </p>
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/900x900/?coding,apple" alt="laptop image" class="imgFluid">
        </div>
    </section>

    <section class="section section-left" id="about">
        <div class="paras">
        <p class="sectionTag text-big">Transforming Education in India</p>
        <p class="sectionSubTag text-small">Many public schools provide a free education through the government. Parents may send their own children to a private
        schools, but they must pay for it. In some poorer places, some children cannot go to school, because their countries do
        not make education available in their countries, or because their families do not have enough money, or because the
        children have to work for money, or because the society have negative prejudice on education for girls.The city of Alexandria in
        Egypt, established in 330 BCE, became the successor to Athens as the intellectual cradle of Ancient Greece. There, the
        great Library of Alexandria was built in the 3rd century BCE. European civilizations suffered a collapse of literacy and
        organization following the fall of Rome in CE 476.</p>
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/900x900/?coding,apple,html" alt="laptop image" class="imgFluid">
        </div> 
    </section>
    <section class="section" id="services">
        <div class="paras">
        <p class="sectionTag text-big">Lets Grow Together</p>
        <p class="sectionSubTag text-small">Education began in prehistory, as adults trained the young in the knowledge and skills deemed necessary in their
        society. In pre-literate societies, this was achieved orally and through imitation. Story-telling passed knowledge,
        values, and skills from one generation to the next. As cultures began to extend their knowledge beyond skills that could
        be readily learned through imitation, formal education developed. Schools existed in Egypt at the time of the Middle
        Kingdom.</p>
        
        <p class="sectionSubTag text-small"> 
        Matteo Ricci (left) and Xu Guangqi (right) in the Chinese edition of Euclid's Elements published in 1607
        Plato founded the Academy in Athens, the first institution of higher learning in Europe. 
         </p>
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/900x900/?javascript,apple, nature, happy" alt="laptop image" class="imgFluid">
        </div>
    </section>
     
    <section class="contact" id="contact">
        <h1 class="text-center">Contact Us</h1>
        <div class="form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your name">
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter Your Phone">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your email">
             <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Ellaborate your concern"></textarea>
            <button class="btn btn-sm btn-dark">Submit</button>
        </div>
    </section>

    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2027 - www.iEducate.com - All rights reserved
        </p>
    </footer>
    <script src="js/resp.js"></script>

</body>

</html>
<!--
    if(isset($_POST['minus']))
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
            if($value['Item_Name']==$_POST['Item_Name'] )
            {   
                if($value['quantity']==0){
                    foreach($_SESSION['cart'] as $key=>$value)
                    {
                        if($value['Item_Name']==$_POST['Item_Name'])
                        {
                            unset($_SESSION['cart'][$key]);
                            $_SESSION['cart']=array_values($_SESSION['cart']);
                            echo"<script>
                            alert('Item Removed');
                            window.location.href='mcart.php';
                            </script>
                            ";
                        }
                    }
                }
                else{
                $i=$_POST['i'];
                $i=$i;
                unset($_SESSION['cart'][$key]);
                $quantity=$_POST['quantity'];
                $_SESSION['cart']=array_values($_SESSION['cart']);
                $_SESSION['cart'][$i]=array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'],'quantity'=>$quantity-1);
                echo"<script>
                alert('Quantity decrease 1');
                window.location.href='mcart.php';
                </script>
                ";
                }
            }
            
        }
    }
    if(isset($_POST['Plus']))
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
            if($value['Item_Name']==$_POST['Item_Name'] )
            {   
                $i=$_POST['i'];
                $i=$i-1;
                unset($_SESSION['cart'][$key]);
                $quantity=$_POST['quantity'];
                $_SESSION['cart']=array_values($_SESSION['cart']);
                $_SESSION['cart'][$i]=array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'],'quantity'=>$quantity+1);
                echo"<script>
                alert('Item Removed');
                window.location.href='mcart.php';
                </script>
                ";
            }
        }
    }-->
    <table class="table table-striped">
                    <thead class="text-center">
                        <tr>
                        <th >Serial no.</th>
                        <th scope="col">Items Name</th>
                        <th scope="col">Items Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php
                        if(isset($_SESSION['cart']))
                        {
                            $total=0;
                            $i=0;
                            foreach($_SESSION['cart'] as $key=>$value)
                            {
                                $total=$total+$value['Price']*$value['quantity'];
                                $i=$i+1;
                                echo"<tr>
                                <td>$i</td>
                                
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]</td>
                                <td>   
                                <form action='cart.php' method='POST'>
                                <input class='text-center' name='quantity' type='hidden' value='$value[quantity]' >
                                <input type='hidden' name='i' value='$i'>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                <input type='hidden' name='Price' value='$value[Price]'>
                                <button class='btn btn-sm btn-success' name='minus'>-</button>  $value[quantity]  <button class='btn btn-sm btn-success' name='Plus'>+</button> </form> </td>
                                <td>
                                <form action='cart.php' method='POST'>
                                <input class='text-center' name='quantity' type='hidden' value='$value[quantity]' >
                                <input type='hidden' name='i' value='$i'>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                <input type='hidden' name='Price' value='$value[Price]'>
                                
                                <button class='btn btn-sm btn-outline-danger' name='Remove'>REMOVE</button>
                                </form>
                                </td>
                                </tr>";
                            }
                            
                        }
                        ?> 
                        
                        
                    </tbody>
                </table>