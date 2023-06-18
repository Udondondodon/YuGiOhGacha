@extends('layouts.main')
@extends('partials.navbar')

<body class="overflow-hidden">
    <div class="my-10">
        <section class="bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 h-screen">
                <div class="w-full rounded-lg max-w-md bg-gray-800">
                    <div class="space-y-6 p-8">
                        <h1 class="font-bold text-2xl text-white text-center">
                            Create account
                        </h1>
                        <form class="space-y-6" action="/register" method="post">
                            @csrf
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-white">Username</label>
                                <input type="name" name="name" id="name" class="text-sm rounded-lg block w-full p-3 bg-gray-700 text-white" placeholder="Username" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="text-sm rounded-lg block w-full p-3 bg-gray-700 text-white" required="">
                            </div>
                            <div>
                                <input type="hidden" name="gems" value="0">
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-3 py-3 text-center">Create an account</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Already have an account? <a href="/" class="font-medium hover:underline">Login here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>