<template>
    <div name="ProgrammingPart" className="flex justify-center items-center gap-56 self-stretch text-center">

        <img :src="`/src/img/${page.img}.jpg`" alt="images of me"
            className="w-4/12 rounded-4xl border border-neutral-700">
        <p
            className="w-6/12 bg-gradient-to-r from-neutral-800 to-neutral-900 p-8 rounded-tr-4xl rounded-bl-4xl border border-neutral-700">
            {{ page.text }}
        </p>
    </div>
</template>
<script>
export default {
    props: ['page'],
    
    methods: {
        getClass(index) {
            // Add 'highlight' class to the 2nd and 3rd items (index 1 and 2)
            if (index === 1 || index === 2) {
                return 'highlight';
            }
            return '';
        }
    }
}
</script>
<style scoped></style>