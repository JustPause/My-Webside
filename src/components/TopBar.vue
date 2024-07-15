<script setup>
import Menus from "./TopBar/Menu.vue";
import UserTheme from "./TopBar/UserTheme.vue";
</script>

<template>
  <div>
    <div class="menu-container">
      <Menus />

      <UserTheme />
    </div>
  </div>
</template>

<style>
.menu-container {
  grid-column-gap: 0.5rem;
  grid-row-gap: 0.5rem;
  padding: 2rem;
  display: flex;
  position: fixed;
  width: var(--page-width);
  flex-direction: row-reverse;
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

@media only screen and (max-width: 1280px) {
  body {
    font-size: 20px;
  }
  .menu-container {
    width: auto;
    right: 0;
  }
}
</style>
