<?php
  
  $userMessages = [
    [
        'phone' => '+1234567890',
        'content' => 'Hello, I would like to inquire about your pricing plans for the premium service.',
        'email' => 'john.doe@example.com',
        'full_name' => 'John Doe'
    ],
    [
        'phone' => '+1987654321',
        'content' => 'The checkout process on your website seems to be not working properly. Can you help?',
        'email' => 'jane.smith@example.com',
        'full_name' => 'Jane Smith'
    ],
    [
        'phone' => '+1122334455',
        'content' => 'I love your products! When will the new collection be available?',
        'email' => 'robert.johnson@example.com',
        'full_name' => 'Robert Johnson'
    ],
    [
        'phone' => '+1555666777',
        'content' => 'Do you offer international shipping? How long would it take to deliver to Germany?',
        'email' => 'emily.wilson@example.com',
        'full_name' => 'Emily Wilson'
    ],
    [
        'phone' => '+1444333222',
        'content' => 'I need help resetting my account password. The reset link is not working.',
        'email' => 'michael.brown@example.com',
        'full_name' => 'Michael Brown'
    ],
    [
        'phone' => '+1777888999',
        'content' => 'Are there any discounts available for bulk orders? We need about 50 units.',
        'email' => 'sarah.davis@example.com',
        'full_name' => 'Sarah Davis'
    ],
    [
        'phone' => '+1666999888',
        'content' => 'The product I received is damaged. How can I get a replacement?',
        'email' => 'david.miller@example.com',
        'full_name' => 'David Miller'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAM | MASSAGES</title>
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
            background-image: linear-gradient(rgba(0,0,0,.7)) ,url('../asserts/images/11.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            color: #fff;
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
<body>
      <!-- Header -->
    <div class="fixed w-full z-10 backdrop-blur-lg">
    <header class="flex justify-between items-center p-6 md:p-10">
        <div class="text-3xl font-bold tracking-wider"><a href="./index">SAM</a></div>
        <div class="flex gap-4">
            <button class="px-4 py-2 rounded-full border border-transparent hover:border-white/30 transition-all"><a href="../auth/signin">SIGN IN</a></button>
            <button class="px-4 py-2 rounded-full bg-black/30 backdrop-blur-sm border border-white/30 hover:bg-black/50 transition-all"><a href="../auth/signup">SIGN up</a></button>
        </div>
    </header>
    </div>
    <!-- ---- -->


         <!-- Right Side Navigation -->
         <div class="mt-[150px] ml-[30px] justify-center fixed w-[100px] items-center  p-8 flex flex-col gap-10 bg-black/20 backdrop-blur-sm rounded-full border border-white/10">
            <a href="./dashboard" class="nav-icon  w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
                <i class="fas fa-home"></i>
            </a>
            <a href="../about" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
                <i class="fas fa-user"></i>
            </a>
            <a href="../projects" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
                <i class="fas fa-folder"></i>
            </a>
            <a href="#" class="nav-icon w-10 h-10 flex items-center justify-center rounded-full bg-white/10">
            <i class="fa-solid fa-message"></i>
            </a>
     </div> 

     <!-- ---- --> 


     <main class="flex flex-col gap-4 items-center justify-center pt-[150px]">
        <h1 class="text-xl font-bold">massages</h1>

     <div class="w-1/2">
     <?php
foreach ($userMessages as $message) {
    echo "
    <div class=' flex gap-4 items-center backdrop-blur-lg border-solid border-2 border-gray-500 rounded-xl p-4 mb-4'>
        <div>
            <img class='w-[60px] h-[60px] rounded-full border-solid border-2 border-gray-400' src='../asserts/images/avater.png'>
        </div>
        <div class='flex flex-col gap-3'>
            <h1>{$message['full_name']}</h1>
            <p>{$message['content']}</p>
            <h6>{$message['phone']}</h6>
            <h4>{$message['email']}</h4>
        </div>
    </div>
    ";
}
?>
</div>
     </main>
    
</body>
</html>