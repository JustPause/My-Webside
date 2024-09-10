<template>
  <div
    name="ProgrammingPart"
    className="flex justify-center items-center gap-96 self-stretch text-center pb-8"
  >
    <p :class="textDinamicClasses(index)" v-if="index != 1">
      {{ page.text }}
    </p>
    <img
      :src="`/src/img/${page.img}.jpg`"
      :alt="page.altImgText"
      :class="imgDinamicClasses(index)"
    />

    <p :class="textDinamicClasses(index)" v-if="index == 1">
      {{ page.text }}
    </p>
  </div>
</template>
<script>
export default {
  props: ["page", "index"],
  data() {
    return {
      textStaticClasses:
        "w-6/12  from-neutral-800 to-neutral-900 p-8 border border-neutral-700 ",

      imgStaticClasses: "w-4/12 border border-neutral-700",

      textDinamicClasses(index) {
        switch (index) {
          case 0:
            return [
              "rounded-4xl",
              "rounded-tl-none",
              "rounded-br-none",
              "bg-gradient-to-r",
              this.textStaticClasses,
            ];
          case 1:
          return [
              "rounded-4xl",
              "rounded-tr-none",
              "rounded-bl-none",
              "bg-gradient-to-l",
              this.textStaticClasses,
            ];
          default:
          return [
              "rounded-4xl",
              "rounded-tl-none",
              "rounded-br-none",
              "bg-gradient-to-r",
              this.textStaticClasses,
            ];
        }
      },

      imgDinamicClasses(index) {
        switch (index) {
          case 0:
            return ["rounded-tl-4xl","rounded-br-4xl", this.imgStaticClasses];
          case 1:
            return ["rounded-tr-4xl","rounded-bl-4xl", this.imgStaticClasses];
          default:
            return ["rounded-tl-4xl","rounded-br-4xl", this.imgStaticClasses];
        }
      },
    };
  },
};
</script>
<style scoped></style>
