<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAM | CONTACT</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <Style>
        body {
            font-family: "Graduate", serif;
            background-color: #000;
            background-image: linear-gradient(rgba(0,0,0,.5)) ,url('./asserts/images/15.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: #fff;
        }
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: scale(1.2);
            opacity: 0.8;
        }
    </Style>
</head>
<body>
       <!-- Header -->
       <header class="flex justify-between items-center p-6 md:p-10">
        <div class="text-3xl font-bold tracking-wider"><a href="./index">SAM</a></div>
        <div class="flex gap-4">
            <button class="px-4 py-2 rounded-full border border-transparent hover:border-white/30 transition-all"><a href="./auth/signin">SIGN IN</a></button>
            <button class="px-4 py-2 rounded-full bg-black/30 backdrop-blur-sm border border-white/30 hover:bg-black/50 transition-all"><a href="./auth/signup">SIGN up</a></button>
        </div>
    </header>

    <h1 class="text-center font-extrabold text-4xl mt-3">contact me</h1>
    <div class="flex w-full justify-between items-center my-4">
        <div class="w-1/ flex flex-col gap-4 m-4">
           <div class="flex gap-3 bg-black/30 justify-center items-center rounded-xl p-6"> 
                <i class="fas fa-user"></i>
                <div>
                    <h1 class="text-2xl font-bold">address</h1>
                    <p>kigali-kicukiro-gahanga</p>
                    <p>p.box 13435</p>
                </div>
           </div>
           <div class="flex gap-3 bg-black/30 justify-center items-center rounded-xl p-6"> 
                <i class="fas fa-user"></i>
                <div>
                    <h1 class="text-2xl font-bold">phone</h1>
                    <p>+250 724 976 283</p>
                    <p>+250 724 935 868</p>
                </div>
           </div>
           <div class="flex gap-3 bg-black/30 justify-center items-center rounded-xl p-6"> 
                <i class="fas fa-user"></i>
                <div>
                    <h1 class="text-2xl font-bold">email and what'sup</h1>
                    <p>email: samueluwayo17@gmail.com</p>
                    <p>what'sup: +250 724 976 283</p>
                </div>
           </div>
           
        </div>
        <div class="w-1/2 mr-3">
            <form action="" method="post" class="w-full flex flex-col gap-3 bg-black/50 rounded-md p-10">
                <input type="text" name="name" class="px-6 outline-none py-3 rounded-lg border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50" placeholder="please enter your full names" >
                <input type="email" name="email"class="px-6 outline-none py-3 rounded-lg border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50"  placeholder="please enter your email" >
                <input type="number" name="phone"class="px-6 outline-none py-3 rounded-lg border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50"  placeholder="please enter your phone number" >
                <textarea name="massage"class="px-6 outline-none py-3 rounded-lg border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50"  placeholder="plaese enter your massage here..."></textarea>
                <button class="w-full px-6 py-3 rounded-full border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50">send</button>
            </form>
        </div>
    </div>
     <!-- Social Media Icons -->
     <div class="absolute bottom-10 left-10 flex gap-8 justify-self-center items-center">
        <a href="#" class="social-icon text-white text-2xl">
            <i class="fab fa-google"></i>
        </a>
        <a href="#" class="social-icon text-white text-2xl">
            <i class="fab fa-slack"></i>
        </a>
        <a href="#" class="social-icon text-white text-2xl">
            <i class="fab fa-github"></i>
        </a>
    </div> 
</body>
</html>