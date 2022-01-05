<?php
include 'layout/header.php';

?>
<div class="main">
    <div class="content">
        <div class="login_panel">
            <h3>Existing Customers</h3>
            <p>Sign in with the form below.</p>
            <form action="hello" method="get" id="member">
                <input name="Domain" type="text" value="Username" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
                <input name="Domain" type="password" value="Password" class="field"  >
            </form>
            <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
            <div class="buttons"><div><button class="grey">Sign In</button></div></div>
        </div>
        <div class="register_account">
            <h3>Register New Account</h3>

            <form id="input_form" action=" <?php echo Route::name('auth.register');?>" method="POST" >
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <div>
                                <input type="text" value="" name="first_name" id="first_name"  placeholder="First Name" class="required">
                            </div>
                            <div>
                                <input type="text" value="" name="middle_name"  id="middle_name" placeholder="Middle Name">
                            </div>
                            <div>
                                <input type="text" value="" name="last_name" id="last_name" placeholder="Last Name" >
                            </div>


                            <div>
                                <input type="text" value="" name="email" id="email" placeholder="E-Mail" class='required email'>
                            </div>
                            <div>
                                <input type="text" value="" name="phone"  placeholder="Phone">
                            </div>
                        </td>
                        <td>



                            <div>
                                <input type="text" value="" name="username" placeholder="User name" >
                            </div>

                            <div>
                                <input type="text" value="" name="password" placeholder="Password" >
                            </div>

                            <div>
                                <input type="date" value="" name="date_of_birth" style="margin-top:5px; width: 355px; height: 29.5px;"
                                placeholder="Date of Birth">

                            </div>
                            <div>


                                <textarea type="text" value="" name="address" style="width: 355px; height: 70px; margin-top: 10px;" placeholder="Address"></textarea>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="search"><div><button class="grey">Create Account</button></div></div>

            </form>
            
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php
include 'layout/footer.php';
?>
