<script setup>
const pages = [
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

  <div className="inline-flex h-80 ">
    <!-- overflow-scroll -->
    <a
      class="contaner"
      className="w-72 h-72 bg-slate-600 p-8 rounded-4xl"
      href="#"
    >
      <h1 className="text-2xl pb-2">My andriod project</h1>
      <p className="overflow-ellipsis break-words text-justify">
        In <b>Vilnius Coding Scool</b>, my final project was, to make a project
        in <b>Java</b> with <b>SQL</b>. So that is my project. It is the Andriod
        program, main in <b>Andriod studio</b>, with <b>SQLite</b> database.
        With <b>Room</b> framework
      </p>
    </a>

    <!-- https://codepen.io/kevinpowell/pen/BavVLra -->
  </div>
</template>

<style scoped></style>
