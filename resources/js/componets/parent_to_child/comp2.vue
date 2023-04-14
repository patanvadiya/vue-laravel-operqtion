<template>
    <h3 class="text-center">comp2</h3>
    <h3 class="text-center ">{{ sendUserData.name }} - {{ sendUserData.email }}</h3>

</template>

<!-- <script>

export default {

    props:{
        sendUserData:Object
    }

}

</script> -->

<script setup>

const props = defineProps({
    sendUserData: String,
});

</script>
