<nav class="border py-4 px-8 flex flex-row justify-between items-center fixed w-full z-10 bg-white top-0">
            <div class="flex flex-row gap-8 ">
                <a class="flex flex-row items-center gap-3" href="">
                    <img class="w-5" src="{{ asset('assets/img/logo.png') }}" alt="">
                    <p class="font-base text-black text-xl font-semibold">Creatisite</p>
                </a>
                <form class="" action="">
                    <div class="w-full h-full relative">
                        <i class="fa-solid fa-magnifying-glass fa-sm absolute top-1/2 left-3 -translate-y-1/3 text-border"></i>
                        <input class="border py-2 px-4 w-96 pl-10 text-blackSec placeholder:text-border focus:border-none focus:ring focus:ring-blue-300 transition font-base rounded-lg border-border outline-none" type="email" name="email" id="email" placeholder="Search">
                    </div>
                </form>
            </div>
            <div class="flex flex-row items-center gap-12">
                <a class="flex flex-row items-center gap-3" href="">
                    <i class="fa-regular fa-pen-to-square fa-lg text-blackSec/80"></i>
                    <p class="font-base text-blackSec/80">Write</p>
                </a>
                <a href="">
                    <i class="fa-regular fa-bell fa-lg text-blackSec/80"></i>
                </a>
                <a href="">
                    <img class="w-10 h-10 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                </a>
            </div>
        </nav>