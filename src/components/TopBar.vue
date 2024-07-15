<script setup>
import Menus from "./TopBar/Menu.vue";
import UserTheme from "./TopBar/UserTheme.vue";
</script>

<template>
  <div class="menu-container">
    <Menus />

    <UserTheme />
  </div>
</template>

<style>
.menu-container {
  grid-column-gap: 0.5rem;
  grid-row-gap: 0.5rem;
  padding: 2rem;
  display: flex;
  align-items: flex-start;
  position: fixed;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
}

.MenuClass {
  background-color: var(--color-background);
  border-radius: var(--border-radius);
  padding: 0.5em 1em;
}

header {
  line-height: 1.5;
  display: inline;
  display: flex;
}

.logo {
  margin: 0 2rem 0 0;
}

header .wrapper {
  display: flex;
  place-items: flex-start;
  flex-wrap: wrap;
}
</style>
