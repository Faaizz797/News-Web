

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form [Edit] || Page</title>
    <link rel="shortcut icon" src="https://www.svgrepo.com/show/513304/globe-2.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css">
</head>
<body class="font-sans antialiased">


    <div class="container mx-auto p-8">
        <form action="{{ route('post.update' , $post->id)}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">
            <!-- Input Gambar -->
            @csrf
            @method('put')
            <div>
                <label for="image" class="block font-bold text-blue-600">Image [Gambar]</label>
                <input type="file" id="image" name="image" class="block w-full mt-1">
            </div>


            <!-- Input Judul -->
            <div>
                <label for="title" class="block font-bold text-blue-600">Title [Judul]</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}" class="block w-full mt-1" required>
            </div>


            <!-- Input Deskripsi -->
            <div>
                <label for="description" class="block font-bold text-blue-600">Description [Deskripsi]</label>
                <textarea id="description" name="description" class="block w-full mt-1">{{ $post->description }}</textarea>
            </div>


            <!-- Input Konten -->
            <div>
                <label for="content" class="block font-bold text-blue-600">Content [Konten]</label>
                <textarea id="content" name="content" class="block w-full mt-1">{{ $post->content }}</textarea>
            </div>


            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kirim</button>
            </div>
        </form>
    </div>


</body>
</html>