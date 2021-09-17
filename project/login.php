
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
		.cancelbtn {
			width: 100%;
		}
	}
</style>
    <?php flash('login') ?>
 <div id="id01" class="modal">
    <form class="modal-content animate" method="post" action="./controllers/Users.php">

     <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <img src=
                             "Capture.PNG" alt="Avatar" class="avatar">

            </div>
            <div class="container">
    <input type="hidden" name="type" value="login">
    <label><b>Username/Email</b></label>
        <input type="text" name="name/email"
        placeholder="Enter Username/Email...">
        <label><b>Password</b></label>
        <input type="password" name="usersPwd"
        placeholder="Enter Password...">
        <button type="submit" name="submit">Log In</button>
        <label><b><center>Don’t have an account yet ?</center></b></label>
                 <button> <a href="./signup.php">Sign Up</a></button>
        <div class="form-sub-msg"><a href="./reset-password.php"><u>Forgotten Password?</u></a></div>
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
