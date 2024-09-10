<script setup>
import TextAndImiges from "./TextAndImiges.vue"
import MyWorkSlides from "./MyWorkSlides.vue"
import Socials from "./Socials.vue";

const pages = [
	{
		text: 'The process of developing software is both time-consuming and incredibly rewarding for me. It involves translating my ideas and concepts into functional fings, you can\'t grasp it but you can feel it. In general, software can significantly influence people\'s lives and my future programs will be capable of affecting others. The process of software development requires careful attention to detail and a strong enthusiasm for solving problems, and this career path enables me to continually learn and adjust to new technologies. I found my path in low-level languages, where the power is in your hands, I like to feel like I can do something special, something that other people can\'t do. I like to expand my knowledge to other topics, from DevOps to the front end, reverse engineering, and memory manipulation. That lets me get a feel for other subjects, and I really like that feeling. of course, it kinda distracts me from reaching the goal that I set for myself, and I see it as a good thing, it helps me keep my interest in computers and not to burn out.',
		img: 'Me',
		altImgText: "Imige of me using the compiuter"
	},
	{
		text: 'I don\'t like focusing on things that don\'t make me happy or fulfilled in life. That\'s why I don\'t put all my energy into just one thing. After long days of programming, I love to chill out by doing 3D modeling in Blender. It\'s a great way to unleash creativity and have some fun. There\'s something so enjoyable about letting your imagination run wild. I\'d say I\'m pretty confident when it comes to 3D arts. I don\'t have a ton of experience in 3D modeling, apart from creating scenes, but I do have lots of experience fixing models for 3D printing, planning house layouts, and scene composition. And how could we talk about art without mentioning music? I also picked up playing the guitar as a second hobby. I mainly play the electric bass and electric guitar. Making music allows me to express myself freely and, most importantly, connect with others. I find it easier to bond with people over music than computer engineering because not everyone is a computer geek, so I see it as my way of socializing. With music, I\'ve been able to make friends and connect with other musicians. It\'s something I rely on for many things.',
		img: '3D',
		altImgText: "Imige of my made 3D model, and renderd in Blender"
	},
	{
		text: 'So one of the programmer\'s requirements is to daily touch grass, and for that reason, I love going outside to capture the vibrant city life, the architecture, and the beauty of nature through my photography. Recently, a friend introduced me to Pokemon GO, and now I find myself going on frequent walks to not only catch Pokemon but also to clear my mind. I also use the photos I take as textures and inspiration for the 3D models and software that I work on. It\'s a truly fulfilling and refreshing experience for me.',
		img: 'Sky',
		altImgText: "Imige my made picture of sky"
	}
]
</script>

<template>
	<div className="flex flex-col items-center gap-3 pt-48">
		<div name="HelloSeperaitor " className="HelloSeperaitor">
			<p className="text-5xl font-normal leading-tight text-center mb-4 ">
				Hello I am
				<color>
					<br />
					Justinas Stankūnas
				</color>
			</p>

			<p className="text-center">
				Hey there! I'm Justinas, a computer enthusiast with a knack for
				the rack (server rack I mean). I'm interested in working with
				software development, bending code to my will, but it's a bit of
				a complicated relationship - code tends to have a mind of its
				own
			</p>
		</div>
	</div>

	<div name="frameMe" className="flex flex-col items-center justify-center my-48">
		<TextAndImiges v-for="(page, index) in pages" :key="index" :page="page" :index="index" />
	</div>

	<div name="frameWorkPart1" className="flex flex-col items-end overflow-hidden">
		<a className="text-5xl font-normal leading-tight text-center mb-16 " href="https://github.com/JustPause">
			<color>Work</color>
		</a>
	</div>
	<div name="frameWorkPart2" className="flex flex-col items-end overflow-hidden" style="mask-image: linear-gradient(90deg, transparent, #fff 20%, #fff 80%, transparent); 
		-webkit-mask-image: linear-gradient(90deg, transparent, #fff 20%, #fff 80%, transparent)">
		<MyWorkSlides />
	</div>
	<div name="Socials" className="mt-32">
		<Socials />
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
	components: { TextAndImiges, MyWorkSlides }
}
</script>
