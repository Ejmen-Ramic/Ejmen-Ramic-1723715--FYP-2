<?php
session_start();

$isAdmin = false;

if (isset($_SESSION["isLogin"])) {

    if ($_SESSION["isLogin"] == true) {

        if($_SESSION["priv"] == 1){
            $isAdmin = true;
        }
    } else {
        unset($_SESSION["isLogin"]);
    }

}else{
    header("location: index.php");
}

?>

<center>
<?php if($isAdmin == true){ ?>
    <div class="admin">
        WELCOME ADMIN
    </div>

<?php }else{ ?>
    <div class="admin">
        SORRY, THIS PAGE IS FOR ADMIN ONLY
    </div>
<?php }; ?>


<br>
<a href="profile.php" class="go_back">Profile</a>

</center>
<style>
    * {
	position: relative;
	overflow-x: hidden;
	background: whitesmoke;
}

    .admin{
        margin: auto;
        width: 50%;
        padding: 10px;
        font-size: 70px;
        margin-top: 15%;
    }

    .go_back{
	background-color: #606e79;
	border: none;
	color: white;
	padding: 10px 30px;
	border-radius: 5px;
	max-width: 100%;
	height: auto;
	text-decoration: none;
	display: inline-block;
	font-size: 2vw;
	margin: 4px 2px;
	transition-duration: 0.4s;
	cursor: pointer;
	flex: auto;
    font-weight: 800;
}

.go_back:hover {
	background-color: white;
	color: black;
    font-weight: 800;

}
    </style>