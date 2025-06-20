<html>
{{-- will make like https://www.caa.com--}}

<div class="w-full max-w-[1280px] min-h-[100vh] bg-red-400 mx-auto rounded-3xl mb-10 mt-20">
    <div class="p-28">
        <div class="text-white hover:text-[#8B0000] italic font-extrabold text-[120px] leading-[20px]">
            CFF
        </div>
    </div>
    <ul class="flex flex-col items-center justify-center space-y-2 pr-[40%] mt-[10%]">
        <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-[50px] text-nowrap">
            <a href="{{ route('talant') }}">For Talent</a>
        </li>
        <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-[50px] text-nowrap">
            <a href="{{ route('brands') }}">For Brands</a>
        </li>
        <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-[50px] text-nowrap">
            <a href="{{ route('enterprise') }}">For Enterprise</a>
        </li>
    </ul>
    <ul class="flex flex-col items-center justify-center space-y-2 pr-[40%] mt-[10%]">
        <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-lg">
            <a href="{{ route('about') }}">About</a>
        </li>
        <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-lg">
            <a href="{{ route('careers') }}">Careers</a>
        </li>
        <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-lg">
            <a href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>
</div>

</html>
