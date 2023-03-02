@extends('layouts.main')

@section('content')

    <!-- Section 2 -->
    <section class="sec-2 bg py-20 lg:py-32" style="background-image: url({{ asset('images/BACKGROUND.png') }});">
        <div class="container">
            <div class="flex justify-center items-center flex-col lg:flex-row text-center lg:text-start gap-[60px] lg:gap-0">
                <div>
                    <h2 class="text-bg title text-color-6 lg:w-[60%] text-center lg:text-start mb-6 md:mb-[60px]">Project
                        Management
                    </h2>
                    <p class="desc-t-size mb-20 lg:w-[87%] text-center lg:text-start">Images, videos, PDFs and audio files
                        are
                        supported. Create math expressions and diagrams directly from the app. Take photos with the mobile
                        app and
                        save them to a note.</p>

                    <a href="" class="btn arrow-right bg-color-2">Get Started</a>
                </div>
                <div class="lg:image-area">
                    <img src="{{ asset('images/12.svg') }}" alt="">
                </div>
            </div>


            <div class="sec-2 bg pt-[100px] pb-0 lg:py-32">
                <div class="">
                    <div
                        class="flex justify-center items-center lg:flex-row-reverse flex-col text-center lg:text-start gap-[60px] lg:gap-0">
                        <div>
                            <h2 class="text-bg title text-color-6 lg:w-[60%] mb-6">Work Together</h2>
                            <p class="desc-t-size lg:mb-20 lg:w-[87%] mb-[60px]">Images, videos, PDFs and audio files are
                                supported.
                                Create math expressions and diagrams directly from the app. Take photos with the mobile app
                                and save
                                them
                                to a note.</p>

                            <a href="" class="btn arrow-right bg-color-2">Try it now</a>
                        </div>
                        <div class="lg:w-[770px] lg:mr-40 w-9/12">
                            <img src="{{ asset('images/work.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <!-- Section 3  -->

    <!-- Part 1 -->
    <section class="sec-3">
        <div class="bg-color-1 lg:py-32 py-20">
            <div class="container">
                <div
                    class="flex justify-center items-center flex-col lg:flex-row text-center lg:text-start gap-[60px] lg:gap-0">
                    <div>
                        <h2 class="u3 text-bg title text-white w-full mb-6 lg:mb-auto">Use as Extension</h2>
                        <p class="desc-t-size lg:mb-20 lg:w-[87%] w-auto text-white mb-[60px]">Use the web clipper
                            extension,
                            available on Chrome and Firefox, to save web pages or take screenshots as notes.
                        </p>

                        <a href="" class="btn arrow-right bg-color-2">Let's Go</a>
                    </div>
                    <div class="lg:image-area">
                        <img src="{{ asset('images/72.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Part 2  -->
        <div class="bg-white lg:py-32 py-20">
            <div class="container">
                <div
                    class="flex justify-center items-center flex-col lg:flex-row-reverse text-center lg:text-start gap-[60px] lg:gap-0">
                    <div>
                        <h2 class="u4 text-bg title lg:w-[55%] w-full mb-6 lg:mb-auto text-color-6">Customise it
                            to your needs</h2>
                        <p class="desc-t-size mb-20 lg:w-[87%] w-auto">Customise the app with plugins, custom themes and
                            multiple
                            text editors (Rich Text or Markdown). Or create your own scripts and plugins using the Extension
                            API.
                        </p>

                        <a href="" class="btn arrow-right bg-color-2">Let's Go</a>
                    </div>
                    <div class="image-area hidden sm:inline-block">
                        <img src="{{ asset('images/27.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class="sec-4 bg-white pb-32 relative overflow-hidden">
        <div class="flex flex-col items-center">
            <h2 class="u2 title text-center text-color-6 mb-8">Choose Your Plan</h2>
            <p class="desc-t-size text-center text-color-6 w-[65%] mb-[60px]">Whether you want to get organized, keep your
                personal life on track, or boost workplace productivity, Evernote has the right plan for you.</p>
        </div>

        <div class="container overflow-hidden">

            <!-- Slider main container -->
            <div class="swiper2" id="toggler">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <!-- Card 1 -->
                        <div class="card">
                            <div class="pricing">
                                <h4 class="text-2xl font-bold">Free</h4>
                                <h2 class="text-4xl font-bold">$0</h2>
                                <p class="text-lg font-semibold">Capture ideas and find them quickly</p>
                            </div>
                            <div class="features my-[25px]">
                                <ul class="text-base flex flex-col gap-7">
                                    <li>Sync unlimited devices</li>
                                    <li>10 GB monthly uploads</li>
                                    <li>200 MB max. note size</li>
                                    <li>Customize Home dashboard and access extra widgets</li>
                                    <li>Connect primary Google Calendar account</li>
                                    <li>Add due dates, reminders, and notifications to your tasks</li>
                                </ul>
                            </div>
                            <div class="inline-flex">
                                <a href="#" class="btn2 border font-semibold border-color-3">Get Started</a>
                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide">
                        <!-- Card 2 -->
                        <div class="card">
                            <div class="pricing">
                                <h4 class="text-2xl font-bold">Personal</h4>
                                <h2 class="text-4xl font-bold">$11.99</h2>
                                <p class="text-lg font-semibold">Capture ideas and find them quickly</p>
                            </div>
                            <div class="features my-[25px]">
                                <ul class="text-base flex flex-col gap-7">
                                    <li>Sync unlimited devices</li>
                                    <li>10 GB monthly uploads</li>
                                    <li>200 MB max. note size</li>
                                    <li>Customize Home dashboard and access extra widgets</li>
                                    <li>Connect primary Google Calendar account</li>
                                    <li>Add due dates, reminders, and notifications to your tasks</li>
                                </ul>
                            </div>
                            <div class="inline-flex">
                                <a href="#" class="btn2 border font-semibold border-color-3 text-color-6">Get
                                    Started</a>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <!-- Card 3 -->
                        <div class="card">
                            <div class="pricing">
                                <h4 class="text-2xl font-bold">Organization</h4>
                                <h2 class="text-4xl font-bold">$49.99</h2>
                                <p class="text-lg font-semibold">Capture ideas and find them quickly</p>
                            </div>
                            <div class="features my-[25px]">
                                <ul class="text-base flex flex-col gap-7">
                                    <li>Sync unlimited devices</li>
                                    <li>10 GB monthly uploads</li>
                                    <li>200 MB max. note size</li>
                                    <li>Customize Home dashboard and access extra widgets</li>
                                    <li>Connect primary Google Calendar account</li>
                                    <li>Add due dates, reminders, and notifications to your tasks</li>
                                </ul>
                            </div>
                            <div class="inline-flex">
                                <a href="#" class="btn2 border font-semibold border-color-3">Get Started</a>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">
                        <!-- Card 4 -->
                        <div class="card">
                            <div class="pricing">
                                <h4 class="text-2xl font-bold">Free</h4>
                                <h2 class="text-4xl font-bold">$0</h2>
                                <p class="text-lg font-semibold">Capture ideas and find them quickly</p>
                            </div>
                            <div class="features my-[25px]">
                                <ul class="text-base flex flex-col gap-7">
                                    <li>Sync unlimited devices</li>
                                    <li>10 GB monthly uploads</li>
                                    <li>200 MB max. note size</li>
                                    <li>Customize Home dashboard and access extra widgets</li>
                                    <li>Connect primary Google Calendar account</li>
                                    <li>Add due dates, reminders, and notifications to your tasks</li>
                                </ul>
                            </div>
                            <div class="inline-flex">
                                <a href="#" class="btn2 border font-semibold border-color-3">Get Started</a>
                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide">
                        <!-- Card 5 -->
                        <div class="card">
                            <div class="pricing">
                                <h4 class="text-2xl font-bold">Personal</h4>
                                <h2 class="text-4xl font-bold">$11.99</h2>
                                <p class="text-lg font-semibold">Capture ideas and find them quickly</p>
                            </div>
                            <div class="features my-[25px]">
                                <ul class="text-base flex flex-col gap-7">
                                    <li>Sync unlimited devices</li>
                                    <li>10 GB monthly uploads</li>
                                    <li>200 MB max. note size</li>
                                    <li>Customize Home dashboard and access extra widgets</li>
                                    <li>Connect primary Google Calendar account</li>
                                    <li>Add due dates, reminders, and notifications to your tasks</li>
                                </ul>
                            </div>
                            <div class="inline-flex">
                                <a href="#" class="btn2 border font-semibold border-color-3">Get Started</a>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <!-- Card 6 -->
                        <div class="card">
                            <div class="pricing">
                                <h4 class="text-2xl font-bold">Organization</h4>
                                <h2 class="text-4xl font-bold">$49.99</h2>
                                <p class="text-lg font-semibold">Capture ideas and find them quickly</p>
                            </div>
                            <div class="features my-[25px]">
                                <ul class="text-base flex flex-col gap-7">
                                    <li>Sync unlimited devices</li>
                                    <li>10 GB monthly uploads</li>
                                    <li>200 MB max. note size</li>
                                    <li>Customize Home dashboard and access extra widgets</li>
                                    <li>Connect primary Google Calendar account</li>
                                    <li>Add due dates, reminders, and notifications to your tasks</li>
                                </ul>
                            </div>
                            <div class="inline-flex">
                                <a href="#"
                                    class="btn2 border-t-neutral-200 border font-semibold border-color-3">Get Started</a>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">
                        <!-- Card 7 -->
                        <div class="card">
                            <div class="pricing">
                                <h4 class="text-2xl font-bold">Organization</h4>
                                <h2 class="text-4xl font-bold">$49.99</h2>
                                <p class="text-lg font-semibold">Capture ideas and find them quickly</p>
                            </div>
                            <div class="features my-[25px]">
                                <ul class="text-base flex flex-col gap-7">
                                    <li>Sync unlimited devices</li>
                                    <li>10 GB monthly uploads</li>
                                    <li>200 MB max. note size</li>
                                    <li>Customize Home dashboard and access extra widgets</li>
                                    <li>Connect primary Google Calendar account</li>
                                    <li>Add due dates, reminders, and notifications to your tasks</li>
                                </ul>
                            </div>
                            <div class="inline-flex">
                                <a href="#"
                                    class="btn2 border-t-neutral-200 border font-semibold border-color-3">Get Started</a>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">
                        <!-- Card 8 -->
                        <div class="card">
                            <div class="pricing">
                                <h4 class="text-2xl font-bold">Organization</h4>
                                <h2 class="text-4xl font-bold">$49.99</h2>
                                <p class="text-lg font-semibold">Capture ideas and find them quickly</p>
                            </div>
                            <div class="features my-[25px]">
                                <ul class="text-base flex flex-col gap-7">
                                    <li>Sync unlimited devices</li>
                                    <li>10 GB monthly uploads</li>
                                    <li>200 MB max. note size</li>
                                    <li>Customize Home dashboard and access extra widgets</li>
                                    <li>Connect primary Google Calendar account</li>
                                    <li>Add due dates, reminders, and notifications to your tasks</li>
                                </ul>
                            </div>
                            <div class="inline-flex">
                                <a href="#"
                                    class="btn2 border-t-neutral-200 border font-semibold border-color-3">Get Started</a>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">
                        <!-- Card 9 -->
                        <div class="card">
                            <div class="pricing">
                                <h4 class="text-2xl font-bold">Organization</h4>
                                <h2 class="text-4xl font-bold">$49.99</h2>
                                <p class="text-lg font-semibold">Capture ideas and find them quickly</p>
                            </div>
                            <div class="features my-[25px]">
                                <ul class="text-base flex flex-col gap-7">
                                    <li>Sync unlimited devices</li>
                                    <li>10 GB monthly uploads</li>
                                    <li>200 MB max. note size</li>
                                    <li>Customize Home dashboard and access extra widgets</li>
                                    <li>Connect primary Google Calendar account</li>
                                    <li>Add due dates, reminders, and notifications to your tasks</li>
                                </ul>
                            </div>
                            <div class="inline-flex">
                                <a href="#"
                                    class="btn2 border-t-neutral-200 border font-semibold border-color-3">Get Started</a>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination sm:hidden mt-5 mb-12"></div>

            </div>

        </div>

    </section>
    <!-- Section 5 -->
    <section class="sec-5 bg-color-1 xl:p-[150px] pt-[140px] pb-[100px]">
        <div class="bgp">
            <img src="{{ asset('images/BACKGROUND.png') }}" alt="">
        </div>
        <div class="container">
            <div class="flex flex-col justify-center xl:items-center items-start text-start xl:text-center">
                <h2 class="title text-white mb-2">Your work, everywhere you are</h2>
                <p class="desc-t-size xl:text-center text-white xl:w-[75%] w-auto mb-[60px]">Access your notes from your
                    computer, phone or tablet by synchronising with various services, including whitepace, Dropbox and
                    OneDrive.
                    The app is available on Windows, macOS, Linux, Android and iOS. A terminal app is also available!</p>
                <a href="#" class="btn arrow-right bg-color-2 z-[1]">Try Taskey</a>
            </div>
        </div>
    </section>

    <!-- Section 6 -->
    <section class="sec-6">
        <div class="bg-white md:py-32 py-20">
            <div class="xl:container">
                <div class="flex justify-center xl:flex-row flex-col-reverse items-center gap-24 xl:gap-0">
                    <div class="xl:inline-block flex flex-col items-center">
                        <h2 class="u6 text-bg title text-color-6 w-[100%] text-center xl:text-start mb-6 lg:mb-auto">100%
                            your data
                        </h2>
                        <p
                            class="desc-t-size xl:mb-20 mb-[60px] w-[85%] xl:w-[52rem] text-color-6 text-center xl:text-start">
                            The
                            app is open source and your notes are saved to an open format, so you'll always have access to
                            them. Uses
                            End-To-End Encryption (E2EE) to secure your notes and ensure no-one but yourself can access
                            them.
                        </p>

                        <a href="" class="btn arrow-right bg-color-2">Read more</a>
                    </div>
                    <div class="image-area">
                        <img src="{{ asset('images/Element8.png') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
        <!-- Sponsors Part -->
        <!-- <div class="container"> -->
        <div class="spons lg:py-32 pt-20 sm:pb-20">
            <div class="flex items-center flex-col lg:gap-12 md:gap-8">
                <h2 class="u7 title text-color-6">Our sponsors</h2>
                <div
                    class="flex flex-col md:flex-row items-center xl:gap-40 gap-32 justify-around xl:scale-100 scale-[60%]">
                    <img src="{{ asset('images/Apple.png') }}" alt="">
                    <img src="{{ asset('images/microsoft1.png') }}" alt="">
                    <img src="{{ asset('images/Slack_Technologies_Logo.png') }}" alt="">
                    <img src="{{ asset('images/google.png') }}" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section 7 -->
    <section>
        <div class="bg-color-1 lg:py-32 py-20">
            <div class="container">
                <div
                    class="flex justify-center lg:flex-row-reverse flex-col-reverse items-center text-center lg:text-start gap-[60px] md:gap-[100px]">
                    <div>
                        <h2 class="text-bg title text-white lg:w-[90%] w-auto mb-6 lg:mb-auto">Work with Your Favorite Apps
                            Using
                            whitepace</h2>
                        <p class="desc-t-size mb-20 text-white">Whitepace teams up with your favorite software. Integrate
                            with over
                            1000+ apps with Zapier to have all the tools you need for your project success.
                        </p>

                        <a href="#" class="btn arrow-right bg-color-2">Read more</a>
                    </div>
                    <div class="image-area basis-4/5">
                        <img src="{{ asset('images/Apps.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 8 -->
    <section class="sec-8 xl:h-[70rem] sm:h-[88rem] bg-white lg:p-[140px] py-[100px] sm:pt-[140px] sm:pb-[100px]">
        <div class="flex flex-col items-center">
            <h2 class="title text-center text-color-6 mb-[60px]">What Our Clients Says</h2>
        </div>
        <div class="container overflow-hidden">

            <!-- Slider main container -->
            <div class="swiper main-con">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <!-- Testimonial Box 1 -->
                    <div class="swiper-slide">

                        <div class="testimonial-box s">
                            <div class="quote">
                                <p class="text-lg text-white">Whitepate is designed as a collaboration tool for businesses
                                    that is a
                                    full project management solution.</p>
                                <div class="break"></div>
                                <div class="flex items-center">
                                    <div class="basis-[168px]">
                                        <img src="{{ asset('images/Avatar.png') }}" class="avater" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <h3 class="name text-color-1 font-bold text-2xl">Oberon Shaw, MCH</h3>
                                        <p class="text-white text-base">Head of Talent Acquisition, North America</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Testimonial Box 2 -->
                    <div class="swiper-slide">

                        <div class="testimonial-box s">
                            <div class="quote">
                                <p class="text-lg text-white">Whitepate is designed as a collaboration tool for businesses
                                    that is a
                                    full project management solution.</p>
                                <div class="break"></div>
                                <div class="flex items-center">
                                    <div class="basis-[168px]">
                                        <img src="{{ asset('images/Avatar.png') }}" class="avater" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <h3 class="text-color-1 font-bold text-2xl">Oberon Shaw, MCH</h3>
                                        <p class="text-white text-base">Head of Talent Acquisition, North America</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Testimonial Box 3 -->
                    <div class="swiper-slide">

                        <div class="testimonial-box s">
                            <div class="quote">
                                <p class="text-lg text-white">Whitepate is designed as a collaboration tool for businesses
                                    that is a
                                    full project management solution.</p>
                                <div class="break"></div>
                                <div class="flex items-center">
                                    <div class="basis-[168px]">
                                        <img src="{{ asset('images/Avatar.png') }}" class="avater" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <h3 class="text-color-1 font-bold text-2xl">Oberon Shaw, MCH</h3>
                                        <p class="text-white text-base">Head of Talent Acquisition, North America</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Testimonial Box 4 -->
                    <div class="swiper-slide">

                        <div class="testimonial-box s">
                            <div class="quote">
                                <p class="text-lg text-white">Whitepate is designed as a collaboration tool for businesses
                                    that is a
                                    full project management solution.</p>
                                <div class="break"></div>
                                <div class="flex items-center">
                                    <div class="basis-[168px]">
                                        <img src="{{ asset('images/Avatar.png') }}" class="avater" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <h3 class="text-color-6 font-bold text-2xl">Oberon Shaw, MCH</h3>
                                        <p class="text-white text-base">Head of Talent Acquisition, North America</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Testimonial Box 5 -->
                    <div class="swiper-slide">

                        <div class="testimonial-box s">
                            <div class="quote">
                                <p class="text-lg text-white">Whitepate is designed as a collaboration tool for businesses
                                    that is a
                                    full project management solution.</p>
                                <div class="break"></div>
                                <div class="flex items-center">
                                    <div class="basis-[168px]">
                                        <img src="{{ asset('images/Avatar.png') }}" class="avater" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <h3 class="text-color-1 font-bold text-2xl">Oberon Shaw, MCH</h3>
                                        <p class="text-white text-base">Head of Talent Acquisition, North America</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Testimonial Box 6 -->
                    <div class="swiper-slide">

                        <div class="testimonial-box s">
                            <div class="quote">
                                <p class="text-lg text-white">Whitepate is designed as a collaboration tool for businesses
                                    that is a
                                    full project management solution.</p>
                                <div class="break"></div>
                                <div class="flex items-center">
                                    <div class="basis-[168px]">
                                        <img src="{{ asset('images/Avatar.png') }}" class="avater" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <h3 class="text-color-1 font-bold text-2xl">Oberon Shaw, MCH</h3>
                                        <p class="text-white text-base">Head of Talent Acquisition, North America</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Testimonial Box 7 -->
                    <div class="swiper-slide">

                        <div class="testimonial-box s">
                            <div class="quote">
                                <p class="text-lg text-white">Whitepate is designed as a collaboration tool for businesses
                                    that is a
                                    full project management solution.</p>
                                <div class="break"></div>
                                <div class="flex items-center">
                                    <div class="basis-[168px]">
                                        <img src="{{ asset('images/Avatar.png') }}" class="avater" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <h3 class="text-color-6 font-bold text-2xl">Oberon Shaw, MCH</h3>
                                        <p class="text-white text-base">Head of Talent Acquisition, North America</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Testimonial Box 8 -->
                    <div class="swiper-slide">

                        <div class="testimonial-box s">
                            <div class="quote">
                                <p class="text-lg text-white">Whitepate is designed as a collaboration tool for businesses
                                    that is a
                                    full project management solution.</p>
                                <div class="break"></div>
                                <div class="flex items-center">
                                    <div class="basis-[168px]">
                                        <img src="{{ asset('images/Avatar.png') }}" class="avater" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <h3 class="text-color-1 font-bold text-2xl">Oberon Shaw, MCH</h3>
                                        <p class="text-white text-base">Head of Talent Acquisition, North America</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Testimonial Box 9 -->
                    <div class="swiper-slide">

                        <div class="testimonial-box s">
                            <div class="quote">
                                <p class="text-lg text-white">Whitepate is designed as a collaboration tool for businesses
                                    that is a
                                    full project management solution.</p>
                                <div class="break"></div>
                                <div class="flex items-center">
                                    <div class="basis-[168px]">
                                        <img src="{{ asset('images/Avatar.png') }}" class="avater" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <h3 class="text-color-1 font-bold text-2xl">Oberon Shaw, MCH</h3>
                                        <p class="text-white text-base">Head of Talent Acquisition, North America</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

            </div>

        </div>
    </section>

@stop
