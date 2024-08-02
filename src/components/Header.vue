<template>
    <nav class="flex gap-4 text-white text-sm font-bold font-mono leading-6 bg-stripes-indigo rounded-lg pt-14">
        <div class="w-96 h-20 flex-none rounded-lg flex items-center justify-center p-2 shadow-xl">
            <div class="icon w-14 h-14 rounded-2xl"></div>
            <p className="text-4xl text-center flex ml-5 logo-text">Justinas</p>
        </div>
        <div class="p-4 h-20 grow rounded-lg flex items-center justify-around
         category shadow-xl">
            <button className="hover:outline outline-2 outline-color rounded-xl p-3 text-3xl ">Titulinis</button>
            <button className="hover:outline outline-2 outline-color rounded-xl p-3 text-3xl ">Kodas</button>
            <button className="hover:outline outline-2 outline-color rounded-xl p-3 text-3xl ">Kontaktai</button>
            <button className="hover:outline outline-2 outline-color rounded-xl p-3 text-3xl ">3D darbai</button>
        </div>
        <div class="p-4 w-96 h-20 flex-none rounded-lg flex items-center justify-around shadow-xl">
            <button className="hover:outline outline-2 outline-color rounded-xl p-2 text-3xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg> -->

            </button>
            <button className="hover:outline outline-2 outline-color rounded-xl p-2 text-3xl">
                <p className="text-4xl leading-11">LT</p>
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

.category {}

.outline-color {
    outline-color: var(--black-mute);
}

.leading-11 {
    line-height: 3.25rem;
}
</style>
