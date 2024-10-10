<script setup>
const likis = [
  {
    Title: "My Resume",
    Icon: "7218126_resume_business_cv_work_job_icon",
    Link: "#",
    BGColor: "darkorange",
    TextColor: "black"
  },
  {
    Title: "LinkedIn",
    Icon: "104493_linkedin_icon",
    Link: "#",
    BGColor: "#0A66C2",
    TextColor: "black"
  },
  {
    Title: "Email",
    Icon: "211660_email_icon",
    Link: "#",
    BGColor: "#566E3D",
    TextColor: "black"
  },
  {
    Title: "GitHub",
    Icon: "2916248_github_marketing_media_social_website_icon",
    Link: "https://github.com/JustPause",
    BGColor: "#000",
    TextColor: "white"
  },
];
</script>

<template>
  <div className="flex flex-col items-center relative my-48">
    <div className="absolute -top-10 z-0">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="620"
        height="227"
        viewBox="0 0 620 227"
        fill="none"
      >
        <path
          d="M0 30.5C0 13.9315 13.4315 0.5 30 0.5H122.25C133.434 0.5 142.5 9.56623 142.5 20.75C142.5 31.9338 151.566 41 162.75 41H459.75C470.934 41 480 31.9338 480 20.75C480 9.56623 489.066 0.5 500.25 0.5H590C606.569 0.5 620 13.9315 620 30.5V196.5C620 213.069 606.569 226.5 590 226.5H30C13.4315 226.5 0 213.069 0 196.5V30.5Z"
          fill="#323232"
          fill-opacity="1"
        />
        <text x="176" y="30" fill="white" font-size="2.5em">More about me</text>
      </svg>
    </div>

    <div
      id="boxesBox"
      className="inline-flex gap-4 flex-wrap items-center justify-center content-center z-10"
      style="width: 620px; height: 185px"
    >
      <div
        :href="liki.Link"
        v-for="(liki, index) in likis"
        :id="liki.Title"
        class="h-16 bg-slate-400 rounded-2xl inline-flex gap-4"
        :style="{ 'background-color': liki.BGColor }"
        style="width: 17.6rem;"
      >
        <!-- <div id="Nuotrauka" className="pl-2 content-center w-1/3">
          <img :src="'src/img/'+liki.Icon + '.svg'" alt="My Happy SVG" :width="50"/>
        </div> -->
        <div id="Pavadinimas" className="content-center text-center w-full">
          <p className="text-xl font-semibold" :style="{ color: liki.TextColor }">{{ liki.Title }}</p>
        </div>
      </div>
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
