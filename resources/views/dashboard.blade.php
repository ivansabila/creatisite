@extends('partials.main')

@section('content')
        
    <div class="flex flex-row mx-40">
        <div class="content-right w-9/12 mr-8 flex flex-col items-center">
            <div class="blogs py-8 px-12 h-64 rounded-xl border-border flex flex-row gap-12">
                <img class="w-64 h-full object-cover rounded-lg" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                <div class="flex flex-col gap-4 b w-full justify-between">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                            <p class="font-base text-blackSec text-[12px] ">Writer Name</p>
                        </div>
                        <div class="flex flex-row-reverse gap-2 ">
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200">Self Development</p>
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-blue-200">Best</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="font-base font-bold text-2xl text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        <p class="font-base text-blackSec text-sm">Description Blog | Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tenetur accusantium.</p>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row gap-6">
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024</p>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-hands-clapping text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-comment text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-bookmark fa-lg text-blackSec/60"></i>
                    </div>
                </div>
            </div>
            <div class="blogs py-8 px-12 h-64 rounded-xl border-border flex flex-row gap-12">
                <img class="w-64 h-full object-cover rounded-lg" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                <div class="flex flex-col gap-4 b w-full justify-between">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                            <p class="font-base text-blackSec text-[12px] ">Writer Name</p>
                        </div>
                        <div class="flex flex-row-reverse gap-2 ">
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200">Self Development</p>
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-blue-200">Best</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="font-base font-bold text-2xl text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        <p class="font-base text-blackSec text-sm">Description Blog | Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tenetur accusantium.</p>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row gap-6">
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024</p>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-hands-clapping text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-comment text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-bookmark fa-lg text-blackSec/60"></i>
                    </div>
                </div>
            </div>
            <div class="blogs py-8 px-12 h-64 rounded-xl border-border flex flex-row gap-12">
                <img class="w-64 h-full object-cover rounded-lg" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                <div class="flex flex-col gap-4 b w-full justify-between">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                            <p class="font-base text-blackSec text-[12px] ">Writer Name</p>
                        </div>
                        <div class="flex flex-row-reverse gap-2 ">
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200">Self Development</p>
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-blue-200">Best</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="font-base font-bold text-2xl text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        <p class="font-base text-blackSec text-sm">Description Blog | Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tenetur accusantium.</p>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row gap-6">
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024</p>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-hands-clapping text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-comment text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-bookmark fa-lg text-blackSec/60"></i>
                    </div>
                </div>
            </div>
            <div class="blogs py-8 px-12 h-64 rounded-xl border-border flex flex-row gap-12">
                <img class="w-64 h-full object-cover rounded-lg" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                <div class="flex flex-col gap-4 b w-full justify-between">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                            <p class="font-base text-blackSec text-[12px] ">Writer Name</p>
                        </div>
                        <div class="flex flex-row-reverse gap-2 ">
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200">Self Development</p>
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-blue-200">Best</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="font-base font-bold text-2xl text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        <p class="font-base text-blackSec text-sm">Description Blog | Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tenetur accusantium.</p>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row gap-6">
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024</p>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-hands-clapping text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-comment text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-bookmark fa-lg text-blackSec/60"></i>
                    </div>
                </div>
            </div>
            <div class="blogs py-8 px-12 h-64 rounded-xl border-border flex flex-row gap-12">
                <img class="w-64 h-full object-cover rounded-lg" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                <div class="flex flex-col gap-4 b w-full justify-between">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                            <p class="font-base text-blackSec text-[12px] ">Writer Name</p>
                        </div>
                        <div class="flex flex-row-reverse gap-2 ">
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200">Self Development</p>
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-blue-200">Best</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="font-base font-bold text-2xl text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        <p class="font-base text-blackSec text-sm">Description Blog | Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tenetur accusantium.</p>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row gap-6">
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024</p>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-hands-clapping text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-comment text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-bookmark fa-lg text-blackSec/60"></i>
                    </div>
                </div>
            </div>
            <div class="blogs py-8 px-12 h-64 rounded-xl border-border flex flex-row gap-12">
                <img class="w-64 h-full object-cover rounded-lg" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                <div class="flex flex-col gap-4 b w-full justify-between">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                            <p class="font-base text-blackSec text-[12px] ">Writer Name</p>
                        </div>
                        <div class="flex flex-row-reverse gap-2 ">
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200">Self Development</p>
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-blue-200">Best</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="font-base font-bold text-2xl text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        <p class="font-base text-blackSec text-sm">Description Blog | Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tenetur accusantium.</p>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row gap-6">
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024</p>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-hands-clapping text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-comment text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-bookmark fa-lg text-blackSec/60"></i>
                    </div>
                </div>
            </div>
            <div class="blogs py-8 px-12 h-64 rounded-xl border-border flex flex-row gap-12">
                <img class="w-64 h-full object-cover rounded-lg" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                <div class="flex flex-col gap-4 b w-full justify-between">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                            <p class="font-base text-blackSec text-[12px] ">Writer Name</p>
                        </div>
                        <div class="flex flex-row-reverse gap-2 ">
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200">Self Development</p>
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-blue-200">Best</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="font-base font-bold text-2xl text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        <p class="font-base text-blackSec text-sm">Description Blog | Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tenetur accusantium.</p>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row gap-6">
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024</p>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-hands-clapping text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-comment text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-bookmark fa-lg text-blackSec/60"></i>
                    </div>
                </div>
            </div>
            <div class="blogs py-8 px-12 h-64 rounded-xl border-border flex flex-row gap-12">
                <img class="w-64 h-full object-cover rounded-lg" src="{{ asset('assets/img/typing.jpg') }}" alt="">
                <div class="flex flex-col gap-4 b w-full justify-between">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                            <p class="font-base text-blackSec text-[12px] ">Writer Name</p>
                        </div>
                        <div class="flex flex-row-reverse gap-2 ">
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-green-200">Self Development</p>
                            <p class="py-1 px-4 rounded-full font-base text-blackSec text-[10px] border bg-blue-200">Best</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="font-base font-bold text-2xl text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        <p class="font-base text-blackSec text-sm">Description Blog | Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tenetur accusantium.</p>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row gap-6">
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024</p>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-hands-clapping text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                            <div class="flex flex-row gap-1">
                                <i class="fa-solid fa-comment text-blackSec/60"></i>
                                <p class="font-base text-[12px] text-blackSec">100</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-bookmark fa-lg text-blackSec/60"></i>
                    </div>
                </div>
            </div>
            <a class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 text-white py-2 px-4 mt-4 rounded-lg transition cursor-pointer" type="button">See more</a>
            
        </div>
        <div id="container-left" class="content-left border-l border-border w-3/12">
            <div id="content-left" class="flex flex-col gap-8 pl-8 pt-8 w-80">
                <div class="recommended flex flex-col gap-4">
                    <h1 class="font-base font-semibold text-blackSec">Recommended Blogs</h1>
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                                <p class="font-base font-medium text-black text-[12px] ">Writer Name <span class="text-black/50 font-medium">in</span> Self Development</p>
                            </div>
                            <h1 class="font-base font-bold text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                                <p class="font-base font-medium text-black text-[12px] ">Writer Name <span class="text-black/50 font-medium">in</span> Self Development</p>
                            </div>
                            <h1 class="font-base font-bold text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                                <p class="font-base font-medium text-black text-[12px] ">Writer Name <span class="text-black/50 font-medium">in</span> Self Development</p>
                            </div>
                            <h1 class="font-base font-bold text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                        </div>
                    </div>
                </div>
                <div class="category flex flex-col gap-4">
                    <h1 class="font-base font-semibold text-blackSec">Topics</h1>
                    <div class="flex flex-row gap-2 flex-wrap">
                        <p class="py-1 px-4 rounded-full font-base text-blackSec text-[12px] font-medium border border-border">Self Development</p>
                        <p class="py-1 px-4 rounded-full font-base text-blackSec text-[12px] font-medium border border-border">Best</p>
                        <p class="py-1 px-4 rounded-full font-base text-blackSec text-[12px] font-medium border border-border">Web Programming</p>
                        <p class="py-1 px-4 rounded-full font-base text-blackSec text-[12px] font-medium border border-border">Multimedia</p>
                        <p class="py-1 px-4 rounded-full font-base text-blackSec text-[12px] font-medium border border-border">Life</p>
                        <p class="py-1 px-4 rounded-full font-base text-blackSec text-[12px] font-medium border border-border">Social</p>
                    </div>
                </div>
                <div class="category flex flex-col gap-4">
                    <h1 class="font-base font-semibold text-blackSec">Reading List</h1>
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                                <p class="font-base font-medium text-black text-[12px] ">Writer Name</p>
                            </div>
                            <h1 class="font-base font-bold text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024 • 20 min read</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                                <p class="font-base font-medium text-black text-[12px] ">Writer Name</p>
                            </div>
                            <h1 class="font-base font-bold text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024 • 20 min read</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-6 h-6 object-cover border border-border rounded-full" src="{{ asset('assets/img/person.jpg') }}" alt="">
                                <p class="font-base font-medium text-black text-[12px] ">Writer Name</p>
                            </div>
                            <h1 class="font-base font-bold text-black">Title Blog | Anjay Gacor Mang Pernapan Air Giyu Tomioka</h1>
                            <p class="font-base text-[12px] text-blackSec">01 Aug, 2024 • 20 min read</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
        
    
    <script src="{{ asset('assets/js/sidebarScroll.js') }}"></script>
@endsection