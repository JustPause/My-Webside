<script setup>
const likis = [
  { Title: "My Resume", Icon: "My_Resume", Link: "#", BGColor: "#ff00ff" },
  { Title: "LinkedIn", Icon: "LinkedIn", Link: "#" },
  { Title: "Email", Icon: "Email", Link: "#" },
  { Title: "GitHub", Icon: "GitHub", Link: "#" },
];
</script>

<template>
  <div className="flex flex-col items-center relative">
    <div className="absolute -top-10">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="620"
        height="227"
        viewBox="0 0 620 227"
        fill="none"
        
      >
        <text x="176" y="30" fill="white" font-size="2.5em">More about me</text>
        <path
          d="M0 30.5C0 13.9315 13.4315 0.5 30 0.5H122.25C133.434 0.5 142.5 9.56623 142.5 20.75C142.5 31.9338 151.566 41 162.75 41H459.75C470.934 41 480 31.9338 480 20.75C480 9.56623 489.066 0.5 500.25 0.5H590C606.569 0.5 620 13.9315 620 30.5V196.5C620 213.069 606.569 226.5 590 226.5H30C13.4315 226.5 0 213.069 0 196.5V30.5Z"
          fill="white"
          fill-opacity="0.1"
        />
      </svg>
    </div>

    <div id="boxesBox" className="inline-flex gap-4 flex-wrap items-center justify-center content-center" style="width: 620px;height: 185px;">
      <div
        :href="liki.Link"
        v-for="(liki, index) in likis"
        :id="liki.Title"
        className="h-16 w-64 bg-slate-400 "
      ></div>
    </div>
  </div>

</template>

<style>
.container {
  width: 150px;
  height: 150px;
  position: relative;
  margin: 30px;
}

.box {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0.7;
  background: #0057e3;
}

.overlay {
  z-index: 9;
  margin: 30px;
  background: #009938;
}
</style>
