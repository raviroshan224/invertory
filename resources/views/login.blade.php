<!DOCTYPE html>
<html>

<head>
    <title>Inventory</title>
    <style>
        .login {
            text-align: center;
            font-size: 42px;
            margin-bottom: 6%;
        }

        label,
        input,
        button,
        a {
            justify-content: center;
            margin-left: 40%;

            display: flex;
            flex-direction: column;
            font-size: 24px;


        }

        input {
            margin-top: 4px;
            margin-bottom: 10px;
            font-size: 20px;
        }

        button {

            background-color: darkorange;
            border-radius: 20px;
            margin-top: 50px;
            margin-left: 45%;
            align-self: center;

        }

        a {
            font-size: 20px;
            color: black;
        }
    </style>


</head>

<body>
    <h1 class="login">Login</h1>
    <form method="post" action="{{ route('login') }}">
        @csrf

        <label>Username</label>
        <input type="email" placeholder="Email" name="email" required>

        <label>Password</label>
        <input type="password" placeholder="Password" name='password' required>

        <button>Login</button>
        <p><a href="/register">Don't have account? Sign Up</a></p>
    </form>
</body>

</html>
