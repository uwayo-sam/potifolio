<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAM - Portfolio</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: '#0a0a0a',
                    }
                }
            }
        }
    </script>
    <style>
      body {
            font-family: "Graduate", serif;
            background-color: #000;
            background-image: linear-gradient(rgba(0,0,0,.7)) ,url('../asserts/images/13.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: #fff;
        }
        
        .btn {
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            transform: scale(1.05);
            background-color: rgba(255, 255, 255, 0.2);
        }
       
    </style>
    <style type="text/tailwindcss">
        @layer utilities {
            .nav-icon {
                @apply w-16 h-16 rounded-full bg-gray-800/70 flex items-center justify-center text-white border border-gray-700 hover:bg-gray-700/80 transition-all;
            }
            .nav-button {
                @apply px-8 py-3 border border-gray-600 rounded-full text-white hover:bg-gray-800/50 transition-all;
            }
            .auth-button {
                @apply px-6 py-2 rounded-full text-white border border-gray-700 hover:bg-gray-800 transition-all;
            }
        }
    </style>
</head>
<body class="bg-dark text-white min-h-screen">
    <!-- Background image -->

  <!-- Header -->
     <!-- Header -->
     <header class="flex justify-between items-center p-6 md:p-10">
        <div class="text-3xl font-bold tracking-wider"><a href="./index">SAM</a></div>
        <div class="flex gap-4">
            <button class="px-4 py-2 rounded-full border border-transparent hover:border-white/30 transition-all"><a href="../auth/signin">SIGN IN</a></button>
            <button class="px-4 py-2 rounded-full bg-black/30 backdrop-blur-sm border border-white/30 hover:bg-black/50 transition-all"><a href="../auth/signup">SIGN up</a></button>
        </div>
    </header>
    <!-- Main content -->
    <main class="flex mt-8">
  <!-- Right Side Navigation -->
  <div class="absolute left-6 top-1/2 transform -translate-y-1/2 flex flex-col gap-10 mr-20 bg-black/20 backdrop-blur-sm p-4 rounded-full border border-white/10">
        <a href="../" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
            <i class="fas fa-home"></i>
        </a>
        <a href="#" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
            <i class="fas fa-user"></i>
        </a>
        <a href="../projects" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
            <i class="fas fa-folder"></i>
        </a>
        <a href="../contacts" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
            <i class="fas fa-phone"></i>
        </a>
    </div>

        <!-- Content area --> 
        <div class="flex-1 px-16 py-8 justify-center  flex-col gap-10 ">
            <div class='flex justify-center gap-5 mb-16'>
                <h1 class="text-5xl font-light text-gray-400 mb-4 tracking-wider ustify-center">ABOUT ME</h1>
            </div>
            
            <!-- Navigation buttons -->
            <div class="flex justify-center gap-[50px] mb-4">
                <button class="nav-button"><a href="./skills">SKILLS I HAVE</a></button>
                <button class="nav-button"><a href="../projects">PROJECT I CREATED</a></button>
            </div>
            
            <!-- About text -->
            <div class="max-w-4xl mx-auto space-y-6 text-lg leading-relaxed">
                <p>
                    Hi, I'm Samuel Uwayo, a passionate software developer with a strong focus on building 
                    impactful and innovative web and mobile applications. With a deep understanding of modern 
                    web technologies, I specialize in crafting seamless and user-friendly experiences for users 
                    across different platforms.
                </p>
                <p>
                    I work with a variety of tech stacks, including php Vue.js, React.js, React Native, Express.js, 
                    Electron.js, and Tailwind CSS. Whether it's building mordern websites, crafting dynamic 
                    user interfaces, or developing cross-platform mobile applications, I strive to deliver clean, 
                    scalable, and efficient code
                </p>
            </div>
        </div>
    </main>
</body>
</html>