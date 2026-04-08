<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC2289 Zhang Jieding</title> 
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="#">
                <h1>Join Us</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Use your email to sign up</span>
                <input type="text" placeholder="Full Name" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Create Password" required>
                <button type="submit">REGISTER</button>
            </form>
        </div>

        <div class="form-container sign-in">
            <form action="#">
                <h1>Log In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Use your account to sign in</span>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <a href="#" class="forgot">Forgot Password?</a>
                <button type="submit">SIGN IN</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hello , Again!</h1>
                    <img src="images/website_7376495.png" alt="user icon" width="140">
                    <p>Log in to stay connected with us</p>
                    <button class="hidden" id="login">SIGN IN</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome!</h1>
                    <img src="images/unsecure_10399884.png" alt="lock icon" width="140">
                    <p>Enter your details to start your journey</p>
                    <button class="hidden" id="register">SIGN UP</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>CISC3003 Web Programming: DC2289 Zhang Jieding 2026</p>
    </footer>

    <script>
    const container = document.getElementById('container');
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');

    registerBtn.addEventListener('click', () => {
        container.classList.add("active");
    });

    loginBtn.addEventListener('click', () => {
        container.classList.remove("active");
    });
</script>
</body>
</html>