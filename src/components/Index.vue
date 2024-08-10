<template>

    <div name="HelloSeperaitor" className="HelloSeperaitor flex flex-col mx-auto mt-48">
        <p className="text-5xl font-normal leading-tight text-center mb-4 ">Hello I am <color><br>Justinas Stankūnas
            </color>
        </p>

        <p className="text-center">Hey there! I'm Justinas, a computer enthusiast with a knack for the rack (server
            rack I mean). I'm interested
            in working with software development, bending code to my will, but it's a bit of a complicated relationship
            - code tends to have a mind of its own</p>
    </div>

    <div name="ProgrammingPart" className="TextLayout TextStyle">
        <p>The process of developing software is both time-consuming and incredibly rewarding for me. It involves
            translating my ideas and concepts into functional fings, you can't grasp it but you can feel it. In general,
            software can significantly influence people's lives and my future programs will be capable of affecting
            others. The process of software development requires careful attention to detail and a strong enthusiasm for
            solving problems, and this career path enables me to continually learn and adjust to new technologies. I
            found my path in low-level languages, where the power is in your hands, I like to feel like I can do
            something special, something that other people can't do. I like to expand my knowledge to other topics, from
            DevOps to the front end, reverse engineering, and memory manipulation. That lets me get a feel for other
            subjects, and I really like that feeling. of course, it kinda distracts me from reaching the goal that I set
            for myself, and I see it as a good thing, it helps me keep my interest in computers and not to burn out.</p>
        <div className="imigeLayout imigeStyle"></div>
    </div>

</template>
<style scoped>
.HelloSeperaitor {
    width: 400px;
    flex-shrink: 0;
}

color {
    color: var(--color-highlighters);
}

.imigeLayout {
    width: 43em;
    height: 32em;
    flex-shrink: 0;
}

.imigeStyle {
    border-radius: 30px;
    border: 1px #000;
    background: url(/src/img/Me.jpg) lightgray 50% / cover no-repeat;
    box-shadow: 0px 4px 24px 0px rgba(0, 0, 0, 0.25);
}

.TextLayout {
    width: 520px;
    height: 160px;
    flex-shrink: 0;
}

.TextStyle {
    color: #FFF;
    padding: 3em;
    fill: linear-gradient(90deg, rgba(255, 255, 255, 0.10) 0%, rgba(0, 0, 0, 0.10) 100%);

    stroke-width: 1px;
    stroke: #000;

    filter: drop-shadow(0px 4px 24px rgba(0, 0, 0, 0.25));
    backdrop-filter: blur(20px);
}
</style>