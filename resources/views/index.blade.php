@extends('layouts.app')

@section('content')
    <div class="min-h-screen min-w-screen relative bg-transparent max-w-lg mx-auto" id="main">
        <div id="loadingBG" class="h-screen w-screen max-w-lg bg-dsl-blue transition-all duration-700 fixed z-10"></div>
        <img src="/assets/img/main-bg.png" alt="main background" class="h-screen absolute -z-10">
        <img id="logo" src="/assets/img/logo.svg" alt="Logo DSL"
            class="w-20 absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 transition-all duration-500 z-10">
        <div class="flex flex-col relative min-h-screen w-full pt-28 pb-12 text-white px-12 font-inter">
            <div id="headlineGroup"
                class="flex-grow flex flex-col justify-between text-[2.4rem] font-bold opacity-0 transition-all duration-1000">
                <div>
                    <p>You Are Invited to</p>
                    <p class="-mt-2">The Unbox Day</p>
                    <p class="text-base"><span class="font-normal">Grand Opening</span> Department Sports Lab</p>
                </div>
                <div class="relative text-3xl h-[7.5rem] mb-12 overflow-hidden">
                    <div id="highlight"
                        class="bg-dsl-blue h-10 w-full absolute top-1/2 left-0 -translate-y-1/2 transition-all duration-1000 z-10">
                    </div>
                    <div id="scrollingTextWrapper"
                        class="absolute z-30 top-0 left-0 text-white/50 transition-all duration-1000">
                        <p class="h-10"></p>
                        <p class="inline-block transition-all duration-1000 px-2 h-10 text-white">Nov 30, 2024</p>
                        <p class="inline-block transition-all duration-1000 px-2 h-10">Free DTF Experience</p>
                        <p class="inline-block transition-all duration-1000 px-2 h-10">Exclusive Promo</p>
                        <p class="inline-block transition-all duration-1000 px-2 h-10">Refreshment</p>
                        <p class="inline-block transition-all duration-1000 px-2 h-10">Live DJ Performance</p>
                        <p class="inline-block transition-all duration-1000 px-2 h-10">Door Prize</p>
                        <p class="h-10"></p>
                    </div>
                </div>
            </div>
            <div id="registerBtnGroup" class="transition-all duration-1000 opacity-0">
                <a target="_blank" href="https://maps.app.goo.gl/3Xy8UNDd2qvwcWF37"
                    class="flex justify-center gap-x-4 text-lg items-center bg-dsl-blue py-5 rounded-full hover:font-bold transition-all w-full">Get
                    Direction? <img src="/assets/icon/arrow.svg" alt="arrow" class="w-3" /></a>
            </div>

        </div>
        <form id="rsvpForm" method="POST" action="/participant/register"
            class="relative min-h-screen w-full transition-all duration-1000">
            <div id="formSliderContainer" class="absolute w-full h-full z-10 bg-black">
                <img src="/assets/img/form-slide-1.png" alt="form slide 1"
                    class="absolute top-0 left-0 h-full object-cover object-center opacity-0 transition-all duration-1000">
                <img src="/assets/img/form-slide-2.png" alt="form slide 2"
                    class="absolute top-0 left-0 h-full object-cover object-center opacity-0 transition-all duration-1000">
                <img src="/assets/img/form-slide-3.png" alt="form slide 3"
                    class="absolute top-0 left-0 h-full object-cover object-center opacity-0 transition-all duration-1000">
                <img src="/assets/img/form-slide-4.png" alt="form slide 4"
                    class="absolute top-0 left-0 h-full object-cover object-center opacity-0 transition-all duration-1000">
                <img src="/assets/img/form-slide-5.png" alt="form slide 5"
                    class="absolute top-0 left-0 h-full object-cover object-center opacity-0 transition-all duration-1000">
            </div>
            <div class="absolute w-full h-full z-10 bg-black/50"></div>
            @csrf()
            @method('POST')
            <div class="absolute w-full h-full z-20 px-8 flex flex-col justify-between pb-6">
                <div class="flex justify-between py-8 ">
                    <a href="#main">
                        <img src="/assets/icon/arrow-left.svg" alt="back to landing" class="w-8 text-white">
                    </a>
                    <p class="text-right text-white font-bold text-3xl">The Unbox Day</p>
                </div>
                <div class="flex-grow overflow-y-auto overflow-x-hidden">
                    <div class="relative flex flex-col gap-y-8 items-center py-8">
                        <div class="flex-grow w-full flex flex-col gap-y-8 px-2">
                            <input type="text" name="name" placeholder="Enter your full name"
                                class="block w-full py-6 rounded-2xl transition-all bg-white/10 border focus:border-2 border-[#ebebeb] focus:border-white text-white placeholder-white text-center focus:placeholder-transparent" />
                            <input type="email" name="email" placeholder="Enter your email"
                                class="block w-full py-6 rounded-2xl transition-all bg-white/10 border focus:border-2 border-[#ebebeb] focus:border-white text-white placeholder-white text-center focus:placeholder-transparent" />
                            <input type="text" name="phone" placeholder="Enter your phone number"
                                class="block w-full py-6 rounded-2xl transition-all bg-white/10 border focus:border-2 border-[#ebebeb] focus:border-white text-white placeholder-white text-center focus:placeholder-transparent" />
                            <button type="button" id="categoryBtn"
                                class="block w-full py-6 rounded-2xl transition-all bg-white/10 border hover:border-2 border-[#ebebeb] hover:border-white text-white text-center">Category
                                ?</button>
                            <div id="categoryList"
                                class="text-white px-4 bg-white/10 rounded-3xl border-[#ebebeb] text-center h-0 overflow-hidden transition-all duration-500">
                                <div class="border-b border-[#ebebeb] py-4">
                                    <label for="categoryCompany">Company</label>
                                    <input class="hidden" type="radio" name="category" id="categoryCompany"
                                        value="Company" />
                                </div>
                                <div class="border-b border-[#ebebeb] py-4">
                                    <label for="categoryKOL">KOL</label>
                                    <input class="hidden" type="radio" name="category" id="categoryKOL" value="KOL" />
                                </div>
                                <div class="border-b border-[#ebebeb] py-4">
                                    <label for="categoryFamily">Family and Friends</label>
                                    <input class="hidden" type="radio" name="category" id="categoryFamily"
                                        value="Family and Friend" />
                                </div>
                                <div class="py-4">
                                    <label for="categoryOthers">Others</label>
                                    <input class="hidden" type="radio" name="category" id="categoryOthers"
                                        value="Others" />
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <button id="submitBtn" type="button"
                    class=" block w-full rounded-2xl bg-[#cbcbcb] text-[#808080] py-6 hover:bg-dsl-blue hover:text-white transition-all mt-16">SUBMIT</button>
            </div>

        </form>

    </div>
@endsection

@push('script')
    <script>
        const logo = document.getElementById("logo");
        const loadingBG = document.getElementById("loadingBG");
        const headlineGroup = document.getElementById("headlineGroup");
        const registerBtnGroup = document.getElementById("registerBtnGroup");
        const rsvpForm = document.getElementById("rsvpForm");
        const formSlider = document.querySelectorAll("#formSliderContainer img");
        const categoryBtn = document.getElementById("categoryBtn");
        const submitBtn = document.getElementById("submitBtn");
        const categoryList = document.getElementById("categoryList");
        const scrollingtextWrapper = document.getElementById("scrollingTextWrapper")
        const scrollingtexts = scrollingtextWrapper.querySelectorAll("p")
        const scrollingTextHighlight = document.getElementById("highlight");
        const scrollingTextLen = scrollingtexts.length - 2;

        let initialAlert = {!! session('alert') ? json_encode(session('alert')) : 'null' !!};
        if (initialAlert) {
            Swal.fire(initialAlert);
        }


        const formSliderLen = formSlider.length;
        let formSliderIndex = 0;

        setTimeout(() => {
            logo.classList.add("opacity-100");
            setTimeout(() => {
                logo.classList.remove("-translate-x-1/2", "-translate-y-1/2");
                logo.classList.replace("top-1/4", "top-8");
                logo.classList.replace("left-1/2", "left-8");
                loadingBG.classList.add("opacity-0");
                setTimeout(() => {
                    loadingBG.remove();
                    registerBtnGroup.classList.remove("opacity-0");
                    headlineGroup.classList.remove("opacity-0");
                    scrollingTextHighlight.style.width = scrollingtexts[1].getBoundingClientRect()
                        .width + "px"
                    for (let i = 2; i <= scrollingTextLen; i++) {
                        setTimeout(() => {
                            scrollingtextWrapper.style.top = "-" + (((i - 1) * 2.5)) +
                                "rem";
                            scrollingtexts[i - 1].classList.remove("text-white")
                            scrollingtexts[i].classList.add("text-white")
                            scrollingTextHighlight.style.width = scrollingtexts[i]
                                .getBoundingClientRect().width + "px"
                        }, 2000 * (i - 1))
                    }
                }, 1000);
            }, 2000);
        }, 1000);

        formSlider[formSliderIndex].classList.remove("opacity-0")
        setInterval(() => {
            formSlider[formSliderIndex].classList.toggle("opacity-0")
            formSliderIndex = (formSliderIndex + 1) % formSliderLen;
            formSlider[formSliderIndex].classList.toggle("opacity-0")
        }, 3000);

        const popup = Swal.mixin({
            customClass: {
                confirmButton: "block w-full rounded-full",
                popup: "rounded-[2rem]",
                image: "w-32 mx-auto pt-8"
            }
        })

        const onSelectCategory = (e) => {
            categoryBtn.innerText = e.target.innerText;
            toggleCategoryList()
        }

        const toggleCategoryList = () => {
            categoryList.classList.toggle("border")
            categoryList.classList.toggle("h-0")
        }

        const token  = document.querySelector('input[name="_token"]').value;

        submitBtn.addEventListener("click", () => {
            const formData = new FormData(rsvpForm);
            if (!formData.has("category")){
                formData.set("category", null)
            }
            fetch("/participant/register", {
                body: formData,
                headers: {
                    "Accept": "application/json",
                },
                method: "post",
            }).then((res) => {
                if (res.ok) {
                    popup.fire({
                        title: `<span class="font-inter font-bold text-[#040404]">Almost There!</span>`,
                        html: `<div class="text-sm -mt-4"><p class="font-inter">You are Ready to <b>Unbox Your Potential</b></p><p class="font-inter">Please kindly <b>check your email for confirmation</b></p></div>`,
                        imageUrl: "/assets/icon/check.svg",
                        confirmButtonText: `<span class="font-inter">Close</span>`
                    });
                    return null
                } else {
                    return res.json()
                }
            }).then((data) => {
                console.log(data)
                if (data) {
                    popup.fire({
                        title: '<span class="font-inter font-bold text-[#040404]">Oops!</span>',
                        html: `<ul class="text-left text-red-500 list-disc p-4 flex flex-col gap-y-2 text-lg rounded-lg bg-red-200">
                            ${Object.keys(data.errors).map(key => '<li class="mx-4">'+data.errors[key].join(',')+'</li>').join('')}
                        </ul>`,
                        icon: 'error',
                        confirmButtonText: `<span class="font-inter">Close</span>`
                    });
                }
            })
        })

        categoryBtn.addEventListener("click", toggleCategoryList);

        categoryList.querySelectorAll("label").forEach((item) => {
            item.addEventListener("click", onSelectCategory);
        })
    </script>
@endpush
