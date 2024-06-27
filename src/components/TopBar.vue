<script setup>
import Menus from './TopBar/Menu.vue'
import UserTheme from './TopBar/UserTheme.vue'
</script>

<template>
    <div class="menu-container">
        <Menus />

        <UserTheme />

    </div>
</template>

<style>
.menu-container {
    width: var(--page-width);
    grid-column-gap: .5rem;
    grid-row-gap: .5rem;
    justify-content: flex-end;
    margin-left: auto;
    margin-right: auto;
    padding: 2rem;
    display: flex;
    position: fixed;
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

@media (min-width: 1024px) {}
</style>