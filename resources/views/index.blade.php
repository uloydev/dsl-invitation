@extends('layouts.app')

@section('content')
    <div class="min-h-screen min-w-screen relative bg-transparent max-w-lg mx-auto">
        <div id="loadingBG" class="h-screen w-screen max-w-lg bg-dsl-blue transition-all duration-700 absolute z-10"></div>
        <img src="/assets/img/main-bg.png" alt="main background" class="h-screen absolute -z-10">
        <img id="logo" src="/assets/img/logo.svg" alt="Logo DSL" class="w-20 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 transition-all duration-500 z-10">
        <div class="flex flex-col justify-between relative min-h-screen w-full pt-36 pb-20 text-white px-12 font-inter">
            <div id="headlineGroup" class="text-[2.4rem] font-bold -ml-[120%] transition-all duration-1000">
                <p>You Are Invited to</p>
                <p class="-mt-4">The Unbox Day</p>
            </div>
            <div id="registerBtnGroup" class="transition-all duration-1000 opacity-0">
                <div class="mb-20 text-xl">
                    <p>Department Sports Lab</p>
                    <p class="-mt-1">Grand Opening</p>
                </div>
                <button class="flex justify-center gap-x-4 text-lg items-center bg-dsl-blue py-5 rounded-full hover:font-bold transition-all w-full">Unbox Your Potential? <img src="/assets/icon/arrow.svg" alt="arrow" class="w-3"/></button>
            </div>

        </div>

    </div>
@endsection

@push('script')
<script>
    const logo = document.getElementById("logo");
    const loadingBG = document.getElementById("loadingBG");
    const headlineGroup = document.getElementById("headlineGroup")
    const registerBtnGroup = document.getElementById("registerBtnGroup")

    setTimeout(() => {
        logo.classList.add("opacity-100")
        setTimeout(() => {
            logo.classList.remove("-translate-x-1/2", "-translate-y-1/2")
            logo.classList.replace("top-1/2", "top-8")
            logo.classList.replace("left-1/2", "left-8")
            loadingBG.classList.add("opacity-0")
            setTimeout(() => {
                loadingBG.remove();
                registerBtnGroup.classList.remove("opacity-0")
                setTimeout(() => {
                    headlineGroup.classList.remove("-ml-[120%]")
                }, 1000);
            }, 1000);
        }, 2000);
    }, 1000);



</script>
@endpush
