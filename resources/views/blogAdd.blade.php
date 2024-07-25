@extends('partials.main')

@section('content')
<div class="flex flex-col gap-4 mx-80">
    <div class="flex flex-row items-center gap-2 border-2 border-dashed border-blackSec/50 py-5 rounded-lg justify-center cursor-pointer">
        <i class="fa-regular fa-file-image text-blackSec/50"></i>
        <p class="font-base text-blackSec/50">Upload your cover here</p>
    </div>
    <h1 id="title" class="text-4xl font-semibold font-base text-blackSec/50 outline-none" contenteditable="true" onclick="validateTitle()" onblur="validateTitleBlur()">Title</h1>
    <p id="desc" class="text-lg font-base text-blackSec/50 outline-none" contenteditable="true" onclick="validateDesc()" onblur="validateDescBlur()">Description</p>
</div>

<script src="{{ asset ('assets/js/addBlog.js') }}"></script>
@endsection