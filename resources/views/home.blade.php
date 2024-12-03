<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Travel</title>
{{--        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />--}}
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />
{{--        <link href="./assets/styles/style.css" rel="stylesheet" />--}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
<x-inline-scripts/>
    </head>

    <body>
       <x-hero/>
        <!-- Section 1 -->
        <div class="lg:mt-52 mt-10 lg:mb-0 mb-8 w-full">
            <h1 class="lg:text-5xl text-2xl f-m-w text-purple font-bold text-center">Best Deals In November</h1>
        </div>
        <div class="mx-auto container">
            <div class="lg:pt-14 w-full lg:flex xl:px-0 px-4">
                <div class="lg:w-1/2 height-1 w-full relative lg:mb-0 mb-8 lg:mr-8">
                    <img src="/images/Rectangle 5.png" class="rounded absolute z-10 inset-0 w-full h-full object-cover object-center" />
                    <div class="left-0 bg-white bottom-0 mx-6 mb-3 absolute z-20 rounded-md">
                        <div class="px-6 py-3">
                            <h3 class="f-m-m text-2xl"><span class="font-semibold">London</span>, UK</h3>
                            <h4 class="f-m-m">$3000</h4>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 height-1 w-full relative lg:mb-0 mb-8 lg:mr-8">
                    <img src="/images/offer 02.png" class="rounded absolute z-10 inset-0 w-full h-full object-cover object-center" />
                    <div class="left-0 bg-white bottom-0 mx-6 mb-3 absolute z-20 rounded-md">
                        <div class="px-6 py-3">
                            <h3 class="f-m-m text-2xl"><span class="font-semibold">Toronto</span>, Canada</h3>
                            <h4 class="f-m-m">$3000</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:flex items-center justify-between lg:mt-5 xl:mt-8 xl:px-0 px-4">
                <div class="lg:w-1/3 w-full relative height-1 lg:mb-0 mb-8 lg:mr-8">
                    <img src="/images/offer 6.png" class="rounded absolute z-0 inset-0 w-full h-full object-cover object-center" />
                    <div class="left-0 absolute z-20 bg-white bottom-0 mb-3 mx-6 rounded-md">
                        <div class="px-6 py-3">
                            <h3 class="f-m-m text-2xl"><span class="font-semibold">San Francisco</span>, USA</h3>
                            <h4 class="f-m-m">$3000</h4>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 w-full relative height-1 lg:mb-0 mb-8 lg:mr-8">
                    <img src="/images/offer 04.png" class="rounded absolute z-0 inset-0 w-full h-full object-cover object-center" />
                    <div class="left-0 absolute z-20 bg-white bottom-0 mb-3 mx-6 rounded-md">
                        <div class="px-6 py-3">
                            <h3 class="f-m-m text-2xl"><span class="font-semibold">Dubai</span>, UAE</h3>
                            <h4 class="f-m-m">$3000</h4>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 w-full relative height-1 lg:mb-0 mb-8 lg:mr-8">
                    <img src="/images/offer 05.png" class="rounded absolute z-0 inset-0 w-full h-full object-cover object-center" />
                    <div class="left-0 absolute z-20 bg-white bottom-0 mb-3 mx-6 rounded-md">
                        <div class="px-6 py-3">
                            <h3 class="f-m-m text-2xl"><span class="font-semibold">Istanbul</span>, Turkey</h3>
                            <h4 class="f-m-m">$3000</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center my-16 w-full">
                <button class="border-purple border md:text-2xl text-lg rounded f-m-m font-semibold text-purple focus:outline-none md:px-12 px-6 py-3 md:py-6 xl:leading-4">Browse All Deals</button>
            </div>
        </div>
        <!-- Section 1 -->

        <!-- Section 2 -->
        <div class="relative pt-16">
            <img src="/images/background.png" class="absolute top-0 left-0 h-image flex-no-shrink flex -mt-2 z-0" />
            <div class="w-full lg:flex-row flex flex-col-reverse items-center justify-between mx-auto container relative z-20 xl:px-0 px-4">
                <div class="lg:w-1/2 mt-16 lg:flex">
                    <div class="flex flex-col">
                        <div class="rounded mb-8 bg-white px-4 xl:px-8 shadow-md">
                            <div class="mt-8">
                                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M49.1666 32.6666V27.1666C49.1666 26.6804 48.9734 26.214 48.6296 25.8702C48.2858 25.5264 47.8195 25.3333 47.3333 25.3333H28.9999C28.0275 25.3333 27.0948 25.7196 26.4072 26.4072C25.7196 27.0948 25.3333 28.0275 25.3333 28.9999M25.3333 28.9999C25.3333 29.9724 25.7196 30.905 26.4072 31.5926C27.0948 32.2803 28.0275 32.6666 28.9999 32.6666H50.9999C51.4862 32.6666 51.9525 32.8597 52.2963 33.2036C52.6401 33.5474 52.8333 34.0137 52.8333 34.4999V39.9999M25.3333 28.9999V50.9999C25.3333 51.9724 25.7196 52.905 26.4072 53.5926C27.0948 54.2803 28.0275 54.6666 28.9999 54.6666H50.9999C51.4862 54.6666 51.9525 54.4734 52.2963 54.1296C52.6401 53.7858 52.8333 53.3195 52.8333 52.8332V47.3333"
                                        stroke="#1A202C"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path d="M54.6667 40V47.3333H47.3334C46.361 47.3333 45.4283 46.947 44.7407 46.2594C44.0531 45.5718 43.6667 44.6391 43.6667 43.6667C43.6667 42.6942 44.0531 41.7616 44.7407 41.0739C45.4283 40.3863 46.361 40 47.3334 40H54.6667Z" stroke="#1A202C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="40" cy="40" r="39.5" stroke="#1A202C" />
                                </svg>
                            </div>
                            <div>
                                <h1 class="font-semibold text-2xl f-m-m pt-10">
                                    Affordable Price <br />
                                    Guranteed
                                </h1>
                                <p class="text-base font-normal f-m-m leading-loose py-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                            </div>
                        </div>
                        <div class="rounded bg-white px-4 xl:px-8 mb-8 lg:mb-0 shadow-md">
                            <div class="mt-8">
                                <svg width="80" height="81" viewBox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.8333 38.1666V52.8333C30.8333 53.3195 30.6402 53.7858 30.2964 54.1296C29.9525 54.4734 29.4862 54.6666 29 54.6666H25.3333C24.8471 54.6666 24.3808 54.4734 24.037 54.1296C23.6932 53.7858 23.5 53.3195 23.5 52.8333V39.9999C23.5 39.5137 23.6932 39.0474 24.037 38.7036C24.3808 38.3597 24.8471 38.1666 25.3333 38.1666H30.8333ZM30.8333 38.1666C32.7783 38.1666 34.6435 37.394 36.0188 36.0187C37.3941 34.6434 38.1667 32.7782 38.1667 30.8333V28.9999C38.1667 28.0275 38.553 27.0948 39.2406 26.4072C39.9282 25.7196 40.8609 25.3333 41.8333 25.3333C42.8058 25.3333 43.7384 25.7196 44.4261 26.4072C45.1137 27.0948 45.5 28.0275 45.5 28.9999V38.1666H51C51.9725 38.1666 52.9051 38.5529 53.5927 39.2405C54.2804 39.9282 54.6667 40.8608 54.6667 41.8333L52.8333 50.9999C52.5697 52.1246 52.0695 53.0904 51.4082 53.7517C50.7469 54.413 49.9602 54.7341 49.1667 54.6666H36.3333C34.8746 54.6666 33.4757 54.0871 32.4442 53.0557C31.4128 52.0242 30.8333 50.6253 30.8333 49.1666"
                                        stroke="#1A202C"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <circle cx="40" cy="40.0044" r="39.5" stroke="#1A202C" />
                                </svg>
                            </div>
                            <div>
                                <h1 class="font-semibold text-2xl f-m-m pt-10">
                                    Highly Qualified <br />
                                    Service
                                </h1>
                                <p class="text-base font-normal f-m-m leading-loose py-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col lg:ml-10 ml-0 lg:mt-10 mt-0">
                        <div class="rounded purple lg:mt-20 mt-0 px-4 xl:px-8 box-shadow-light">
                            <div class="mt-8">
                                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40.0002 50.5417L28.6849 56.4909L30.8464 43.8904L21.6797 34.9676L34.3297 33.1342L39.9874 21.6704L45.645 33.1342L58.295 34.9676L49.1284 43.8904L51.2899 56.4909L40.0002 50.5417Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="40" cy="40" r="39.5" stroke="white" />
                                </svg>
                            </div>
                            <div>
                                <h1 class="font-semibold text-2xl f-m-m pt-10 text-white">
                                    Hand Picked <br />
                                    Hotels
                                </h1>
                                <p class="text-base font-normal f-m-m leading-loose py-8 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                            </div>
                        </div>
                        <div class="rounded bg-white lg:mt-8 mt-8 px-4 xl:px-8 shadow-md">
                            <div class="mt-8">
                                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M49.1666 32.6666V27.1666C49.1666 26.6804 48.9734 26.214 48.6296 25.8702C48.2858 25.5264 47.8195 25.3333 47.3333 25.3333H28.9999C28.0275 25.3333 27.0948 25.7196 26.4072 26.4072C25.7196 27.0948 25.3333 28.0275 25.3333 28.9999M25.3333 28.9999C25.3333 29.9724 25.7196 30.905 26.4072 31.5926C27.0948 32.2803 28.0275 32.6666 28.9999 32.6666H50.9999C51.4862 32.6666 51.9525 32.8597 52.2963 33.2036C52.6401 33.5474 52.8333 34.0137 52.8333 34.4999V39.9999M25.3333 28.9999V50.9999C25.3333 51.9724 25.7196 52.905 26.4072 53.5926C27.0948 54.2803 28.0275 54.6666 28.9999 54.6666H50.9999C51.4862 54.6666 51.9525 54.4734 52.2963 54.1296C52.6401 53.7858 52.8333 53.3195 52.8333 52.8332V47.3333"
                                        stroke="#1A202C"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path d="M54.6667 40V47.3333H47.3334C46.361 47.3333 45.4283 46.947 44.7407 46.2594C44.0531 45.5718 43.6667 44.6391 43.6667 43.6667C43.6667 42.6942 44.0531 41.7616 44.7407 41.0739C45.4283 40.3863 46.361 40 47.3334 40H54.6667Z" stroke="#1A202C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="40" cy="40" r="39.5" stroke="#1A202C" />
                                </svg>
                            </div>
                            <div>
                                <h1 class="font-semibold text-2xl f-m-m pt-10">
                                    Affordable Price <br />
                                    Guranteed
                                </h1>
                                <p class="text-base font-normal f-m-m leading-loose py-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:pl-40 xl:pl-56">
                    <h1 class="lg:text-5xl text-3xl f-m-w text-purple font-bold">Why you should choose us?</h1>
                    <p class="lg:text-base text-sm f-m-m leading-loose mt-3 mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                    <button class="text-base font-bold purple rounded f-m-m md:py-4 py-2 px-4 md:px-8 foucus:outline-none text-white">View More</button>
                </div>
            </div>
        </div>
        <!-- Section 2 -->

        <div class="mt-10 lg:mt-64 mx-auto container">
            <!-- Section 3 -->
            <h1 class="lg:text-5xl text-2xl text-center f-m-w text-purple font-bold">Featured Listing</h1>
            <div class="py-8 h-full lg:flex items-center justify-between xl:px-0 px-4">
                <div class="h-full lg:w-1/3 lg:mr-8 lg:mb-0 mb-4">
                    <div class="w-full h-full height-1 relative">
                        <img src="/images/1.png" class="absolute w-full h-full inset-0 object-center object-center z-10" />
                        <div class="left-0 px-3 flex items-cente mb-3 justify-between bottom-0 w-full absolute z-20 pt-4">
                            <h4 class="f-m-m px-6 py-3 rounded-md bg-white">$3000</h4>
                            <div class="py-3 px-1 bg-black flex items-center rounded-md bg-opacity-75">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12">
                        <h1 class="f-m-m text-2xl font-semibold leading-7">Sydney, Australia</h1>
                        <p class="text-base f-m-m leading-loose mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="mt-6">
                            <a>
                                <p class="text-purple underline cursor-pointer text-base font-semibold">View Details</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="h-full lg:w-1/3 lg:mr-8 lg:mb-0 mb-4">
                    <div class="w-full h-full height-1 relative">
                        <img src="/images/2.png" class="absolute w-full h-full inset-0 object-center object-center z-10" />
                        <div class="left-0 px-3 flex items-center mb-3 justify-between bottom-0 w-full absolute z-20 pt-4">
                            <h4 class="f-m-m px-6 py-3 rounded-md bg-white">$3000</h4>
                            <div class="py-3 px-1 bg-black flex items-center rounded-md bg-opacity-75">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12">
                        <h1 class="f-m-m text-2xl font-semibold leading-7">New York, USA</h1>
                        <p class="text-base f-m-m leading-loose mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="mt-6">
                            <a>
                                <p class="text-purple underline cursor-pointer text-base font-semibold">View Details</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="h-full lg:w-1/3 lg:mr-8 lg:mb-0 mb-4">
                    <div class="w-full h-full height-1 relative">
                        <img src="/images/3.png" class="absolute w-full h-full inset-0 object-center object-center z-10" />
                        <div class="left-0 px-3 flex items-center mb-3 justify-between bottom-0 w-full absolute z-20 pt-4">
                            <h4 class="f-m-m px-6 py-3 rounded-md bg-white">$3000</h4>
                            <div class="py-3 px-1 bg-black flex items-center rounded-md bg-opacity-75">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z" fill="#FDC741" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12">
                        <h1 class="f-m-m text-2xl font-semibold leading-7">Sydney, Australia</h1>
                        <p class="text-base f-m-m leading-loose mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="mt-6">
                            <a>
                                <p class="text-purple underline cursor-pointer text-base font-semibold">View Details</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section 3 -->

            <!-- Section 4 -->
            <div class="flex items-center justify-center lg:mt-16 lg:pb-48 w-full">
                <button class="border-purple border md:text-2xl text-lg rounded f-m-m font-semibold text-purple focus:outline-none md:px-12 px-6 md:py-6 py-3 xl:leading-4">Browse All</button>
            </div>
            <div class="flex items-center justify-center lg:pt-64 pt-16 relative w-full h-full">
                <img src="/images/world 1.png" class="w-full absolute z-0" />
                <div class="relative lg:px-40 z-10 h-full w-full">
                    <div class="lg:flex items-center justify-between w-full h-full">
                        <div class="flex flex-col items-center lg:mb-0 mb-4 justify-center">
                            <p class="lg:text-3xl xl:text-6xl text-2xl font-bold text-purple f-m-m">12</p>
                            <p class="lg:text-xl xl:text-4xl text-lg mt-4 text-black font-normal f-m-m">Amazing Deals</p>
                        </div>
                        <div class="flex flex-col items-center lg:mb-0 mb-4 justify-center">
                            <p class="lg:text-3xl xl:text-6xl text-2xl font-bold text-purple f-m-m">670</p>
                            <p class="lg:text-xl xl:text-4xl text-lg mt-4 text-black font-normal f-m-m">Sold Tours</p>
                        </div>
                        <div class="flex flex-col items-center lg:mb-0 mb-4 justify-center">
                            <p class="lg:text-3xl xl:text-6xl text-2xl font-bold text-purple f-m-m">24</p>
                            <p class="lg:text-xl xl:text-4xl text-lg mt-4 text-black font-normal f-m-m">New Tours</p>
                        </div>
                        <div class="flex flex-col items-center lg:mb-0 mb-4 justify-center">
                            <p class="lg:text-3xl xl:text-6xl text-2xl font-bold text-purple f-m-m">950</p>
                            <p class="lg:text-xl xl:text-4xl text-lg mt-4 text-black font-normal f-m-m">Happy Customers</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section 4 -->

            <!-- Section 5 -->

            <div class="mt-10 lg:mt-64">
                <h1 class="text-5xl text-center f-m-w text-purple font-bold md:pt-48 pt-0">Our Blogs</h1>
                <div class="pt-14 xl:px-0 px-4">
                    <div class="w-full lg:flex">
                        <div class="lg:w-1/2">
                            <img src="/images/blog 1.png" class="w-full" />
                            <div class="mt-8 lg:mb-0 mb-8">
                                <h1 class="f-m-m text-2xl font-semibold leading-7">Beautiful Italy, Travel Blog</h1>
                                <p class="text-base f-m-m leading-loose mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="mt-6">
                                    <a href="">
                                        <p class="text-purple underline text-base font-semibold f-m-m">Read More</p>
                                    </a>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="lg:w-1/2 lg:ml-8">
                            <div class="lg:flex items-start mb-8">
                                <img src="/images/blog 2.png" class="w-full" />
                                <div class="lg:ml-6">
                                    <h1 class="f-m-m text-2xl font-semibold leading-7 lg:mt-0 mt-8">A Broken Backpack</h1>
                                    <p class="text-base f-m-m leading-loose mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="mt-4">
                                        <a href="">
                                            <p class="text-purple underline text-base font-semibold f-m-m">Read More</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:flex items-start mb-8">
                                <img src="/images/blog 3.png" class="w-full" />
                                <div class="lg:ml-6">
                                    <h1 class="f-m-m text-2xl font-semibold leading-7 lg:mt-0 mt-8">My life’s a Movie</h1>
                                    <p class="text-base f-m-m leading-loose mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="mt-4">
                                        <a href="">
                                            <p class="text-purple underline text-base font-semibold f-m-m">Read More</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:flex items-start mb-8">
                                <img src="/images/blog 4.png" class="w-full" />
                                <div class="lg:ml-6">
                                    <h1 class="f-m-m text-2xl font-semibold leading-7 lg:mt-0 mt-8">Lilii’s Travel Plans</h1>
                                    <p class="text-base f-m-m leading-loose mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="mt-4">
                                        <a href="">
                                            <p class="text-purple underline text-base font-semibold f-m-m">Read More</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center my-16 w-full">
                        <button class="border-purple border-2 md:text-2xl text-lg rounded f-m-m font-semibold text-purple focus:outline-none md:px-12 px-6 md:py-6 py-3 xl:leading-4">Browse More</button>
                    </div>
                    <div></div>
                </div>
            </div>
            <!-- Section 5 -->
        </div>
        <!-- Section 6 -->
        <div class="relative py-20 md:py-56 lg:py-72">
            <img src="/images/background.png" class="absolute top-0 left-0 h2-image flex-no-shrink flex -mt-16 z-0" />
            <div class="w-full xl:px-0 px-4 lg:flex-row flex flex-col-reverse items-center justify-between mx-auto container relative z-20">
                <div class="w-full lg:w-1/2 relative">
                    <div class="slider">
                        <div class="slide-ana">
                            <div class="w-full">
                                <div class="w-full lg:flex relative">
                                    <div class="lg:w-1/2 relative bg-white rounded-md p-6 mr-6 lg:mb-0 mb-8 shadow-lg lg:mt-0 mt-8">
                                        <div class="absolute right-0 top-0 -mt-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179zm-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311C4.591 12.322 3.17 10.841 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179z" fill="rgba(76,81,191,1)" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="/images/Ellipse 7.png" />
                                            <h2 class="text-base f-m-m ml-4 font-semibold">Jane Doe</h2>
                                        </div>
                                        <p class="text-base f-m-m mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                                    </div>
                                    <div class="lg:w-1/2 relative purple rounded-md p-6 mr-6 shadow-lg">
                                        <div class="absolute right-0 top-0 -mt-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179zm-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311C4.591 12.322 3.17 10.841 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179z" fill="rgba(255,255,255,1)" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="/images/Ellipse 7.png" />
                                            <h2 class="text-base f-m-m ml-4 font-semibold text-white">Jane Doe</h2>
                                        </div>
                                        <p class="text-base f-m-m mt-3 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                                    </div>
                                </div>
                                <div class="lg:w-1/2 relative mt-8 lg:ml-32 bg-white rounded-md shadow-lg p-6 mr-6">
                                    <div class="absolute right-0 top-0 -mt-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                                            <path fill="none" d="M0 0h24v24H0z" />
                                            <path d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179zm-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311C4.591 12.322 3.17 10.841 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179z" fill="rgba(76,81,191,1)" />
                                        </svg>
                                    </div>
                                    <div class="flex items-center">
                                        <img src="/images/Ellipse 7.png" />
                                        <h2 class="text-base f-m-m ml-4 font-semibold">Jane Doe</h2>
                                    </div>
                                    <p class="text-base f-m-m mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="w-full lg:flex relative">
                                    <div class="lg:w-1/2 relative bg-white rounded-md p-6 mr-6 lg:mb-0 mb-8 shadow-lg lg:mt-0 mt-8">
                                        <div class="absolute right-0 top-0 -mt-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179zm-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311C4.591 12.322 3.17 10.841 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179z" fill="rgba(76,81,191,1)" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="/images/Ellipse 7.png" />
                                            <h2 class="text-base f-m-m ml-4 font-semibold">Jane Doe</h2>
                                        </div>
                                        <p class="text-base f-m-m mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                                    </div>
                                    <div class="lg:w-1/2 relative purple rounded-md p-6 mr-6 shadow-lg">
                                        <div class="absolute right-0 top-0 -mt-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179zm-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311C4.591 12.322 3.17 10.841 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179z" fill="rgba(255,255,255,1)" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="/images/Ellipse 7.png" />
                                            <h2 class="text-base f-m-m ml-4 font-semibold text-white">Jane Doe</h2>
                                        </div>
                                        <p class="text-base f-m-m mt-3 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                                    </div>
                                </div>
                                <div class="lg:w-1/2 relative mt-8 lg:ml-32 bg-white rounded-md shadow-lg p-6 mr-6">
                                    <div class="absolute right-0 top-0 -mt-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                                            <path fill="none" d="M0 0h24v24H0z" />
                                            <path d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179zm-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311C4.591 12.322 3.17 10.841 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179z" fill="rgba(76,81,191,1)" />
                                        </svg>
                                    </div>
                                    <div class="flex items-center">
                                        <img src="/images/Ellipse 7.png" />
                                        <h2 class="text-base f-m-m ml-4 font-semibold">Jane Doe</h2>
                                    </div>
                                    <p class="text-base f-m-m mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="w-full lg:flex relative">
                                    <div class="lg:w-1/2 relative bg-white rounded-md p-6 mr-6 lg:mb-0 mb-8 shadow-lg lg:mt-0 mt-8">
                                        <div class="absolute right-0 top-0 -mt-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179zm-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311C4.591 12.322 3.17 10.841 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179z" fill="rgba(76,81,191,1)" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="/images/Ellipse 7.png" />
                                            <h2 class="text-base f-m-m ml-4 font-semibold">Jane Doe</h2>
                                        </div>
                                        <p class="text-base f-m-m mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                                    </div>
                                    <div class="lg:w-1/2 relative purple rounded-md p-6 mr-6 shadow-lg">
                                        <div class="absolute right-0 top-0 -mt-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179zm-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311C4.591 12.322 3.17 10.841 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179z" fill="rgba(255,255,255,1)" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="/images/Ellipse 7.png" />
                                            <h2 class="text-base f-m-m ml-4 font-semibold text-white">Jane Doe</h2>
                                        </div>
                                        <p class="text-base f-m-m mt-3 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                                    </div>
                                </div>
                                <div class="lg:w-1/2 relative mt-8 lg:ml-32 bg-white rounded-md shadow-lg p-6 mr-6">
                                    <div class="absolute right-0 top-0 -mt-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                                            <path fill="none" d="M0 0h24v24H0z" />
                                            <path d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179zm-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311C4.591 12.322 3.17 10.841 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179z" fill="rgba(76,81,191,1)" />
                                        </svg>
                                    </div>
                                    <div class="flex items-center">
                                        <img src="/images/Ellipse 7.png" />
                                        <h2 class="text-base f-m-m ml-4 font-semibold">Jane Doe</h2>
                                    </div>
                                    <p class="text-base f-m-m mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:pl-32 xl:pl-56">
                    <h1 class="lg:text-5xl text-2xl f-m-w text-purple font-bold">Our Experienced Stories</h1>
                    <p class="lg:text-base text-sm f-m-m leading-loose mt-3 mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
                    <div class="flex items-center">
                        <div id="prev" class="cursor-pointer w-12 h-12 flex items-center justify-center rounded-full border border-purple">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#4C51BF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <line x1="5" y1="12" x2="9" y2="16" />
                                <line x1="5" y1="12" x2="9" y2="8" />
                            </svg>
                        </div>
                        <div id="next" class="cursor-pointer ml-4 w-12 h-12 flex items-center justify-center rounded-full border border-purple">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#4C51BF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <line x1="15" y1="16" x2="19" y2="12" />
                                <line x1="15" y1="8" x2="19" y2="12" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section 6 -->
        <!-- Section 7 -->
        <div class="hidden xl:block relative">
            <img src="/images/haidan-2EvhzgMjqoo-unsplash-removebg-preview 1.png" class="absolute lg:width-1 lg:top-0 topbg right-0" />
        </div>
        <div class="w-full lg:px-0 px-4">
            <div class="w-full flex flex-col items-center justify-center">
                <div class="sm:1/4 lg:w-1/2 xl:w-2/5">
                    <h1 class="lg:text-5xl text-2xl f-m-w text-purple text-center font-bold pt-6">Subscribe to our Newsletter</h1>
                    <p class="lg:text-2xl text-lg font-normal text-center mt-4 f-m-m">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="sm:flex sm:p-4 p-2 my-8 border-purple border rounded w-full mt-16 items-center">
                        <input class="py-2 w-full md:w-7/12 lg:w-full lg:text-2xl focus:outline-none pl-2 lg:pl-3 f-m-m" placeholder="Enter your email here..." />
                        <div class="w-5/12 sm:flex justify-end mt-4 sm:mt-0">
                            <button class="f-m-m md:text-2xl text-base rounded font-normal text-white purple md:py-2 md:px-8 px-4 py-2 foucus:outline-none leading-4">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section 7 -->
        <!-- Footer -->
        <div class="w-full purple mt-12 lg:mt-24 lg:px-0 px-4">
            <div class="container mx-auto py-20">
                <div class="lg:flex items-center justify-between">
                    <div class="lg:w-1/4">
                        <img src="/images/logo.png" />
                    </div>
                    <div class="lg:w-3/4 lg:flex items-center justify-end">
                        <ul class="lg:flex f-m-m justify-end">
                            <a href="">
                                <li class="text-2xl font-bold lg:mb-0 mb-6 lg:mt-0 mt-6 text-white pr-8">Home</li>
                            </a>
                            <a href="">
                                <li class="text-2xl font-medium lg:mb-0 mb-6 text-white pr-8">Tour</li>
                            </a>
                            <a href="">
                                <li class="text-2xl font-medium lg:mb-0 mb-6 text-white pr-8">Explore</li>
                            </a>
                            <a href="">
                                <li class="text-2xl font-medium lg:mb-0 mb-6 text-white pr-8">About Us</li>
                            </a>
                            <a href="">
                                <li class="text-2xl font-medium lg:mb-0 mb-6 text-white">Contact</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->

        <script src="./assets/scripts/script.js"></script>
    </body>
</html>
