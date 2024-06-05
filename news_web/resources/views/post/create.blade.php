<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form [Create] || Page</title>
    <link rel="shortcut icon" href="https://static.wixstatic.com/media/7f204b_ec8e48f31916427680f34e5adf14d84d%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/7f204b_ec8e48f31916427680f34e5adf14d84d%7Emv2.png" type="image/png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css">
</head>
<body class="font-sans antialiased">


    <div class="container mx-auto p-8">
        <form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">
            <!-- Input Gambar -->
            @csrf
            @method('post')
            <div>
                <label for="image" class="block font-bold text-blue-600">Image [Gambar]</label>
                <input type="file" id="image" name="image" class="block w-full mt-1" required>
            </div>


            <!-- Input Judul -->
            <div>
                <label for="title" class="block font-bold text-blue-600">Title [Judul]</label>
                <input type="text" id="title" name="title" class="block w-full mt-1" required>
            </div>


            <!-- Input Deskripsi -->
            <div>
                <label for="description" class="block font-bold text-blue-600">Description [Deskripsi]</label>
                <textarea id="description" name="description" class="block w-full mt-1"></textarea>
            </div>


            <!-- Input Konten -->
            <div>
                <label for="content" class="block font-bold text-blue-600">Content [Konten]</label>
                <textarea id="content" name="content" class="block w-full mt-1"></textarea>
            </div>


            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kirim</button>
            </div>
        </form>
    </div>


</body>
</html>