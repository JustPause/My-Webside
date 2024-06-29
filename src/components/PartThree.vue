<script>
import connectBar from "./connectBar.vue";
</script>
<template>
  <div class="text flex" style="padding-bottom: 1em">
    <div id="Left">
      <h2>
        As a programmer, I am dedicated to creating robust and maintainable
        products. In other words, I strive to produce works of art.
      </h2>
    </div>
    <div class="SplitH"></div>
    <div id="NotLeft">
      <a href="#CV">(About me)</a>

      <div id="z213a">
        <a class="links">Linkin</a>
        <a class="links">Github</a>
        <a class="links">Telegram</a>
      </div>

      <connectBar />
    </div>
  </div>
  <div class="SplitV"></div>
</template>

<style>
:root {
  --size: 0.2em;
}

#Left {
  width: 59.65%;
  float: left;
}

#NotLeft {
  width: auto;
  float: right;
}
</style>
