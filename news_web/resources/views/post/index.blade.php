<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Home || Page</title>
</head>


<body class="bg-yellow-50">
    <nav class="bg-gray-900 border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('post.index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://static.wixstatic.com/media/7f204b_5d8eb8e1dadb4874b6b347eeeb30c93a~mv2.png/v1/crop/x_0,y_26,w_601,h_841/fill/w_94,h_132,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Untitled%20design%20(18)_edited.png" class="h-12" alt="Logo" />
                <span class="text-gray-400 ring-black font-black self-center text-2xl whitespace-nowrap"><span class="text-yellow-400">Top-G</span> News</span>
            </a>
        </div>
    </nav>
    <div class="container mx-auto p-auto text-center mt-4">
        <a href="{{ route('post.create') }}" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add News
        </a>


        <div class="flex flex-wrap justify-center mt-4">
            <!-- Card 1 -->
            @forelse($post as $p)
                   
            <div
                class="max-w-sm bg-gray-900 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ Storage::url($p->image) }}" alt="" />


                </a>
                <div class="p-5">


                    <h5 class="text-white mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $p->title }}</h5>


                    <p class="mb-3 font-bold text-yellow-300 text-lg dark:text-gray-400">{{ $p->description }}</p>
                    <a href="{{ route('post.show',$p->id) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <!-- Tombol Edit -->
                    <a href="{{ route('post.edit', $p->id) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-600 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-400 dark:hover:bg-yellow-500 dark:focus:ring-yellow-600 mt-2">
                        Edit
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 12h8M2 10V4a2 2 0 0 1 2-2h4l4 4v4a2 2 0 0 1-2 2h-4L2 10Z" />
                        </svg>
                    </a>
                    <!-- Tombol Delete -->
                    <form action="{{ route('post.destroy', $p->id) }}" method="POST" class="inline-block mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Delete
                            <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 16 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M2 2l12 12M2 14l12-12" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <p class="text-5xl font-black text-red-600"> Data Tidak tersedia</p>
            @endforelse ($post as $p)
     
        </div>
    </div>


</body>


</html>