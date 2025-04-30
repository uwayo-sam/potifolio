<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAM | SIGN UP</title>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
          body {
            font-family: "Graduate", serif;
            color: white ;
          }
    </style>

</head>

<body class="p-0 m-0 w-[100vw]  h-[100vh] bg-slate-950">

<h1 class=" absolute left-0 text-4xl ml-4 mt-4 font-extrabold"><a href="../">sam</a></h1>

    <div class="flex justify-between">
        
        <div class="flex flex-col justify-center items-centers gap-5 right-10 ml-[200px]">
            <h1 class="text-white font-extrabold text-xl text-center">SIGN UP</h1>
            <form action="../controllers/signUp.php" method="post" class="flex flex-col gap-3">
              <input type="text" name="name" placeholder="please enter your name" class="px-6 outline-none py-3 rounded-lg border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50" required>
              <input type="email" name="email" placeholder="please enter your email" class="px-6 outline-none py-3 rounded-lg border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50" required>
              <input type="password" name="password" placeholder="please enter your password" class="px-6 outline-none py-3 rounded-lg border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50" required>
              <button class="px-6 py-3 rounded-full border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50">sign up</button>
               
            </form>
            <span class="text-center">OR</span>
                     <hr>
            <button class="w-full px-6 py-3 rounded-full border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50"><i class="fab fa-google"></i> sign up with google</button>
           <p>or if already you have an acount <a href="./signin" class="text-blue-500">sign in</a></p>
        </div>
        <div class="w-1/2 h-[100vh]">
            <img src="../asserts/images/2.png" class="w-full h-full rounded-l-2xl shadow-xl" alt="">
        </div>
    </div>
</body>
</html>