@extends('layouts.main')
@extends('partials.navbar')

<body class="overflow-hidden">
    <div class="my-10">
        <section style="background: #001b35">
            <div class="flex flex-col items-center justify-center h-screen">
                <div class="w-full rounded-lg max-w-md bg-gray-800">
                    <div class="space-y-6 p-8">
                        <h1 class="font-bold text-2xl text-white text-center">
                            Sign in to your account
                        </h1>
                        <form class="space-y-6" action='/login' method ='post'>
                            @csrf
                            <div class="form-floating">
                                <label class="block mb-2 text-sm font-medium text-white" for="name">Username</label>
                                <input type="name" name="name" class="form-control text-sm rounded-lg w-full p-3 bg-gray-700 text-white" id="name" placeholder="Username" required value="{{ old('name') }}">
                            </div>
                            <div class="form-floating">
                                <label class="block mb-2 text-sm font-medium text-white" for="password">Password</label>
                                <input type="password" name='password' class="form-control text-sm rounded-lg w-full p-3 bg-gray-700 text-white" id="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-3 py-3 text-center">Sign in</button>
                            <p class="text-sm font-light text-gray-400">
                                Don't have an account yet? <a href="/register" class="font-medium hover:underline">Sign up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>