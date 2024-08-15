<script setup>
import TextAndImiges from "./TextAndImiges.vue"

const text = [
    "The process of developing software is both time-consuming and incredibly rewarding for me. It involves translating my ideas and concepts into functional fings, you can\'t grasp it but you can feel it. In general, software can significantly influence people\'s lives and my future programs will be capable of affecting others. The process of software development requires careful attention to detail and a strong enthusiasm for solving problems, and this career path enables me to continually learn and adjust to new technologies. I found my path in low-level languages, where the power is in your hands, I like to feel like I can do something special, something that other people can\'t do. I like to expand my knowledge to other topics, from DevOps to the front end, reverse engineering, and memory manipulation. That lets me get a feel for other subjects, and I really like that feeling. of course, it kinda distracts me from reaching the goal that I set for myself, and I see it as a good thing, it helps me keep my interest in computers and not to burn out.",

]
const img = [
    "Me",
    "3D",
    "Sky"
]
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
        <TextAndImiges text="text" imgSrc="Me" />
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
    components: { TextAndImiges }
}
</script>
