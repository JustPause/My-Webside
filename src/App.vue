<script setup>
import TopBar from './components/TopBar.vue'
import PartOne from './components/PartOne.vue'
import PartTwo from './components/PartTwo.vue'
import PartTree from './components/PartThree.vue'
import PartFour from './components/PartFour.vue'
import PartFive from './components/PartFive.vue'
import PartSix from './components/PartSix.vue'
</script>

<template>
  <header>
    <TopBar />
  </header>

  <main>
    <PartOne />
    <PartTwo />
    <PartTree />
    <PartFour />
    <PartFive />
    <PartSix />
  </main>
</template>

<style scoped>
.logo {
  display: block;
  margin: 0 auto 2rem;
}

main {
  background-color: var(--color-background-soft);
}
</style>
