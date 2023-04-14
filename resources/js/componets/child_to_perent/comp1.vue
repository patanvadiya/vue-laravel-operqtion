<template>
    <h1>
        comp 1</h1>
    <comp2 @sendData="handle($event)"></comp2>
</template>

<!-- -----------------------------------------
    simple way------------------------------------------------------ -->

<!--<script>
import comp2 from "../child_to_perent/comp2.vue"

export default {
    components: {
        comp2
    },

    setup(props) {

        function handle(data) {
            console.log(data.name);
        }

        return {
            handle
        }

    }
}
</script>-->

<!-- -----------------------------------------
 end simple way------------------------------------------------------ -->


 <!-- ----------------------------------------- with Script setup------------------------------------------------------ -->


 <!-- above code and below code same but below code is better then above code -->

<script setup>
import comp2 from "../child_to_perent/comp2.vue"
import { inject,provide } from "vue";



provide('key','axay')

function handle(data) {
    // console.log(data.name);
}
</script>
