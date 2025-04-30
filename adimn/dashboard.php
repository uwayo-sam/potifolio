
<?php
            $projects = [
                [
                    "title" => "VUE - GUESSING GAME",
                    "rating" => "4.5",
                    "image" => "https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=1000"
                ],
                [
                    "title" => "JS CSS HTML - CALCULATOR",
                    "rating" => "4.5",
                    "image" => "https://images.unsplash.com/photo-1506703719100-a0f3a48c0f86?q=80&w=1000"
                ],
                [
                    "title" => "REACT REACT NATIVE GPT-CLONE",
                    "rating" => "4.5",
                    "image" => "https://images.unsplash.com/photo-1614730321146-b6fa6a46bcb4?q=80&w=1000"
                ],
                [
                    "title" => "VUE - GUESSING GAME",
                    "rating" => "4.5",
                    "image" => "https://images.unsplash.com/photo-1446776653964-20c1d3a81b06?q=80&w=1000"
                ],
                
            ];


            $stacks = [
                [
                    "title" => "css",
                    "image" => "../asserts/images/stacks/css.png"
                ],
                [
                    "title" => "JS",
                    "image" => "../asserts/images/stacks/javascript.png"
                ],
                [
                    "title" => "nuxt",
                    "image" => "../asserts/images/stacks/nuxt.png"
                ],
                [
                    "title" => "REACT",
                    "image" => "../asserts/images/stacks/react.png"
                ],
                [
                    "title" => "vue js",
                    "image" => "../asserts/images/stacks/vue.jpg"
                ],
                [
                    "title" => "node js",
                    "image" => "../asserts/images/stacks/node.png"
                ],
                [
                    "title" => "express",
                    "image" => "../asserts/images/stacks/express.png"
                ]
            ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAM | ADMIN</title>
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
    <style>
         body {
            font-family: "Graduate", serif;
            background-color: #000;
            background-image: linear-gradient(rgba(0,0,0,.7)) ,url('../asserts/images/14.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: #fff;
        }
        .project-card {
            transition: transform 0.3s ease;
            overflow: hidden;
            position: relative;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
        }
        
        .project-title {
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 15px;
        }
        
        .rating {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 5px 10px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
          .stack-card {
            transition: transform 0.3s ease;
            overflow: hidden;
            position: relative;
        }
        
        .stack-card:hover {
            transform: translateY(-5px);
        }
        
        .stack-title {
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 15px;
        }
    </style>
</head>
<body>
     <!-- Header -->
 <header class="flex justify-between items-center p-6 md:p-10">
        <div class="text-3xl font-bold tracking-wider"><a href="./index">SAM</a></div>
        <div class="flex gap-4">
            <button class="px-4 py-2 rounded-full border border-transparent hover:border-white/30 transition-all"><a href="../auth/signin">SIGN IN</a></button>
            <button class="px-4 py-2 rounded-full bg-black/30 backdrop-blur-sm border border-white/30 hover:bg-black/50 transition-all"><a href="../auth/signup">SIGN up</a></button>
        </div>
    </header>
    <!-- ---- -->


     <!-- Right Side Navigation -->
     <div class="absolute left-6 top-1/2 transform -translate-y-1/2 flex flex-col gap-10 mr-20 bg-black/20 backdrop-blur-sm p-4 rounded-full border border-white/10">
            <a href="#" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
                <i class="fas fa-home"></i>
            </a>
            <a href="../about" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
                <i class="fas fa-user"></i>
            </a>
            <a href="../projects" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
                <i class="fas fa-folder"></i>
            </a>
            <a href="./massages" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
            <i class="fa-solid fa-message"></i>
            </a>
     </div> 

     <!-- ---- --> 
     <main class="flex flex-col gap-10 mt-6 pl-5">
        <h1 class="text-2xl font-bold text-center">dashboard</h1>
        <div class="flex flex-col gap-5 mb-7">
            <div class="flex justify-between items-center px-[200px] text-gray-300">
                <h1>recent projects</h1>
                <div class="flex gap-2 items-center hover:cursor-pointer">
                <i class="fa-solid fa-folder-plus"></i>
                <h1>project</h1>
                </div>
            </div>
            <div class="flex overflow-x-hidden gap-3 justify-center items-center">
              <?php

                    foreach ($projects as $project) {
                        echo '<div class="project-card rounded-lg overflow-hidden h-[170px] shadow-lg w-1/5">';
                        echo '<img src="' . $project["image"] . '" alt="' . $project["title"] . '" class="w-full h-full object-cover">';
                        echo '<div class="rating">';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">';
                        echo '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />';
                        echo '</svg>';
                        echo '<span>' . $project["rating"] . '</span>';
                        echo '</div>';
                        echo '<div class="project-title text-sm ">' . $project["title"] . '</div>';
                        echo '</div>';
                    }
              ?>
             </div>
        </div>
        <div class="flex flex-col gap-5">
            <div class="flex justify-between items-center px-[200px] text-gray-300">
                <h1>recent stacks</h1>
                <div class="flex items-center gap-2 hover:cursor-pointer">
                <i class="fa-solid fa-plus"></i>
               <h1>stack</h1>
                </div>
            </div>
            <div class="flex overflow-x-hidden gap-8 justify-center items-center">
              <?php

                    foreach($stacks as $stack){
                            
                        echo '<div class="stack-card rounded-lg overflow-hidden h-[100px] shadow-lg w-[150px]">';
                        echo '<img src="' . $stack["image"] . '" alt="' . $stack["title"] . '" class="w-full h-full object-cover">';
                        echo '<div class="stack-title text-sm ">' . $stack["title"] . '</div>';
                        echo '</div>';
                    

                    }
              ?>
             </div>
        </div>
        <div></div>
     </main>


</body>
</html>