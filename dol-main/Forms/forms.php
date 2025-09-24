<?php
class forms{
    private function submit_button($value){
        echo "<input type='submit' value='{$value}' class='btn'>";
    }

    public function signup(){
        ?>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: linear-gradient(135deg, #74ebd5, #ACB6E5);
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .form-container {
                background: #fff;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 8px 20px rgba(0,0,0,0.2);
                width: 350px;
                text-align: center;
            }
            .form-container h2 {
                margin-bottom: 20px;
                color: #333;
            }
            label {
                float: left;
                margin: 10px 0 5px;
                font-weight: bold;
                color: #555;
            }
            input[type='text'],
            input[type='email'],
            input[type='password'] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 8px;
                outline: none;
                transition: border 0.3s;
            }
            input:focus {
                border-color: #74b9ff;
            }
            .btn {
                background: #0984e3;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                transition: background 0.3s;
            }
            .btn:hover {
                background: #74b9ff;
            }
            .form-container a {
                display: block;
                margin-top: 15px;
                color: #0984e3;
                text-decoration: none;
                font-size: 14px;
            }
            .form-container a:hover {
                text-decoration: underline;
            }
        </style>

        <div class="form-container">
            <h2>Signup Form</h2>
            <form action='submit_signup.php' method='post'>
                <label for='username'>Username:</label>
                <input type='text' id='username' name='username' required>

                <label for='email'>Email:</label>
                <input type='email' id='email' name='email' required>

                <label for='password'>Password:</label>
                <input type='password' id='password' name='password' required>

                <?php $this->submit_button('Sign Up'); ?>
                <a href="login.php">Already have an account? Log in</a>
            </form>
        </div>
        <?php
    }

    public function login(){
        ?>
        <div class="form-container">
            <h2>Login Form</h2>
            <form action='submit_login.php' method='post'>
                <label for='username'>Username:</label>
                <input type='text' id='username' name='username' required>

                <label for='password'>Password:</label>
                <input type='password' id='password' name='password' required>

                <?php $this->submit_button('Log In'); ?>
                <a href="index.php">Don't have an account? Sign up</a>
            </form>
        </div>
        <?php
    }
}
?>

