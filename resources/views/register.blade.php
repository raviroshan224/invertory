<!DOCTYPE html>
<html>


<head>
    <title>Inventory</title>
    <style>
        .signup {
            text-align: center;
            font-size: 42px
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
            margin-top: 25px;
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
    <h1 class="signup">Sign Up</h1>
    <form class="register" method="post" action="{{ route('signup') }}">
        @csrf

        <label>Name</label>
        <input type="text" placeholder="Name" name="name">

        <label>Email</label>
        <input type="email" placeholder="Email" name="email">

        <label>Password</label>
        <input type="password" placeholder="Password" name="password">

        <label>Confirm Password</label>
        <input type="password" placeholder="Confirm Password" name="cpassword">

        <button>Sign up </button>
        <p><a href="/login"> Already have account? Sign In</a></p>
    </form>
</body>

</html>
