@extends('layouts.main')
@extends('partials.navbar')

<body class="overflow-hidden">
    <div class="my-10">
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                            Sign in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action='/login' method ='post'>
                            @csrf
                            <div class="form-floating">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="name">Username</label>
                                <input type="name" name="name" class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" id="name" placeholder="Username" required value="{{ old('name') }}">
                            </div>
                            <div class="form-floating">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="password">Password</label>
                                <input type="password" name='password' class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" id="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don't have an account yet? <a href="/register" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
          </section>
    </div>
</body>