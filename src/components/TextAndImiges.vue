<template>
    <div name="ProgrammingPart" className="flex justify-center items-center gap-56 self-stretch text-center">
        <!-- <p
            className="w-6/12 bg-gradient-to-r from-neutral-800 to-neutral-900 p-8 rounded-tr-4xl rounded-bl-4xl border border-neutral-700">
            The process of developing software is both time-consuming and incredibly
            rewarding for me. It involves
            translating my ideas and concepts into functional fings, you can't grasp it but you can feel it. In
            general,
            software can significantly influence people's lives and my future programs will be capable of affecting
            others. The process of software development requires careful attention to detail and a strong enthusiasm
            for
            solving problems, and this career path enables me to continually learn and adjust to new technologies. I
            found my path in low-level languages, where the power is in your hands, I like to feel like I can do
            something special, something that other people can't do. I like to expand my knowledge to other topics,
            from
            DevOps to the front end, reverse engineering, and memory manipulation. That lets me get a feel for other
            subjects, and I really like that feeling. of course, it kinda distracts me from reaching the goal that I
            set
            for myself, and I see it as a good thing, it helps me keep my interest in computers and not to burn out.
        </p> -->
        <p
            className="w-6/12 bg-gradient-to-r from-neutral-800 to-neutral-900 p-8 rounded-tr-4xl rounded-bl-4xl border border-neutral-700">
            {{ page.text }}
        </p>
        <img :src="`/src/img/${page.imgName}`" alt="images of me"
            className="w-4/12 rounded-4xl border border-neutral-700">
    </div>
</template>
<script>
export default
    {
        props: ["page"]
    }

</script>
<style scoped></style>