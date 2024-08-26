<script setup>
const pages = [
	{
		Title: "My andriod project",
		Text: "In Vilnius Coding Scool, my final project was, to make a project in Java with SQL. So that is my project. It is the Andriod program, main in Andriod studio, with SQLite database. With Room framework.",
		Link: "#",
	},
	//   {
	//     Title: "B",
	//     Text: "B",
	//     Link: "B",
	//   },
	//   {
	//     Title: "C",
	//     Text: "C",
	//     Link: "C",
	//   },
	//   {
	//     Title: "T",
	//     Text: "T",
	//     Link: "T",
	//   },
	//   {
	//     Title: "B",
	//     Text: "B",
	//     Link: "B",
	//   },
	//   {
	//     Title: "C",
	//     Text: "C",
	//     Link: "C",
	//   },
];
</script>

<template>

	<div className="">
		<div className="flex animasion ">
			<!-- overflow-scroll -->

			<a className="w-72  p-8 rounded-4xl border border-neutral-700 ml-4 contaner_animasion " :href="page.Link"
				v-for="(page, index) in pages" :id="'page-id-' + index">
				<h1 className="text-2xl pb-2">{{ page.Title }}</h1>
				<p className="overflow-ellipsis break-words text-justify">
					{{ page.Text }}
				</p>
			</a>
		</div>
	</div>
</template>

<style>
.animasion {
	animation: scroll 5s linear infinite;
}

@keyframes scroll {
	from {
		transform: translate(calc((1rem + 18em)));
	}

	to {
		transform: translate(calc((1rem + 18em)*2));
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

				for (let loop = 0; loop < loopCount + 2; loop++) {

					animasionContent.forEach((item) => {
						const duplicatedItem = item.cloneNode(true);
						animasion.appendChild(duplicatedItem);
					});

				}


			});
		}

		const animasions = document.querySelectorAll(".animasion");

		if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
			setTimeout(() => {

				addAnimation(document.getElementById("page-id-0").offsetWidth);
			}, 0);
		}
	}
}
</script>
