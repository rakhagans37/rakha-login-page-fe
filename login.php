<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="w-screen h-screen flex items-center flex-col font-[Inter]">
        <div class="flex flex-col px-6 gap-6 w-full justify-self-center mt-28">
            <div class="flex flex-col gap-2">
                <h1 class="text-2xl text-[#810000] font-bold text-red">Login</h1>
                <p class="text-sm font-400 text-[#A1A1A1]">Untuk membuka informasi</p>
            </div>
            <div class="w-full flex flex-col gap-6 items-center">
                <form action="index.php" class="w-full flex flex-col gap-6">
                    <label for="username">
                        <input type="text" name="username" id="username" placeholder="Username" class="w-full bg-[#EEE] px-4 py-3 rounded-xl placeholder:text-sm">
                    </label>
                    <label for=" password">
                        <input type="password" name="password" id="password" placeholder="Password" class="w-full bg-[#EEE] px-4 py-3 rounded-xl placeholder:text-sm">
                    </label>
                    <input type="submit" name="Login" value="Login" id="Login" class="bg-[#810000] text-white text-sm font-bold py-3 rounded-xl">
                </form>
                <a href="#" class="font-semibold text-sm">Lupa Password?</a>
            </div>
        </div>
    </div>
    <footer class="w-screen absolute bottom-0 bg-[#EEEBDD]">
        <p class="py-3 px-4 text-center text-sm font-normal">Belum punya akun? <a href="#" class="text-[#810000] font-bold">Daftar sekarang</a></p>
    </footer>
    <script src=" https://cdn.tailwindcss.com"></script>
</body>

</html>