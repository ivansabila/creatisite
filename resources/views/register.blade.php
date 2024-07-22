@extends('partials.main')

@section('content')
    <form action="" method="post">
        <div class="flex gap-4 justify-center">
            <div class="flex flex-initial w-5/12 gap-12 flex-col items-center py-12">
                <img class="w-8" src="{{ asset('assets/img/logo.png') }}" alt="">
                <div class="content-hero flex flex-col w-96 gap-6">
                    <div class="hero-title flex flex-col gap-3">
                        <h1 class="text-black font-bold text-4xl font-base text-center">Welcome Creatizens!</h1>
                        <p class="text-blackSec font-base text-center">It's time and place for your thoughts <br> to be recognized by the world</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="username flex flex-col gap-1">
                            <label class="font-base text-black text-[14px] font-medium" for="username">Username</label>
                            <input class="border py-2 px-4 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none" type="text" name="username" id="username" placeholder="Enter your username" autofocus>
                        </div>
                        <div class="email flex flex-col gap-1">
                            <label class="font-base text-black text-[14px] font-medium" for="email">Email</label>
                            <input class="border py-2 px-4 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none" type="email" name="email" id="email" placeholder="Enter your email">
                        </div>
                        <div class="password flex flex-col gap-1 items-start">
                            <label class="font-base text-black text-[14px] font-medium" for="password">Password</label>
                            <input class="border py-2 px-4 w-full text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none" type="password" name="password" id="password" placeholder="Enter your password">
                            <div class="flex flex-row items-start gap-2 mt-1">
                                <input class="w-6 h-6" type="checkbox" name="policy" id="policy">
                                <label class="text-blackSec text-sm " for="policy">Creating an account means you agree with our Terms of Service Privacy Policy</label>
                            </div>
                        </div>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 text-white py-2 rounded-lg" type="submit">Register</button>
                    <div class="flex flex-row gap-1 font-base text-sm -mt-2">
                        <p class="text-black">Already have an account?</p>
                        <a class="text-blackSec underline underline-offset-2" href="/login">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection