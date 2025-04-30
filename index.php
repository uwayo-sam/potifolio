<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAM - Portfolio</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    <style>
        
        body {
            font-family: "Graduate", serif;
            background-color: #000;
            background-image: linear-gradient(rgba(0,0,0,.7)) ,url('./asserts/images/12.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: #fff;
        }
        
       
        .btn:hover {
            transform: scale(1.05);
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: scale(1.2);
            opacity: 0.8;
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
<body class="relative overflow-hidden">
    <?php
    // PHP variables for content
    $name = "SAM";
    $headline = "EXPLORE MY CREATIVE WORLD WHERE CODE MEETS INNOVATION";
    $description = "I'm a passionate web developer, specializing in Vue.js for building dynamic user interfaces and Express for crafting powerful back-end solutions. With each project, I bring a universe of possibilities, combining sleek design with seamless functionality.";
    ?>

    <!-- Header -->
    <header class="flex justify-between items-center p-6 md:p-10">
        <div class="text-3xl font-bold tracking-wider"><a href="./index"><?php echo $name; ?></a></div>
        <div class="flex gap-4">
            <button class="px-4 py-2 rounded-full border border-transparent hover:border-white/30 transition-all"><a href="./auth/signin">SIGN IN</a></button>
            <button class="px-4 py-2 rounded-full bg-black/30 backdrop-blur-sm border border-white/30 hover:bg-black/50 transition-all"><a href="./auth/signup">SIGN up</a></button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 md:px-10 mt-10 md:mt-16">
        <div class="max-w-2xl">
            <h1 class="md:text-5xl font-bold leading-tight tracking-wide mb-8 bg-gradient-to-r from-white to-gray bg-clip-text text-5xl text-transparent">
                <?php echo $headline; ?>
            </h1>
            
            <p class="text-lg md:text-xl opacity-90 leading-relaxed mb-10">
                <?php echo $description; ?>
            </p>
            
            <div class="flex gap-6 mt-8">
                <button class="btn px-6 py-3 rounded-full border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50">
                    <a href="./about">MORE INFO</a>
                </button>
                <button class="btn px-6 py-3 rounded-full border border-white/30 bg-black/30 backdrop-blur-sm hover:bg-black/50">
                    <a href="./contacts">CONTACT ME</a>
                </button>
            </div>
        </div>
    </main>

    <!-- Social Media Icons -->
    <div class="absolute bottom-10 left-10 flex gap-8">
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

    <!-- Right Side Navigation -->
    <div class="absolute right-6 top-1/2 transform -translate-y-1/2 flex flex-col gap-10 mr-20 bg-black/20 backdrop-blur-sm p-4 rounded-full border border-white/10">
        <a href="#" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
            <i class="fas fa-home"></i>
        </a>
        <a href="./about" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
            <i class="fas fa-user"></i>
        </a>
        <a href="./projects" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
            <i class="fas fa-folder"></i>
        </a>
        <a href="./contacts" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
            <i class="fas fa-phone"></i>
        </a>
    </div>
</body>
</html>