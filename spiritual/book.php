<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
 <style>
     .banner-image{
         background-image:url(bookshell.jpg);
         background-size:100% 100%;
         height:400px;
     }
     .left{
        display:inline-block;
        position:absolute;
        top:20px;
        left:40px;
    }
    .left p{
        color:aliceblue;
        font-family:cursive;
        margin-left:6px;
        margin-top:5px;
        color:#433C3C;
        font-family:Nunito;
        font-size:22px;
    }
    .navbar{
       display:inline-block;
       padding-left:400px;
       padding-right:5px;
       top:-400px;
    }
    .navbar li{
        display:inline-block;
        font-size: 15px;
        font-family:Nunito sans;
    }
    .navbar li a{
        color:black;
        text-decoration: none; 
        padding:15px 17px;
    }
    .navbar li a:hover{
        text-decoration:none;
        font-size:18px;
        color:#808000;
    }
 img {
  border: 1px solid #ddd;
  border-radius: 4px;
  width: 250px;
  margin-top:-20px;
}

 img:hover {
    transform:scale(1.1);
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
#button{
    margin-top:-15px;
    width:250px;
    height:50px;
}
.caption{
    padding-top:10px;
}
.caption p{
    padding-left:55px;
}
.right h3{
    padding-left:400px;
    margin-top:-350px;
}
.right p{
    padding-left:400px;
}
.pagination{
    padding-left:500px;
}
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}
.pagination a.active {
  background-color: dodgerblue;
  color: white;
}
.pagination a:hover:not(.active) {background-color: #ddd;}
    </style>
</head>
<body>
    <div class="banner-image"></div>
    <div class="content">
          <div class="left">
        <p>Modern Monk</p>
        </div>
    <div class="center">
        <ul class="navbar">
            <li><a href="main.php">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="ted.php">TED TALKS</a></li>
            <?php
            $count=0;
            if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
            }
            ?>
            <li><a href="cart.php">CART (<?php echo $count ?>)</a></li>
            <li><a href="">CONTACT</a></li>
        </ul>
    </div>
    <hr>
 </div>
 <div class="jumbotron">
 <a target="_blank" href="Think like a monk.jpeg">
  <img src="Think like a monk.jpeg" alt="novel">
</a>
<form action="manage_cart.php" method="POST">
<div class="caption">
                     <h3>
                         Think Like A Monk 
                     </h3>
                     <p>Price: Rs. 150.00</p>
                     <button type="submit" name="Add_To_Cart" class="btn btn-info" style="margin-left:70px;">Add To Cart</button>
                     <input type="hidden" name="Item_Name" value="Think Like A monk">
                     <input type="hidden" name="Price" value="150">
</div>
</form>
<div class="right">
    <h3> Book Summary </h3>
    <br>
<p>
Think like a monk is a life changing book which includes ancient wisdom and <b>Jay Shetty</b> personal experience in which he reflects the importance of performing once own Dharma and <b>to over come monkey mind by staying present in the moment</b>. It reflects on the importance of detachment yet you are present in everymoment.<br>
The whole book is divided into 3 parts<br>
<b>Let Go<br>
Grow<br>
Give</b><br>
And then each section is divided into different subsection in which he talk about the problem we face and to overcome. The <b>prime focus is on meditation</b> and to stabilize the monkey mind.
<a href="https://www.getstoryshots.com/books/think-like-a-monk-summary/ "> Read More</a>
</p>
</div>
</div>
<div class="jumbotron">
 <a target="_blank" href="who will cry.jpg">
  <img src="who will cry.jpg" alt="novel" style="margin-left:20px; height:250px;">
</a>
<form action="manage_cart.php" method="POST">
<div class="caption">
                     <h3 style="margin-left:-10px;">
                         Who Will Cry When You Die
                     </h3>
                     <p style="margin-left:20px;">Price: Rs. 200.00</p>
                     <button type="submit" name="Add_To_Cart" class="btn btn-info" style="margin-left:70px;">Add To Cart</button>
                     <input type="hidden" name="Item_Name" value="who will cry when you die">
                     <input type="hidden" name="Price" value="200">
</div>
</form>
<div class="right">
    <h3> Book Summary </h3>
    <br>
<p>
Are you one of those who are living their life without any purpose if so, then this book by <b>Robin Sharma</b> will be the life changing book for you, as it changed my life in so many ways so it will definitely add some meanings in your life. 
If you wonder at its title and want to give a read, you will be disappointed, because it is a <b>self Development book</b> and nothing will be relevant to what you are searching in the book regarding the title.
<br>This book starts with a famous saying that <b>"When we were born, we cried, while the world rejoiced. Live your life in such a way that when you die, the world cries, while you rejoice."</b> and this will only occur if you spend your life in kindness, forgiveness, by being honest & polite to everyone. 
<br><b>Leave a legacy behind yourself</b>, so that when you die you will be remembered by people in kind words.
<a href="https://www.getstoryshots.com/books/who-will-cry-when-you-die-summary/ "> Read More</a>
</p>
</div>
</div>
<div class="jumbotron">
 <a target="_blank" href="inner_engineering.jpg">
  <img src="inner_engineering.jpg" alt="novel" style="margin-left:20px; height:250px;">
</a>
<form action="manage_cart.php" method="POST">
<div class="caption">
                     <h3 style="margin-left:25px;">
                        Inner Engineering
                     </h3>
                     <p style="margin-left:20px;">Price: Rs. 210.00</p>
                     <button type="submit" name="Add_To_Cart" class="btn btn-info" style="margin-left:70px;">Add To Cart</button>
                     <input type="hidden" name="Item_Name" value="Inner Engineering">
                     <input type="hidden" name="Price" value="210">
</div>
</form>
<div class="right">
    <h3> Book Summary </h3>
    <br>
<p>
This book is <b>Sadhguru’s</b> instructions on how to improve your experience and the quality of your life, thus creating joy.<b> Sadhguru is the founder of the Isha Foundation</b>, headquartered in the hills in southern India It is a volunteer organization that guides individuals to have a spiritual awakening, thus creating joy.
<br>In this book, <b>Sadhguru discusses meditation, diet, physical exercise, ways of living, and various branches of yoga.</b> He shares both funny and inspiring stories to get his ideas across.<br>
Most of the advice presented here was very down-to-earth.He guides the reader in simple, little exercises that would help create a more joyful life.
<br>This book is entertaining and gives many useful little tips, but too much of it seemed to be about <b>Sadhguru’s life and experiences in achieving the shift of consciousness</b>.
<a href="https://en.wikipedia.org/wiki/Inner_Engineering:_A_Yogi%27s_Guide_to_Joy "> Read More</a>
</p>
</div>
</div>
<div class="jumbotron">
 <a target="_blank" href="in lord krishna's court.jpg">
  <img src="in lord krishna's court.jpg" alt="novel" style="margin-left:20px; height:250px;">
</a>
<form action="manage_cart.php" method="POST">
<div class="caption">
                     <h3>
                        In Lord Krishna's Court<br>
                        <h4 style="margin-left:65px;">After Death<h4>
                     </h3>
                     <p style="margin-left:20px;">Price: Rs. 250.00</p>
                <button type="submit" name="Add_To_Cart" class="btn btn-info" style="margin-left:70px;">Add To Cart</button>
                     <input type="hidden" name="Item_Name" value="In lord Krishna Court">
                     <input type="hidden" name="Price" value="250">
</div>
</form>
<div class="right">
    <h3> Book Summary </h3>
    <br>
<p>
<b>“In Lord Krishna’s Courtroom : After Death.”</b>
We have got a different flavor every time. All the mentioned novels are unique with concepts and the story line nowhere matches the other. This is the reason that we have never seen any reader of <b>Vikrant Shukla</b> speaking negative about any of his novels.
<br>This book is an epic! I say that not only because <b>it talks about Lord Krishna but also because for the first time someone really making an effort to create a dialogue between the God and a Human Being.</b> 
<br>This book should not be confused with a religious literature at all, it talks about what everyone of us goes through,<b> this is not just about the God, the book is about the contrast between Good and Bad. </b>
<br>This book talks about so many things which no one of us is clear about and opens a third eye which gives us a push to think beyond the limits.
<a href="http://bestfictionbookreview.blogspot.com/2015/04/in-lord-krishnas-court-after-death-by.html "> Read More</a>
</p>
</div>
</div>

</div>
<div class="pagination">
  <a class="active" href="book.php">1</a>
  <a href="book1.php">2</a>
  <a href="book2.php">3</a>
  <a href="book1.php">&raquo;</a>
</div>
</body>
</html>