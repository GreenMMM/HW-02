<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="/css/style.css" />
</head>
<body bgcolor="blue" background="/img/fon.jpg">
	

    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?>  </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src = "/img/php.jpeg" height = "400" width = "400" alt = "Изменение размера изображения">'; ?>
                                       
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c, ' ', $q; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 7;
                        $c = $a + $b;
                        echo $c,' | ', $_c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> <br>
                    <?php
                        echo "Переменная Y ссылается на ту же область памяти, что и V: $v";
                    ?> <br>
                    <?php
                        echo $e;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                Ученье — свет, а неученье — тьма — знания, приобретённые во время учёбы,
                помогают решать сложные задачи, незнание делает человека беспомощным. Ученье даёт человеку
                знания и умения, открывает перед ним светлые пути.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>

</body>
</html>