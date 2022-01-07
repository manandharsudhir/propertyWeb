<?php
include('components/header.php');
?>
    <link rel="stylesheet" href="../css/auth.css">
</head>

<body>
    <?php
include('components/nav.php');?>
    <section class="main">
        <section class="img-section"></section>
        <section class="text-section">
            <div class="auth-type">
                <span class="selected-type">Sign In</span>
                <span>Sign Up</span>
            </div>
            <div class="v-space-16"></div>
            <div class="auth-form">
                <div class="inactive-text normal-text">Welcome back</div>
                <div class="extra-big-text bold-text">Login With</div>
                <div class="v-space-24"></div>
                <div class="inactive-text very-small-text">Email Address</div>
                <div class="v-space-8"></div>
                <input type="email" name="email" id="email" class="auth-input">
                <div class="v-space-24"></div>
                <div class="inactive-text very-small-text">Password</div>
                <div class="v-space-8"></div>
                <input type="password" name="password" id="password" class="auth-input">
                <div class="v-space-16"></div>
                <div class="very-small-text bold-text">Forgot Password?</div>
                <div class="v-space-16"></div>
                <div class="auth-btn">
                    Login
                </div>
            </div>


        </section>
    </section>
</body>

</html>