<div class="h-full flex flex-col justify-center">
    <h1 class="font-bold text-white md:leading-relaxed lg:leading-relaxed text-center md:text-7xl text-4xl mt-10 md:pt-12 f-m-m uppercase">
     {{setting('main.title')}}
    </h1>
    <div class="w-full flex-col flex items-center justify-center mb-20">
        <div class="bg-white shadow w-10/12 sm:w-11/12 lg:w-9/12 rounded-xl lg:mt-24 mt-12">
            <div class="py-10 px-8 md:flex items-center">
                <div class="lg:w-1/5 xl:border-r xl:mb-0 mb-4 border-gray-300 mr-6">
                    <label for="location" class="xl:text-2xl text-base font-semibold f-m-m">Location</label>
                    <input list="locations" name="location" id="location" class="w-full xl:text-base text-xs mt-3 f-m-m text-gray-800 appearance-none" placeholder="Where are you going?" />
                    <datalist id="locations">
                        <option value="Germany"></option>
                        <option value="Japan"></option>
                        <option value="Nigeria"></option>
                        <option value="Alaska"></option>
                    </datalist>
                </div>
                <div class="lg:w-1/5 xl:border-r xl:mb-0 mb-4 border-gray-300 mr-6">
                    <label for="checkin" class="xl:text-2xl text-base font-semibold f-m-m">Check in</label>
                    <input list="checkins" name="checkins" id="checkin" class="w-full xl:text-base text-xs mt-3 f-m-m text-gray-800 appearance-none" placeholder="Add dates" />
                    <datalist id="checkins">
                        <option value="2nd Nov, 2021"></option>
                        <option value="22nd Sep, 2022"></option>
                        <option value="3rd Aug, 2020"></option>
                        <option value="2nd Oct, 2020"></option>
                    </datalist>
                </div>
                <div class="lg:w-1/5 xl:border-r xl:mb-0 mb-4 border-gray-300 mr-6">
                    <label for="checkout" class="xl:text-2xl text-base font-semibold f-m-m">Check out</label>
                    <input list="checkouts" name="checkins" id="checkout" class="w-full xl:text-base text-xs mt-3 f-m-m text-gray-800 appearance-none" placeholder="Add dates" />
                    <datalist id="checkouts">
                        <option value="2nd Nov, 2021"></option>
                        <option value="22nd Sep, 2022"></option>
                        <option value="3rd Aug, 2020"></option>
                        <option value="2nd Oct, 2020"></option>
                    </datalist>
                </div>
                <div class="lg:w-1/5 border-gray-300 xl:mb-0 mb-4">
                    <label for="guest" class="xl:text-2xl text-base font-semibold f-m-m">Guests</label>
                    <input list="guests" name="guests" id="guest" class="w-full xl:text-base text-xs mt-3 f-m-m text-gray-800 appearance-none" placeholder="No of people" />
                    <datalist id="guests">
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </datalist>
                </div>
                <div class="block md:hidden">
                    <input type="text" class="w-full py-3 border-b border-indigo-700 text-gray-600 focus:outline-none" placeholder="Type something here ... " />
                </div>
                <div class="w-1/5 md:flex hidden items-center justify-end">
                    <button class="focus:outline-none justify-center rounded-md py-5 px-5 purple">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="26" height="26" viewBox="0 0 24 24" stroke-width="2" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="w-full lg:flex-row flex flex-col-reverse items-center lg:mt-24 mt-8 lg:pl-16">
        <div class="w-1/2 text-white"></div>
        <div class="lg:w-1/2 w-full lg:px-0 px-4 text-white mb-4 hidden md:block">
            <div class="flex items-center">
                <button class="w-12 h-12 focus:outline-none flex items-center justify-center rounded-full border border-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <line x1="5" y1="12" x2="9" y2="16" />
                        <line x1="5" y1="12" x2="9" y2="8" />
                    </svg>
                </button>
                <button class="ml-4 w-12 h-12 focus:outline-none flex items-center justify-center rounded-full border border-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <line x1="15" y1="16" x2="19" y2="12" />
                        <line x1="15" y1="8" x2="19" y2="12" />
                    </svg>
                </button>
                <hr class="w-56 border-white ml-8" />
                <h3 class="text-white f-m-m text-5xl ml-4">01</h3>
            </div>
        </div>
    </div> -->
</div>
