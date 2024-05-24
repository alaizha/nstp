<!DOCTYPE html>
<html>
    <title>Login Form in HTML and CSS | ITC-111</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url("bgBaco.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.wrapper {
    width: 420px;
    background: rgb(218, 242, 219, 0.8);
    border: 2px solid rgb(255, 255, 255, .2);
    backdrop-filter: blur(1.5px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    color: rgb(0, 0, 0);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 30px 40px;
}

.wrapper h1{
    font-size: 36px;
    text-align: center;
}

.wrapper .input-box{
    position: relative;
    margin: 30px 0;
}

.input-box input{
    width: calc(100% - 15px);
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(9, 9, 9, 0.2);
    border-radius: 40px;
    padding: 0 20px;
    font-size: 16px;
    color: rgb(2, 2, 2);
    
}

.input-box input::placeholder{
    color: rgb(7, 7, 7);
}

.input-box i{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.wrapper .remember-forgot{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}

.remember-forgot label input{
    accent-color: gray;
    margin-right: 3px;
}

.remember-forgot a{
    color: rgb(9, 9, 9);
    text-decoration: none;
    transition: color 0.3s
}

.remember-forgot a:hover{
    text-decoration: underline;
    color: rgb(35, 137, 81);
}

.wrapper .btn{
    width: 100%; 
    height: 45px;
    background: white;
    border: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
    transition: background 0.10s;
}

.wrapper .btn:hover {
    background: rgb(143, 189, 162)
}

.wrapper .register-link{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}

.register-link p a {
    color: black;
    text-decoration: none;
    font-weight: 600; 
    transition: color 0.3s;
}

.register-link p a:hover {
    text-decoration: underline;
    color: rgb(36, 171, 99);
}

.wrapper .login-link{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}

.login-link p a {
    color: rgb(0, 0, 0);
    text-decoration: none;
    font-weight: 600; 
    transition: color 0.3s;
}

.login-link p a:hover {
    text-decoration: underline;
    color: rgb(33, 174, 78);
}

.learn-more-link {
    color: white; /* Link color */
    text-decoration: underline; /* Underline the link */
    cursor: pointer; /* Show pointer cursor on hover */
    transition: color 0.3s; /* Smooth transition for color change */
}

/* Change link color on hover */
.learn-more-link:hover {
    color: lightcoral; /* New color on hover */
}
</style>

    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
        <div class = "wrapper">
            <form action="">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username"
                    required>
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password"
                    required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me
                    </label>
                    <a href="">Forgot password?</a>
                </div>
                <button type = "submit" class = "btn">Login</button>
                <div class = "register-link">
                <p>Don't have an account? <?php echo '<a href="/register">Register</a>'; ?></p>
                </div>

            </form>
        </div>
    </body>
</html>