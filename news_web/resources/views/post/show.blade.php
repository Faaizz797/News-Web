<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read More || Page</title>
   
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-50">
    <nav class="bg-gray-900 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('post.index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://static.wixstatic.com/media/7f204b_ec8e48f31916427680f34e5adf14d84d%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/7f204b_ec8e48f31916427680f34e5adf14d84d%7Emv2.png" class="h-12" alt="Logo" />
                <span class="text-gray-500 ring-black font-black self-center text-2xl whitespace-nowrap"><span class="text-yellow-400">Top-G</span> News</span>
            </a>
        </div>
    </nav>
    <div class="container mx-auto py-12">
        <div class="max-w-4xl mx-auto bg-gray-900 border border-gray-200 rounded-lg shadow-md">
            <div class="overflow-hidden rounded-t-lg">
                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="w-full">
            </div>
            <div class="p-6">
                <h1 class="text-3xl font-bold text-white mb-4">{{ $post->title }}</h1>
                <p class="text-lg font-bold text-yellow-300 mb-6">{{ $post->description }}</p>
                <div class="prose text-white max-w-none">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </div>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.1/dist/flowbite.min.js"></script>
</body>
</html>