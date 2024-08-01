<template>
    <nav className="grid grid-cols-4 gap-4 pt-14">
        <div className="logo inline-flex outline outline-green-900">
            <div class="icon rounded-2xl"></div>
            <p className="text-4xl text-center flex ml-5 logo-text">Justinas</p>
        </div>

        <div className="grid grid-cols-4 gap-12 col-span-2 outline outline-red-900 rounded-xl">
            <button className="hover:outline outline-color rounded-xl m-1 text-3xl">Titulinis</button>
            <button className="hover:outline outline-color rounded-xl m-1 text-3xl">Kodas</button>
            <button className="hover:outline outline-color rounded-xl m-1 text-3xl">Kontaktai</button>
            <button className="hover:outline outline-color rounded-xl m-1 text-3xl">3D darbai</button>
        </div>

        <div className="grid grid-cols-2 gap-12">
            <button className="hover:outline outline-color rounded-xl m-1 text-3xl row-span-1">a</button>
            <button className="hover:outline outline-color rounded-xl m-1 text-3xl">B</button>
        </div>
    </nav>

    
</template>

<style scoped>
.icon {
    width: 3em;
    height: 3em;
    background-color: #f7f7f7;
}

.logo-text {
    justify-content: center;
    align-items: center;
}
</style>
