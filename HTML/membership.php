
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taja</title>
    <link rel="stylesheet" href="/CSS/membership.css">
   
</head>
<body>
    <!--navbar start-->
    <div class="nav">
        <ul class="topnav" style="width: 100%;">
            <li><a class="active" href="#href">তাজা</a></li>
            <li><a href="home.html">হোম</a></li>
            <li><a href="category.html">ক্যাটাগরি</a></li>
            <li><a href="about.html">আমাদের সম্পর্কে</a></li>
            <li><a href="contact.html">যোগাযোগ</a></li>
            <li><a href="membership.html">সদস্যপদ</a></li>
            <li><a href="login.html">নিবন্ধন করুন</a></li>
        </ul>
    </div>
    <!--navbar end-->
<div ><img style="width: 100%;"src="/assets/banner.jpg"></div>
<h2 style="color: Green; text-align: center;">কৃষক নিবন্ধনফর্ম
</h2>
<!--form start-->
<form  name="myform" method="post"  onsubmit="return validateform()"  style="text-align: center; background-color: rgb(234, 234, 234);" action="" target="_top">
    <label></label><br>
    <label></label><br>
    <b><label for="fname" style="padding-right:5% ; font-size:20px; color:green">কৃষকের নাম :</label></b>
    <input type="text" id="fname" name="fname" value="" size="30"
        style="height: 35px; width:300px ;background:  rgb(221,255,221); ">

    <label for=" " style="padding-left:2% ;"></label>
    
    <input type="text" id="lname" name="lname" value="" size="30"
        style="height: 35px; width:300px ;background:  rgb(221,255,221);"><br>
    <label for=" "></label><br>
    <label></label><br>
    <b><label for="address" style=" padding-right:8% ;font-size:20px; color:green">ঠিকানা :</label></b>
    <input type="text" id="address" name="address" value="" size="200"
        style="height: 60px; width:640px ;background:  rgb(221,255,221);"><br>
    <label for=" "></label><br>
    <label></label><br>


    <b><label for="number" style=" padding-right:3%;font-size:20px; color:green">মোবাইল নম্বর :</label></b>
    <input type=" text" id="number" name="Contact Number" value="" size="15"
        style="height: 35px; width:280px ;background: rgb(221,255,221);">
    <label for=" " style="padding-left:2% ;"></label>
    <b><label for="category" style=" padding-right:2%;font-size:20px; color:green">ক্যাটাগরি:</label></b>
    <select id="category" name="category" form="categoryform"
        style="height: 35px; width:200px ;background: rgb(221,255,221);">
        <option value="">সবজি
        </option>
        <option value="">মাংস</option>
        <option value="">ফল</option>
        <option value="">মাছ</option>
        <option value="">চাল</option>
        <option value="">ডাল</option>
        <option value="">মসলা</option>

    </select><br>
    <label for=" "></label><br>
    <b><label for="gender" style=" font-size:20px; color:green;padding-right: 35%;">লিঙ্গ :</label></b>
    <b><label for="male " style="color:green;font-size: 20px; ">পুরুষ</label></b>
    <input type="radio" id="male" name="gender" value="male">
    
      <b><label for="female" style="color:green;font-size: 20px;padding-left: 5%;">মহিলা</label></b>
      <input type="radio" id="female" name="gender" value="female"><br>
    <label></label><br>

    <b><label for="rdate" style=" font-size:20px; color:green;padding-right:3%;">নিবন্ধন তারিখ :</label></b>
    <input type="date" id="date" name="date" value="Reg Date" size="15"
        style="height: 35px; width:250px ;background: rgb(221,255,221);">
    <label for=" " style="padding-right:4% ;"></label>
     <b><label for="rdate" style=" font-size:20px; color:green;padding-right: 2%;">ফসলের পরিমাণ :</label></b>
    <input type="text" id="cquantity" name="cquantity" value="Crop Quantity" size="10"
        style="height: 35px; width:150px ;background:  rgb(221,255,221);"><br>
    <label for=" "></label><br>
    <fieldset>
        <legend>
            <h3 style="color:green;font-size: 22px;">অনুগ্রহ করে সাবমিট করুন</h3>
        </legend>
        <input type="submit" style="height: 35px; width:150px ;background:  rgb(221,255,221);">
        <label style="padding-left: 2%;"></label>
        <input type="reset" style="height: 35px; width:150px ;background:  rgb(221,255,221);">
    </fieldset>
</form>
<script src="/JS/formvalidation.js"></script>
</body>
</html>

