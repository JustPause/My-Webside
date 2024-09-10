<script setup>
const pages = [
	{
		Title: "My andriod project",
		Text: "In Vilnius Coding Scool, my final project was, to make a project in Java with SQL. So that is my project. It is the Andriod program, main in Andriod studio, with SQLite database. With Room framework.",
		Link: "#",
	},
	{
		Title: "B",
		Text: "B",
		Link: "B",
	},
	{
		Title: "C",
		Text: "C",
		Link: "C",
	},
	{
		Title: "T",
		Text: "T",
		Link: "T",
	},
	{
		Title: "B",
		Text: "B",
		Link: "B",
	},
	{
		Title: "C",
		Text: "C",
		Link: "C",
	},
];
</script>

<template>

	<div className=" z-0">
		<div className="flex animasion ">
			<!-- overflow-scroll -->

			<a className="w-72 p-8 rounded-4xl border border-neutral-700 ml-8 contaner_animasion " :href="page.Link"
				v-for="(page, index) in pages" :id="'page-id-' + index">
				<PageLength :total-pages="pages.length" />
				<h1 className="text-2xl pb-2">{{ page.Title }}</h1>
				<p className="overflow-ellipsis break-words text-justify">
					{{ page.Text }}
				</p>
			</a>


		</div>
	</div>
</template>

<style>
:root {
	--width: 18em;
	--time: 5s
}

.animasion {
	animation: scroll var(--time) linear infinite;
}

@keyframes scroll {
	from {
		transform: translate(0rem);
	}

	to {
		transform: translate(calc((2rem + var(--width))));
	}
}
</style>

<script>

document.addEventListener("DOMContentLoaded", function () {

});
export default {

	mounted() {
		function addAnimation(width) {
			animasions.forEach((animasion) => {
				const animasionContent = Array.from(animasion.children);

				const loopCount = Math.round(document.getElementById("app").offsetWidth / width)

				for (let loop = 0; loop <= loopCount - 1; loop++) {

					animasionContent.forEach((item) => {

						const duplicatedItem = item.cloneNode(true);
						animasion.appendChild(duplicatedItem);
						console.log(duplicatedItem.id = duplicatedItem.id + "-clone-" + Number(loop + 1));
					});

				}

			});
		}

		const animasions = document.querySelectorAll(".animasion");

		if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
			setTimeout(() => {

				let length = document.getElementsByTagName("PageLength").length
				let elemnt_width = document.getElementById("page-id-0").offsetWidth * length
				let fontSize = parseFloat(getComputedStyle(document.documentElement).fontSize)
				let rem = String(elemnt_width / fontSize + 2 * (length - 1) + "rem")

				addAnimation(elemnt_width);
				document.documentElement.style.setProperty("--width", rem);

				document.documentElement.style.setProperty("--time", String((5 * length)+"s"));

			}, 10);


		}
	}
}
</script>
