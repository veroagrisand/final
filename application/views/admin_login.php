<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login dan Daftar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        .header h1 {
            margin: 10px 0 0;
            font-size: 24px;
            color: #007bff;
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .toggle-link {
            text-align: center;
            margin-top: 10px;
        }
        .toggle-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .toggle-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container" id="login-container">
        <div class="header">
            <img src="logosma.png" alt="Logo SMA">
            <h1>SIDISIPLIN</h1>
        </div>
        <div class="form-header">
            <h2>Login</h2>
        </div>
        <form id="login-form">
            <div class="form-group">
                <label for="login-email">Email</label>
                <input type="email" id="login-email" required>
            </div>
            <div class="form-group">
                <label for="login-password">Password</label>
                <input type="password" id="login-password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
        <div class="toggle-link">
            <p>Belum punya akun? <a href="#" onclick="toggleForms()">Daftar Sekarang</a></p>
        </div>
    </div>

    <div class="container" id="register-container" style="display: none;">
        <div class="header">
            <img src="logosma.png" alt="Logo SMA">
            <h1>SIDISIPLIN</h1>
        </div>
        <div class="form-header">
            <h2>Daftar</h2>
        </div>
        <form id="register-form">
            <div class="form-group">
                <label for="register-username">Username</label>
                <input type="text" id="register-username" required>
            </div>
            <div class="form-group">
                <label for="register-email">Email</label>
                <input type="email" id="register-email" required>
            </div>
            <div class="form-group">
                <label for="register-password">Password</label>
                <input type="password" id="register-password" required>
            </div>
            <div class="form-group">
                <label for="register-confirm-password">Konfirmasi Password</label>
                <input type="password" id="register-confirm-password" required>
            </div>
            <div class="form-group">
                <button type="submit">Daftar</button>
            </div>
        </form>
        <div class="toggle-link">
            <p>Sudah punya akun? <a href="#" onclick="toggleForms()">Login Sekarang</a></p>
        </div>
    </div>

    <script>
        function toggleForms() {
            const loginContainer = document.getElementById('login-container');
            const registerContainer = document.getElementById('register-container');
            if (loginContainer.style.display === 'none') {
                loginContainer.style.display = 'block';
                registerContainer.style.display = 'none';
            } else {
                loginContainer.style.display = 'none';
                registerContainer.style.display = 'block';
            }
        }
    </script>
</body>
</html>
