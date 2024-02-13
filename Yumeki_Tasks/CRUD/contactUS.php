

<?php
$title = "Contact US";
$md="Please use appropriate meta Description";
$css="styles_JiaweiLi.css";
include 'header.php'; ?>




<div class="container" style="min-height: 655px">
    <div class="row" style="padding-top: 90px">
        <div class="col-sm-6">
            <div class="words">
                <p>Have Question? Let's Get In Touch</p><br>

            </div>
            <div class="d-flex align-items-start">

                <div class="linkMethod">
                    <i class="fa-solid fa-envelope icon2"
                       style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                </div>

                <div class="eca">
                    <p style="font-weight: 800;">Email Address</p>
                    <p>supportus@dkdk.com</p><br>
                </div>
            </div>

            <div class="d-flex align-items-start">

                <div class="linkMethod">
                    <i class="fa-solid fa-phone icon2"
                       style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                </div>

                <div class="eca">
                    <p style="font-weight: 800; ">Call Us</p>
                    <p>+358 12377658</p><br>
                </div>
            </div>

            <div class="d-flex align-items-start">

                <div class="linkMethod">
                    <i class="fa-solid fa-location-dot icon2"
                       style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                </div>

                <div class="eca">
                    <p style="font-weight: 800;">Address</p>
                    <p>mikokadu 16 A</p>
                </div>

            </div>

        </div>




        <div class="col-sm-6">
            <form name="contactUs" method="post">

                <p style="text-align: center;font-size: 28px; font-weight: bold;">Send Message</p><br>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First name here" aria-label="First name" id="first_name" name="first_name">
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last name here" aria-label="Last name" id="last_name" name="last_name"><br>
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Add email" aria-label="First name" id="email" name="email" onblur="validateEmail()">
                        <span id="emailError"></span>
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="How can we help you?"
                               aria-label="Last name" id="howtohelp" name="howtohelp"><br>
                    </div>

                    <div>
                        <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment" style="height: 180px"></textarea><br>
                    </div>
                    <div>
                        <button class="buttonSM" type="submit" name="submit" onclick="submitForm(this)">Send Message</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>


<?php include 'footer.php'; ?>
<script>
    function validateEmail(){
        const pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        let email = document.getElementById("email").value;


        if(pattern.test(email)){
            document.getElementById("emailError").innerHTML = "Correct address!";
            return true;
        }
        else{
            document.getElementById("emailError").innerHTML = "Wrong address, please input again.";
            return false;
        }
    }

    function submitForm(submitButton){
        if(validateEmail()){
            submitButton.form.action = "../processCon.php";
        }
        else{
            alert("Wrong address, please input again.")
        }
    }

</script>

