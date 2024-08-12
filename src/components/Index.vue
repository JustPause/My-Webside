<script setup>
import TextAndImiges from "./TextAndImiges.vue"
</script>

<template>

    <div className="flex flex-col items-center gap-3 mt-48">
        <div name="HelloSeperaitor " className="HelloSeperaitor">
            <p className="text-5xl font-normal leading-tight text-center mb-4 ">Hello I am <color><br>Justinas Stankūnas
                </color>
            </p>

            <p className="text-center">Hey there! I'm Justinas, a computer enthusiast with a knack for the rack (server
                rack I mean). I'm interested
                in working with software development, bending code to my will, but it's a bit of a complicated
                relationship
                - code tends to have a mind of its own</p>
        </div>
    </div>

    <div name="frames" className="flex flex-col items-center justify-center mt-48">
        <TextAndImiges v-for="page in pages"/>
    </div>

</template>
<style scoped>
.HelloSeperaitor {
    width: 400px;
}

color {
    color: var(--color-highlighters);
}

.PartText {
    width: 520px;
}
</style>
<script>

export default {
    methods: {
        async getPages() {
            let res = await fetch('bodyText.json');
            let data = await res.json();

            return this.pages = data;
        }
    },
}
</script>
