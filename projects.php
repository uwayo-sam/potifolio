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
        [
            "title" => "REACT NATIVE TAILWIND TO DO APP",
            "rating" => "4.5",
            "image" => "https://images.unsplash.com/photo-1614732414444-096e5f1122d5?q=80&w=1000"
        ],
        [
            "title" => "ELECTRON VUE JS MD READER",
            "rating" => "4.5",
            "image" => "https://images.unsplash.com/photo-1543722530-d2c3201371e7?q=80&w=1000"
        ],
        [
            "title" => "VUE - GUESSING GAME",
            "rating" => "4.5",
            "image" => "https://images.unsplash.com/photo-1446776653964-20c1d3a81b06?q=80&w=1000"
        ],
        [
            "title" => "REACT NATIVE TAILWIND TO DO APP",
            "rating" => "4.5",
            "image" => "https://images.unsplash.com/photo-1614732414444-096e5f1122d5?q=80&w=1000"
        ],
        [
            "title" => "ELECTRON VUE JS MD READER",
            "rating" => "4.5",
            "image" => "https://images.unsplash.com/photo-1543722530-d2c3201371e7?q=80&w=1000"
        ],
        [
            "title" => "VUE - GUESSING GAME",
            "rating" => "4.5",
            "image" => "https://images.unsplash.com/photo-1446776653964-20c1d3a81b06?q=80&w=1000"
        ],
        [
            "title" => "REACT NATIVE TAILWIND TO DO APP",
            "rating" => "4.5",
            "image" => "https://images.unsplash.com/photo-1614732414444-096e5f1122d5?q=80&w=1000"
        ],
        [
            "title" => "ELECTRON VUE JS MD READER",
            "rating" => "4.5",
            "image" => "https://images.unsplash.com/photo-1543722530-d2c3201371e7?q=80&w=1000"
        ],
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAM - Portfolio</title>
     <!-- Font Awesome for icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body {
            background-color: #000;
            background-image: linear-gradient(rgba(0,0,0,.95)) ,url('./asserts/images/10.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            font-family: "Graduate", serif;
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
    </style>
</head>
<body class="min-h-screen flex flex-col gap-4">
    <div class="container mx-auto px-4 py-8">
          <!-- Header -->
    <header class="flex justify-between items-center p-6 md:p-10">
        <div class="text-3xl font-bold tracking-wider"><a href="./index">SAM</a></div>
        <div class="flex gap-4">
            <button class="px-4 py-2 rounded-full border border-transparent hover:border-white/30 transition-all"><a href="./auth/signin">SIGN IN</a></button>
            <button class="px-4 py-2 rounded-full bg-black/30 backdrop-blur-sm border border-white/30 hover:bg-black/50 transition-all"><a href="./auth/signup">SIGN up</a></button>
        </div>
    </header>
  <div class='w-full flex justify-center items-center mb-10'>
    <div class='h-full bg-transparent border-solid border-2 border-gray-400 rounded-full'>

        <input type="search" placeholder='search query here ...' class='h-full bg-transparent px-6 py-2 outline-none border-none'>
        <button class='h-full bg-black text-white px-6 py-2 border-solid border-2 border-gray-400 rounded-r-full'>
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
  </div>


        <!-- Projects Grid -->
        <div class="flex flex-wrap gap-9 justify-center items-center border-solid border-1 border-gray-400">
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
</body>
</html>