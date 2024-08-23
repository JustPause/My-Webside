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
  <a
    className="text-5xl font-normal leading-tight text-center mb-16"
    href="https://github.com/JustPause"
  >
    Work
  </a>

  <div className="overflow-x-auto flex animasion">
    <!-- overflow-scroll -->

    <a
      className="w-72  p-8 rounded-4xl border border-neutral-700 ml-4 contaner_animasion"
      href="{{page.Link}}"
      v-for="page in pages"
    >
      <h1 className="text-2xl pb-2">{{ page.Title }}</h1>
      <p className="overflow-ellipsis break-words text-justify">
        {{ page.Text }}
      </p>
    </a>
  </div>
</template>

<style>
.animasion {
  animation: scroll 5s forwards linear infinite;
}

@keyframes scroll {
  from{
    transform: translate(calc(20% + 0.5rem));
  }

  to {
    transform: translate(calc(53.5% + 0.5rem));
  }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const animasions = document.querySelectorAll(".animasion");

  // If a user hasn't opted in for reduced motion, then we add the animation
  if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    addAnimation();
  }

  function addAnimation() {
    animasions.forEach((animasion) => {
      // Add data-animated="true" to every `.scroller` on the page
      animasion.setAttribute("data-animated", true);

      // Make an array from the elements within `.scroller-inner`
      // const animasionInner = animasion.querySelector(".scroller__inner");
      const animasionContent = Array.from(animasion.children);

      // For each item in the array, clone it
      // Add aria-hidden to it
      // Add it into the `.scroller-inner`
      animasionContent.forEach((item) => {
        const duplicatedItem = item.cloneNode(true);
        duplicatedItem.setAttribute("aria-hidden", true);
        animasion.appendChild(duplicatedItem);
      });

      animasionContent.forEach((item) => {
        const duplicatedItem = item.cloneNode(true);
        duplicatedItem.setAttribute("aria-hidden", true);
        animasion.appendChild(duplicatedItem);
      });
    });
  }
});
</script>
