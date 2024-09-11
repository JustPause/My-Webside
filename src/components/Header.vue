<template>
  <nav class="flex fixed h-20 gap-16 text-white text-sm font-bold font-mono justify-center mt-12 inset-x-0 top-0 z-10">

        <a href="#" class="flex-none rounded-3xl flex items-center justify-center p-2 shadow-2xl bg-nav  border border-neutral-700">
            <div class="icon aspect-square h-14 rounded-xl ml-1"></div>
            <p className="text-xl text-center flex mx-4 logo-text">Justinas</p>
        </a>

        <div class=" rounded-3xl flex items-center justify-center
         category shadow-2xl bg-nav  border border-neutral-700">
            <button
                className="hover:outline outline-2 outline-color hover:bg-neutral-600 hover:bg-opacity-10 rounded-2xl p-3 text-xl m-4 duration-300 w-max leading-0" href="https://github.com/JustPause">Githubas</button>
            <button
                className="hover:outline outline-2 outline-color hover:bg-neutral-600 hover:bg-opacity-10 rounded-2xl p-3 text-xl m-4 duration-300 w-max">Kodas</button>
            <button
                className="hover:outline outline-2 outline-color hover:bg-neutral-600   hover:bg-opacity-10 rounded-2xl p-3 text-xl m-4 duration-300 w-max">Kontaktai</button>
            <button
                className="hover:outline outline-2 outline-color hover:bg-neutral-600 hover:bg-opacity-10 rounded-2xl p-3 text-xl m-4 duration-300 w-max">3D darbai</button>
        </div>

        <div
            class="flex-none rounded-3xl flex items-center justify-around shadow-xl bg-nav  border border-neutral-700">
            <button className="hover:outline outline-2 outline-color hover:bg-neutral-600 hover:bg-opacity-10 rounded-xl p-3 text-3xl m-4 duration-300">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>  -->

            </button>

            <button className="hover:outline outline-2 outline-color hover:bg-yellow-600 hover:bg-opacity-10 rounded-xl p-3 text-xl m-4 duration-300">
                <p className="text-xl w-7 h-7">LT</p>
            </button>
        </div>
    </nav>

</template>

<style scoped>
.icon {
    background-color: var(--white);
}

.logo-text {
    justify-content: center;
    align-items: center;
}

.w-1280 {
    width: 1280px;
}

.outline-color {
    outline-color: rgba(255, 255, 255, 0.2);
}

.leading-11 {
    line-height: 3.25rem;
}
.bg-nav{
    --tw-bg-opacity: 0.95;
    background-color: rgb(14 14 14 / var(--tw-bg-opacity)) /* #ca8a04 */;
}
</style>
