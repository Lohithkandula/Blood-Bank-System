<?php
$i=0;
if(isset($_POST['searchBtn'])){
    require_once 'php/DBConnect.php';
    $db = new DBConnect();
    
    $bloodType = $_POST['blood_group'];
    $donors = $db->getDonorsByBloodType($bloodType);
}
$title = "Contact Us";
$setContactActive = "active";
include 'layout/_header.php';

include 'layout/navbar.php';
?>


<section id="contact">
        <!-- <div class="title">
            <h1 class="font-color">Contact Us</h1>
            <div class="line"></div>
        </div> -->
        <div class="contact_us">
            <form class="cform" action="" method="post">
                <div class="crow-message">
                    <h1>Send us a message</h1>
                    <div></div>
                </div>
                <div class="crow-in">
                        <input type="text" id="name" name="name" placeholder="Your name">
                        <input type="text" id="email" name="email" placeholder="Your Email id">
                </div>
                <div class="crow">
                    <div class="ccol-left">
                        <select name="country" id="country">
                            <option value="India">India</option>
                            <option value="Russia">Russia</option>
                            <option value="usa">USA</option>
                            <option value="Japan">Japan</option>
                            <option value="France">France</option>
                            <option value="Brazil">Brazil</option>
                        </select>
                    </div>
                </div>
                <div class="crow">
                    <div class="ccol-left">
                        <textarea type="text" id="remarks" name="remarks" placeholder="Your Remarks....." style="height: 150px;"></textarea>
                    </div>
                </div>
                <input class="crow-s" type="submit" value="Submit">
            </form>
            <div class="cbox">
                <div>
                    <p class="cbox-message"><b>Prefer some other way ?<br>Reach us by using the details given below</b></p>
                <div class="cbox-line"></div>
                </div>
                <div class="c_boxx">
                    <a href="mailto:abc@gmail.com"><i class="fa fa-envelope"></i>
                        Mail: abc@gmail.com
                    </a>
                </div>
                <div class="c_boxx">
                    <a href="tel:+91-12345-67890"><i class="fa fa-phone"></i>
                        Phone: (+91) 9492201555
                    </a>
                </div>
                <div class="c_boxx">
                    <a href="#"><i class="fa fa-map-marker"></i>
                        Location: Guntur,Andhara Pradesh,India
                    </a>
                </div>
            </div>
        </div>
    </section>
<style>
    body{
        background-image: url("https://media.istockphoto.com/id/1311934969/photo/contact-us.jpg?s=612x612&w=0&k=20&c=_vmYyAX0aFi-sHH8eYS-tLLNfs1ZWXnNB8M7_KWwhgg=");
        background-size:cover;
        background-repeat: no-repeat;
    }
    #contact {
  width: 85%;
  
}
.crow-message{
    color: white;
}
.contact_us {
  /* margin-top: 3rem; */
  padding-left: 50px;
  display: flex;
  font-family: var(--ff-roboto);
}

form {
  width: 50%;
}

.cbox {
  width: 45%;
  margin-left: 70px;
  padding-top: 200px;
  
}

.cbox-message {
  font-size: 20px;
  margin: 0;
  
}

.cbox-line {
  width: 20%;
  height: 0.2em;
  background-color: #fb036b;
  margin-bottom: 3em;
  margin-top: 1em;
}

.c_boxx a p {
  color: white;
  font-size: 1em;
  font-weight: 100;
  padding: 1rem;
  padding: 0px 40px;
}

.c_boxx a {
  padding: 1em;
  margin-bottom: 2em;
  padding-left: 2em;
  border: 0.1em solid #fc036b;
  background-color: #fc036b;
  color: white;
  display: flex;
  border-radius: 2em;
  align-items: center;
  border: #fc036b 0.1em solid;
  font-size: 1em;
}

.c_boxx a:hover {
  background-color: white;
  color: #fc036b;
  transition: all 0.5s ease;
}

.c_boxx i {
  font-size: 38px;
  margin-right: 10px;
  /* margin-left: 0.5em; */
}

input[type="text"],
select,
textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 0px 0px 7px 6px;
  display: inline-block;
}

input[type="submit"] {
  background-color: #fc036b;
  color: whitesmoke;
  padding: 12px 50px;
  border: 2px solid #fc036b;
  border-radius: 100vmax;
  cursor: pointer;
  font-family: var(--ff-montserrat);
  font-size: var(--fs-links-btns);
}

input[type="submit"]:hover {
  background-color: whitesmoke;
  color: #fc036b;
}

.cform {
  background-color: #222;
  padding: 1em;
  border-radius: 0.5rem;
}

.ccol {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.crow-in {
  width: 100%;
  display: flex;
  justify-content: space-between;
}

.crow-message {
  margin: 1rem;
}

.crow-message div {
  width: 20%;
  display: block;
  height: 1em;
  border-bottom: 3px solid #fc036b;
}

.ccol-left {
  margin: 1em;
}

.ccol {
  float: left;
  width: 100%;
  margin-top: 6px;
}

#name {
  width: 90%;
  margin: 1em;
}

#email {
  width: 90%;
  margin: 1em;
}

.crow:after,
.crow-s::after {
  content: "";
  display: table;
  clear: both;
}

.crow-s {
  margin: 1em;
  color: #fc036b;
}
</style>

<script>
   
</script>