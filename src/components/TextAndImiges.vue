<template>
    <div name="ProgrammingPart" className="flex justify-center items-center gap-56 self-stretch text-center">
        <p
            className="w-6/12 bg-gradient-to-r from-neutral-800 to-neutral-900 p-8 rounded-tr-4xl rounded-bl-4xl border border-neutral-700">
            {{ page.text }}
        </p>
        <img :src="`/src/img/${page.img}.jpg`" alt="images of me"
            className="w-4/12 rounded-4xl border border-neutral-700">
    </div>
</template>
<script>
export default {
    props: ['page']
}
</script>
<style scoped></style>