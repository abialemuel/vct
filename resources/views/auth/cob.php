<div id="authentication" class="w3-modal">
        <span
            onclick="document.getElementById('authentication').style.display='none'"
            class="w3-closebtn w3-grey w3-hover-red w3-container w3-padding-16 w3-display-topright">X</span>

        <div class="w3-modal-content w3-card-8 w3-animate-zoom"
            style="max-width: 600px">

            <div class="col-md-6 w3-card-8 w3-teal" onclick="openForm('Login')">
                <h3>Sign In</h3>
            </div>
            <div class="col-md-6 w3-card-8 w3-teal" onclick="openForm('Register')">
                <h3>Sign Up</h3>
            </div>
            <div style="margin-top: 25px !important;">
                <div id="Login" class="w3-container form">
                    <div class="w3-container ">
                        <div class="w3-section">
                            <br> <br>
                            <form action="/login" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="redirurl"
                                    value="{{ $_SERVER['REQUEST_URI'] }}"> <label><b>Username</b></label>
                                <input name="username"
                                    class="w3-input w3-border w3-margin-bottom" type="text"
                                    placeholder="Enter Username" required> <label><b>Password</b></label>
                                <input class="w3-input w3-border w3-margin-bottom"
                                    name="password" type="password" placeholder="Enter Password"
                                    required> <input type="submit"
                                    class="w3-btn w3-btn-block w3-green" value="Login"> <input
                                    class="w3-check w3-margin-top" type="checkbox"
                                    checked="checked"> Remember me
                            </form>
                        </div>
                    </div>
                    <div class="w3-container w3-border-top w3-padding-16 ">
                        <button
                            onclick="document.getElementById('authentication').style.display='none'"
                            type="button" class="w3-btn w3-red">Cancel</button>
                        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
                    </div>
                </div>
            </div>
            <div id="Register" class="w3-container form ">
                <div class="w3-container">
                    <div class="w3-section">
                        <form action="/register" method="POST" id="regForm">
                            {{ csrf_field() }} <input type="hidden" name="redirurl"
                                value="{{ $_SERVER['REQUEST_URI'] }}"> <label><b>Email</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="text"
                                name="email" placeholder="Enter Email"
                                value="{{ old('email') }}" required> <label><b>Username</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="text"
                                name="username" placeholder="Enter username" required
                                value="{{ old('username') }}"> <label><b>Password</b></label> <input
                                class="w3-input w3-border w3-margin-bottom" type="password"
                                name="password" required placeholder="Enter Password"> <label><b>Confirm
                                    Password</b></label> <input
                                class="w3-input w3-border w3-margin-bottom" required
                                type="password" name="password_confirmation"
                                placeholder="Enter Password">
                            <button type="submit" class="w3-btn w3-btn-block w3-green">SignUp</button>
                        </form>
                    </div>
                </div>
                <div class="w3-container w3-border-top w3-padding-16 ">
                    <button
                        onclick="document.getElementById('authentication').style.display='none'"
                        type="button" class="w3-btn w3-red">Cancel</button>
                </div>
            </div>
        </div>
    </div>

<script>
openForm("Login");
function openForm(formName) {
 var x = document.getElementsByClassName("form");
 for (i = 0; i < x.length; i++) {
 x[i].style.display = "none"; }
 document.getElementById(formName).style.display = "block"; }
</script>