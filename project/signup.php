<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>
<style>
button {
		background-color: #1281BF;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}
/* set a hover effect for the button*/
	button:hover {
		opacity: 0.8;
	}
/*set the Terms and conditions text*/
	span.psw {
		float: center;
		padding-top: 0px;
	}
/*centre the display image inside the container*/
	.imgcontainer {
		text-align: center;
		margin: 24px 0 24px 0;
		position: relative;
	}
/*set image properties*/
	img.avatar {
		width: 60%;
		border-radius: 50%;
	}
	/*set padding to the container*/
	.container {
		padding: 15px;
	}
/*style the close button*/
	.close {
		position: absolute;
		right: 25px;
		top: 0;
		color: #000;
		font-size: 35px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		cursor: pointer;
	}
/*style the model content box*/
	.modal-content {
		background-color: #fefefe;
		margin: 0% auto 20% auto;
		border: 1px solid #888;
		width: 30%;
	}
.modal {

		position: fixed;

		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		background-color: rgb(0, 0, 0);
		background-color: rgba(0, 0, 0, 0.4);
		padding-top: 60px;
	}
/* add zoom animation*/
	.animate {
		-webkit-animation: animatezoom 0.6s;
		animation: animatezoom 0.6s
	}

	@-webkit-keyframes animatezoom {
		from {
			-webkit-transform: scale(0)
		}
		to {
			-webkit-transform: scale(1)
		}
	}

	@keyframes animatezoom {
		from {
			transform: scale(0)
		}
		to {
			transform: scale(1)
		}
	}

	@media screen and (max-width: 300px) {
		span.psw {
			display: block;
			float: none;
		}

	}
</style>



    <?php flash('register') ?>
    <div id="id01" class="modal">
        <form class="modal-content animate" method="post" action="./controllers/Users.php">

         <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>

                </div>
                <div class="container">

    <form method="post" action="./controllers/Users.php">

        <input type="hidden" name="type" value="register">
        <label><b>Full Name</b></label>
        <input type="text" name="usersName" 
        placeholder="Enter Full Name...">
        <label><b>Email</b></label>
        <input type="text" name="usersEmail" 
        placeholder="Enter Email...">
        <label><b>Username</b></label>
        <input type="text" name="usersUid" 
        placeholder="Enter Username...">
        <label><b>Password</b></label>
        <input type="password" name="usersPwd" 
        placeholder="Enter Password...">
        <label><b>Repeat Password</b></label>
        <input type="password" name="pwdRepeat" 
        placeholder="Re-Enter password">
        <button type="submit" name="submit">Sign Up</button>
        <label><center><small>By signing up for an account you agree to our</small></center></label>
              <span class="psw"> <a href="#"><center><small><u>Terms and Conditions</u></small></center></a></span>

              <label><b><center><br>Already have an account?</center></b></label>
              <button><a href="./login.php">Login</a></button>
        </div>
    </form>
  </div>
<?php 
    include_once 'footer.php'
?>
<script>
		var modal = document.getElementById('id01');
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>