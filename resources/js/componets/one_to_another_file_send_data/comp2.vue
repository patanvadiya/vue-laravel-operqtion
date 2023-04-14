<template>
<h1>comps 2</h1>
<h3> {{ id }}</h3>

</template>

<!-- <script>

export default {

    props:{
        id:{
            type:String,
            required:true,
        },
    },

    setup(props,context) {
        console.log(context);
    }


}

</script> -->

<script setup>

const props = defineProps({
    id: String,
});

</script>
