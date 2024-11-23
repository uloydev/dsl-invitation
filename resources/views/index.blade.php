@extends('layouts.app')

@section('content')
    <div class="min-h-[100svh] min-w-screen relative bg-transparent max-w-lg mx-auto overflow-x-hidden overflow-y-auto">
        <div id="loadingBG" class="fixed z-30 top-0 h-[100svh] w-screen max-w-lg bg-dsl-blue transition-all duration-700 ">
        </div>
        <div id="sliderContainer"
            class="fixed w-full max-w-lg h-full -z-10 bg-black top-0 left-0 lg:left-1/2 lg:-translate-x-1/2">
            @for ($i = 1; $i <= 6; $i++)
                <img src="/assets/img/form-slide-{{ $i }}.png" alt="form slide {{ $i }}"
                    class="absolute top-0 left-0 h-full object-cover object-center opacity-0 transition-all duration-1000">
            @endfor
        </div>


        <div id="scrollContainer" class="snap-mandatory snap-y h-[100svh] max-h-[100svh] w-screen max-w-lg overflow-y-auto overflow-x-hidden">
            <div id="main"
                class="flex flex-col relative min-h-[100svh] w-full pt-20 text-white px-8 font-inter snap-start">
                <div
                    class="absolute w-full h-[100vh] max-w-lg -z-10 left-0 lg:left-1/2 lg:-translate-x-1/2 top-0 bg-gradient-to-b from-black/50 via-transparent to-black/50">
                </div>
                <img id="logo" src="/assets/img/logo.svg" alt="Logo DSL"
                    class="w-20 fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 transition-all duration-500 z-50">
                <img id="unbox" src="/assets/img/unbox.png" alt="Unbox"
                    class="w-12 absolute top-8 right-8 opacity-0 transition-all duration-1000 z-10">
                <div id="headlineGroup"
                    class="flex-grow flex flex-col justify-between text-[2.4rem] font-bold opacity-0 transition-all duration-1000">
                    <div>
                        <p>You Are Invited to</p>
                        <p class="-mt-2">The Unbox Day</p>
                        <div class="-mt-3">
                            <span class="inline-block text-sm bg-dsl-blue px-2 py-1"><span class="font-normal">Grand
                                    Opening of</span> Department
                                Sports Lab</span>
                        </div>
                    </div>
                </div>
                <div id="registerBtnGroup" class="transition-all duration-1000 opacity-0 pb-10">
                    <div class="flex flex-col items-center">
                        <span class="inline-block text-base font-bold bg-dsl-blue px-2 py-1 mx-auto">SATURDAY, 30 NOVEMBER
                            2024</span>
                    </div>
                    <div class="flex flex-col items-center text-[.6rem] mt-4">
                        <p>FREE DTF EXPERIENCE - EXCLUSIVE PROMO GRAND OPENING</p>
                        <p>REFRESHMENT - DOOR PRIZE - DJ PERFORMANCE</p>
                    </div>
                    <div class="flex gap-x-6 mt-12">

                        <a id="goToForm"
                            class="flex-grow flex justify-center gap-x-3 text-lg items-center bg-dsl-blue py-5 rounded-full group hover:font-bold transition-all w-full">RSVP
                            NOW <img src="/assets/icon/arrow.svg" alt="arrow"
                                class="w-3 rotate-90 group-hover:w-4 transition-all" /></a>
                        <a target="_blank" href="https://maps.app.goo.gl/3Xy8UNDd2qvwcWF37"
                            class="rounded-full p-5 bg-white hover:bg-[#c6c6c6] flex items-center justify-center group"><img
                                src="/assets/icon/map.svg" alt="arrow"
                                class="w-8 group-hover:w-9 rotate-90 transition-all" /></a>
                    </div>
                </div>

            </div>
            <form id="rsvpForm" method="POST" action="/participant/register"
                class="relative min-h-[100svh] w-full transition-all duration-1000 snap-start">
                <div class="absolute top-0 left-0 h-screen w-full -z-10 bg-black/50"></div>
                @csrf()
                @method('POST')
                <div class="absolute w-full h-full z-20 px-8 flex flex-col justify-between pb-6">
                    <div class="flex justify-between py-8 ">
                        <a id="goToMain">
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
                                    class="block w-full py-6 rounded-2xl transition-all bg-white/10 border hover:border-2 border-[#ebebeb] hover:border-white text-white text-center">Category</button>
                                <div id="categoryList"
                                    class="text-white px-4 bg-white/10 rounded-3xl border-[#ebebeb] text-center h-0 overflow-hidden transition-all duration-500">
                                    <div class="border-b border-[#ebebeb] py-4">
                                        <label for="categoryCompany">Company</label>
                                        <input class="hidden" type="radio" name="category" id="categoryCompany"
                                            value="Company" />
                                    </div>
                                    <div class="border-b border-[#ebebeb] py-4">
                                        <label for="categoryKOL">KOL</label>
                                        <input class="hidden" type="radio" name="category" id="categoryKOL"
                                            value="KOL" />
                                    </div>
                                    <div class="border-b border-[#ebebeb] py-4">
                                        <label for="categoryFamily">Family and Friends</label>
                                        <input class="hidden" type="radio" name="category" id="categoryFamily"
                                            value="Family and Friend" />
                                    </div>
                                    <div class="border-b border-[#ebebeb] py-4">
                                        <label for="categoryPartner">Partner</label>
                                        <input class="hidden" type="radio" name="category" id="categoryPartner"
                                            value="Partner" />
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
                        class=" block w-full rounded-2xl bg-[#cbcbcb] text-[#808080] py-6 hover:bg-dsl-blue hover:text-white transition-all mt-16 mb-4">SUBMIT</button>
                </div>
            </form>
            <div id="timeline"
                class="min-h-[100svh] w-full snap-start flex flex-col items-center justify-between relative py-4 font-inter text-white text-center">
                <div class="absolute top-0 left-0 h-screen w-full -z-10 bg-black/50"></div>
                <p class="font-bold text-4xl mt-4">
                    RUNDOWN
                </p>
                <div class="flex-grow h-full flex items-center">
                    <div id="timelineImg" class="overflow-hidden transition-all duration-1000 px-8 h-[90%]">
                        <img src="/assets/img/timeline.png" alt="timeline"
                            class="w-full object-center aspect-[9/16]">
                    </div>
                </div>
                <a href="https://department.co.id" target="_blank" class="mb-4">Department.co.id</p>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        const logo = document.getElementById("logo");
        const unbox = document.getElementById("unbox");
        const loadingBG = document.getElementById("loadingBG");
        const headlineGroup = document.getElementById("headlineGroup");
        const registerBtnGroup = document.getElementById("registerBtnGroup");
        const rsvpForm = document.getElementById("rsvpForm");
        const formSlider = document.querySelectorAll("#sliderContainer img");
        const categoryBtn = document.getElementById("categoryBtn");
        const submitBtn = document.getElementById("submitBtn");
        const categoryList = document.getElementById("categoryList");
        const scrollContainer = document.getElementById("scrollContainer");
        const goToMainBtn = document.getElementById("goToMain")
        const goToFormBtn = document.getElementById("goToForm")
        const timeline = document.getElementById("timeline");
        const timelineImg = document.getElementById("timelineImg");

        const popup = Swal.mixin({
            customClass: {
                confirmButton: "block w-full rounded-full",
                popup: "rounded-[2rem]",
                image: "w-32 mx-auto pt-8"
            }
        })

        let initialAlert = {!! session('alert') ? json_encode(session('alert')) : 'null' !!};
        if (initialAlert) {
            popup.fire(initialAlert);
        }


        const formSliderLen = formSlider.length;
        let formSliderIndex = 0;

        setTimeout(() => {
            window.scrollTo(0, 0)
            logo.classList.add("opacity-100");
            setTimeout(() => {
                logo.classList.remove("-translate-x-1/2", "-translate-y-1/2");
                logo.classList.replace("top-1/2", "top-8");
                logo.classList.replace("left-1/2", "left-8");
                logo.classList.replace("w-20", "w-16");
                loadingBG.classList.add("opacity-0");
                setTimeout(() => {
                    unbox.classList.remove("opacity-0")
                    logo.classList.replace("fixed", "absolute");
                    loadingBG.remove();
                    registerBtnGroup.classList.remove("opacity-0");
                    headlineGroup.classList.remove("opacity-0");
                }, 1000);
            }, 2000);
        }, 1000);

        formSlider[formSliderIndex].classList.remove("opacity-0")
        setInterval(() => {
            formSlider[formSliderIndex].classList.toggle("opacity-0")
            formSliderIndex = (formSliderIndex + 1) % formSliderLen;
            formSlider[formSliderIndex].classList.toggle("opacity-0")
        }, 3000);

        const onSelectCategory = (e) => {
            categoryBtn.innerText = e.target.innerText;
            toggleCategoryList()
        }

        const toggleCategoryList = () => {
            categoryList.classList.toggle("border")
            categoryList.classList.toggle("h-0")
        }

        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                /* or $(window).height() */
                rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */
            );
        }


        const token = document.querySelector('input[name="_token"]').value;

        // const timelineInterval = setInterval(() => {
        //     console.log("interval");
        //     if (isElementInViewport(timeline) && timelineImg.classList.contains("opacity-0")) {
        //         console.log("masuk");
        //         timelineImg.classList.remove("opacity-0");
        //         setTimeout(() => {
        //             console.log("timeout");
        //             clearInterval(timelineInterval);
        //         }, 1000)
        //     }
        // }, 100)

        goToFormBtn.addEventListener("click", (e) => {
            e.preventDefault();
            scrollContainer.classList.toggle("snap-mandatory")
            scrollContainer.classList.toggle("snap-y")
            window.location.href = "#rsvpForm"
            scrollContainer.classList.toggle("snap-mandatory")
            scrollContainer.classList.toggle("snap-y")
        })

        goToMainBtn.addEventListener("click", (e) => {
            e.preventDefault();
            scrollContainer.classList.toggle("snap-mandatory")
            scrollContainer.classList.toggle("snap-y")
            window.location.href = "#main"
            scrollContainer.classList.toggle("snap-mandatory")
            scrollContainer.classList.toggle("snap-y")
        })

        submitBtn.addEventListener("click", () => {
            submitBtn.disabled= true;
            const formData = new FormData(rsvpForm);
            if (!formData.has("category")) {
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
                    rsvpForm.reset();
                    categoryBtn.innerText = "Categpry";
                    return null
                } else {
                    return res.json()
                }
            }).then((data) => {
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
                submitBtn.disabled= false;
            })
        })

        categoryBtn.addEventListener("click", toggleCategoryList);

        categoryList.querySelectorAll("label").forEach((item) => {
            item.addEventListener("click", onSelectCategory);
        })
    </script>
@endpush
